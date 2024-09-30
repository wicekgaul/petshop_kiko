<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatMasukItemModels extends Model
{
    protected $table      = 'obatmasukitem';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Jumlah', 'Obat_id', 'ObatMasuk_id'];
}