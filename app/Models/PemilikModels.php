<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilikModels extends Model
{
    protected $table      = 'pemilik';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Nama','Alamat', 'Telepon', 'Email'];
}