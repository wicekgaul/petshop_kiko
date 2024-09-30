<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatKeluarModels extends Model
{
    protected $table      = 'obatkeluar';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Tanggal', 'Catatan'];
}