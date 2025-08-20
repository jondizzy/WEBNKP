<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $allowedFields = ['name', 'img_url', 'deskripsi'];


    public function insert_category($data)
    {
        return $this->insert($data);
    }
    public function getCategory($category_id)
    {
        return $this->asArray()->where(['category_id' => $category_id])->first();
    }
    public function getImage($category_id)
    {
        return $this->asArray()->where(['category_id' => $category_id])->first();
    }
}
