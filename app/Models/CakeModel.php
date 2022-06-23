<?php

namespace App\Models;

use CodeIgniter\Model;

class CakeModel extends Model
{

    protected $table = 'cake';
    protected $allowedFields = ['kode', 'nama', 'kategori', 'jumlah', 'harga', 'deskripsi'];
}
