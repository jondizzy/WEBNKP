<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function loginForm()
    {
        return view('pages/admin/login');
    }

    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username == 'admin' && $password == 'admin123') {
            session()->set('logged_in', true);
            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->to('/login')->with('error', 'Username atau Password salah.');
        }
    }

    public function dashboard()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('pages/admin/dashboard', ['title' => 'Dashboard']);
    }



    //BAGIAN NEWS SEMUA KEBAWAH
    public function news()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $newsModel = new \App\Models\NewsModel();
        $data['news'] = $newsModel->findAll(); // Ambil semua data news
        $data['title'] = 'News';

        return view('pages/admin/AdminNews', $data);
    }

    public function add_news_form()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('pages/admin/add_news'); // pastikan path view sesuai
    }

    public function addNews()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/webp]|max_size[image,2048]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Proses upload gambar
        $image = $this->request->getFile('image');
        $nama_file = $image->getRandomName();
        $image->move('images/news/', $nama_file);

        // Simpan data ke database
        $newsModel = new \App\Models\NewsModel();
        $data = [
            'category' => $this->request->getPost('category'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'image_url' => $nama_file,
            'date_posted' => date('Y-m-d H:i:s')
        ];
        $newsModel->insert_news($data);

        return redirect()->to('/admin/AdminNews')->with('success', 'Berita berhasil ditambahkan.');
    }


    public function editNews($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        $newsModel = new \App\Models\NewsModel();
        $news = $newsModel->find($id);

        if (!$news) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan');
        }

        return view('pages/admin/edit_news', ['news' => $news]);
    }

    public function updateNews($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        $newsModel = new \App\Models\NewsModel();

        // Validasi input
        $validation = \Config\Services::validation();
        $rules = [
            'category' => 'required',
            'title' => 'required',
            'description' => 'required'
        ];

        if ($this->request->getFile('image')->isValid()) {
            $rules['image'] = 'uploaded[image]|mime_in[image,image/jpg,image/jpeg,image/png,image/webp]|max_size[image,2048]';
        }

        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'category' => $this->request->getPost('category'),
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
        ];

        $image = $this->request->getFile('image');
        if ($image && $image->isValid()) {
            $nama_file = $image->getRandomName();
            $image->move('images/news/', $nama_file);
            $data['image_url'] = $nama_file;
        }

        $newsModel->update($id, $data);

        return redirect()->to('/admin/AdminNews')->with('success', 'Berita berhasil diperbarui.');
    }


    public function deleteNews($id)
    {
        $newsModel = new \App\Models\NewsModel();
        $news = $newsModel->find($id);

        if ($news) {
            // Hapus file gambar jika ada
            $imagePath = FCPATH . 'images/news/' . $news['image_url'];
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            // Hapus data dari database
            $newsModel->delete($id);

            return redirect()->to(base_url('admin/AdminNews'))->with('success', 'Berita berhasil dihapus.');
        } else {
            return redirect()->to(base_url('admin/AdminNews'))->with('error', 'Berita tidak ditemukan.');
        }
    }


    //BAGIAN CATEGORY SEMUA KEBAWAH
    public function category()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        $categoryModel = new \App\Models\CategoryModel();
        $data['category'] = $categoryModel->findAll();
        $data['name'] = 'Kategori';

        return view('pages/admin/AdminCategory', $data);
    }

    public function add_category_form()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        return view('pages/admin/add_category');
    }

    public function addCategory()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }

        // Validasi input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data ke database
        $categoryModel = new \App\Models\CategoryModel();
        $data = [
            'name' => $this->request->getPost('name')
        ];
        $categoryModel->insert_category($data);

        return redirect()->to('/admin/AdminCategory')->with('success', 'Kategori berhasil ditambahkan.');
    }


    public function editCategory($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        $categoryModel = new \App\Models\CategoryModel();
        $category = $categoryModel->find($id);

        if (!$category) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kategori tidak ditemukan');
        }

        return view('pages/admin/edit_category', ['category' => $category]);
    }

    public function updateCategory($id)
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        }
        $categoryModel = new \App\Models\CategoryModel();

        // Validasi input
        $validation = \Config\Services::validation();
        $rules = [
            'name' => 'required'
        ];

        $validation->setRules($rules);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
        ];

        $categoryModel->update($id, $data);

        return redirect()->to('/admin/AdminCategory')->with('success', 'Kategori berhasil diperbarui.');
    }

    public function deleteCategory($id)
    {
        $categoryModel = new \App\Models\CategoryModel();
        $category = $categoryModel->find($id);

        if ($category) {
            $categoryModel->delete($id);

            return redirect()->to(base_url('admin/AdminCategory'))->with('success', 'Kategori berhasil dihapus.');
        } else {
            return redirect()->to(base_url('admin/AdminCategory'))->with('error', 'Kategori tidak ditemukan.');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
