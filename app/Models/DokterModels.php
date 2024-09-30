<?php

namespace App\Models;

use CodeIgniter\Model;

class DokterModels extends Model
{
    protected $table      = 'dokter';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Nama','JenisKelamin','Telepon','Alamat', 'Email', 'Photo', 'User_id'];
}