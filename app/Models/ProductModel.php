<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'product_id';
    protected $allowedFields = ['deskripsi', 'nama', 'spesifikasi', 'img_url', 'category_id'];


    public function insert_product($data)
    {
        return $this->insert($data);
    }
}
