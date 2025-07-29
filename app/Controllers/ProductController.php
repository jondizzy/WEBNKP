<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function productdetail()
    {
        return view('pages/productdetail', ['title' => 'Product Detail']);
    }
}