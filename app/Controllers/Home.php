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
