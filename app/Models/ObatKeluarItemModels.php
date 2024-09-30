<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatKeluarItemModels extends Model
{
    protected $table      = 'obatkeluaritem';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Jumlah', 'Keterangan', 'ObatKeluar_id', 'Obat_id'];
}