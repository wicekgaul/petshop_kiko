<?php

namespace App\Models;

use CodeIgniter\Model;

class RekamMediksModels extends Model
{
    protected $table      = 'rekammediks';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Peliharaan', 'Keluhan', 'Penanganan', 'Resep', 'Tanggal', 'Dokter_id', 'Peliharaan_id'];
}