<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new \App\Models\ProductModel();
    }

    public function index()
    {
        helper('text');
        $data['produk'] = $this->ProductModel->findAll();
        return view('pages/ProductCategory', $data);
    }

    // public function create()
    // {
    //     return view('');
    // }
    public function ProductView()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $ProductModel = new \App\Models\ProductModel();
        $data['produk'] = $ProductModel->findAll();
        $data['title'] = 'Product';

        return view('pages/admin/....', $data);
    }


    public function ProductDetail($id)
    {
        $ProductModel = new \App\Models\ProductModel();
        $data['produk'] = $ProductModel->find($id);

        if (!$data['produk']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Berita tidak ditemukan.');
        }

        return view('pages/productdetail', $data);
    }
    public function add_product_form()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('pages/admin/add_product');
    }


    public function addproduct()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'spesifikasi' => 'required',
            'deskripsi' => 'required',
            'category_id' => 'required',
            'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/webp]|max_size[image,2048]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Proses upload gambar
        $image = $this->request->getFile('image');
        $nama_file = $image->getRandomName();
        $image->move('images/product/', $nama_file);

        // Simpan data ke database
        $data = [
            'nama' => $this->request->getPost('nama'),
            'spesifikasi' => $this->request->getPost('spesifikasi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'category_id' => $this->request->getPost('category_id'),
            'img_url' => $nama_file,
        ];

        $this->ProductModel->insert_product($data);

        return redirect()->to('/admin/dashboard')->with('success', 'Product berhasil ditambahkan.');
    }
}
