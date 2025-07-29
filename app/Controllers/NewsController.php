<?php

namespace App\Controllers;

use App\Models\NewsModel;

class NewsController extends BaseController
{
    protected $NewsModel;

    public function __construct()
    {
        $this->NewsModel = new NewsModel();
    }

    public function index()
    {
        helper('text');
        $data['news'] = $this->NewsModel->orderBy('date_posted', 'DESC')->findAll();
        return view('pages/news', $data);
    }


    public function create()
    {
        return view('news_create');
    }

    public function detail($id)
    {
        $newsModel = new \App\Models\NewsModel();
        $data['news'] = $newsModel->find($id);

        if (!$data['news']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Berita tidak ditemukan.');
        }

        return view('pages/newsdetail', $data);
    }
}
