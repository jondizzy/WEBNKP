<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'category';
    protected $primaryKey = 'category_id';
    protected $allowedFields = ['name'];


    public function insert_category($data)
    {
        return $this->insert($data);
    }
}
