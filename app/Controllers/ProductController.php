<?php

namespace App\Controllers;

class ProductController extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new \App\Models\ProductModel();
    }

    // public function index()
    // {
    //     helper('text');
    //     $data['produk'] = $this->ProductModel->findAll();
    //     return view('pages/ProductCategory', $data);
    // }

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
        $data['nama'] = 'produk';
        // dd($data['produk']);
        return view('pages/admin/AdminProduct', $data);
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
        $categoryModel = new \App\Models\CategoryModel();
        $categories = $categoryModel->findAll();

        return view('pages/admin/add_product', [
            'categories' => $categories
        ]);
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

        $CategoryModel = new \App\Models\CategoryModel();
        $data['category'] = $CategoryModel->findAll();


        $this->ProductModel->insert_product($data);

        return redirect()->to('/admin/AdminProduct')->with('success', 'Product berhasil ditambahkan.');
    }

    public function editproduct($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        $ProductModel = new \App\Models\ProductModel();
        $produk = $ProductModel->find($id);

        if (!$produk) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Produk tidak ditemukan');
        }

        return view('pages/admin/edit_product', ['product' => $produk]);
    }


    public function updateproduct($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        $ProductModel = new \App\Models\ProductModel();

        // Validasi input
        $validation = \Config\Services::validation();
        $rules = [
            'nama' => 'required',
            'spesifikasi' => 'required',
            'deskripsi' => 'required',
            'category_id' => 'required',
        ];

        if ($this->request->getFile('image')->isValid()) {
            $rules['image'] = 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/webp]|max_size[image,2048]';
        }

        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'spesifikasi' => $this->request->getPost('spesifikasi'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'category_id' => $this->request->getPost('category_id')
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $nama_file = $image->getRandomName();
            $image->move('images/product/', $nama_file);
            $data['img_url'] = $nama_file;
        }

        $ProductModel->update($id, $data);

        return redirect()->to('/admin/dashboard')->with('success', 'produk berhasil diperbarui.');
    }
    public function deleteproduct($id)
    {
        $ProductModel = new \App\Models\ProductModel();
        $produk = $ProductModel->find($id);

        if ($produk) {
            // Hapus file gambar jika ada
            $imagePath = FCPATH . 'images/news/' . $produk['img_url'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Hapus data dari database
            $ProductModel->delete($id);

            return redirect()->to(base_url('admin/AdminProduct'))->with('success', 'Produk berhasil dihapus.');
        } else {
            return redirect()->to(base_url('admin/AdminProduct'))->with('error', 'Produk tidak ditemukan.');
        }
    }
}
