<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Home extends BaseController
{
    public function index()
    {
        helper('text');

        $newsModel = new NewsModel();

        $data = [
            'title' => 'Beranda',
            'news'  => $newsModel->orderBy('date_posted', 'DESC')->findAll(6),
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        return view('pages/aboutUs', ['title' => 'Tentang Kami']);
    }

    public function ProductCategory()
    {
        return view('pages/ProductCategory', ['title' => 'Product Category']);
    }

    public function client()
    {
        return view('pages/client', ['title' => 'Client']);
    }

    public function contact()
    {
        return view('pages/contact', ['title' => 'Contact']);
    }

    public function newsdetail()
    {
        return view('pages/newsdetail', ['title' => 'News Detail']);
    }
    public function productdetail()
    {
        return view('pages/productdetail', ['title' => 'Product Detail']);
    }
    public function clientDetail($slug)
    {
        $clients = [
            'myrepublic' => [
                'title' => 'MY REPUBLIC JUNCTION',
                'location' => 'GREEN OFFICE PARK 6 BSD',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Iaculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. Ad litora torquent per conubia nostra inceptos himenaeos.',
                'image' => '/images/client1.jpeg'
            ],
        ];

        if (!array_key_exists($slug, $clients)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data['client'] = $clients[$slug];
        return view('pages/client/detail', $data);
    }
}
