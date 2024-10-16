<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatModels extends Model
{
    protected $table      = 'Obat';
    
    protected $primaryKey = 'Obat_id';

    protected $allowedFields = ['Kode', 'Nama', 'Satuan', 'Keterangan', 'Dokter_id'];
}