<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id_news';
    protected $allowedFields = ['category', 'title', 'description', 'image_url', 'date_posted'];


    public function insert_news($data)
    {
        return $this->insert($data); // Gunakan fungsi bawaan Model
    }
}
