<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModels extends Model
{
    protected $table      = 'obat';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Kode', 'Nama', 'Satuan', 'Keterangan', 'Dokter_id'];
}