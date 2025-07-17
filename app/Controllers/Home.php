<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home', ['title' => 'Beranda']);
    }

    public function about()
    {
        return view('pages/about', ['title' => 'Tentang Kami']);
    }
}
