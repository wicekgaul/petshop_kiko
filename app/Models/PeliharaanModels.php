<?php

namespace App\Models;

use CodeIgniter\Model;

class  PeliharaanModels extends Model
{
    protected $table      = 'peliharaan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Nama','Jenis','Ras','Usia', 'BeratBadan', 'Pemilik_id'];
}