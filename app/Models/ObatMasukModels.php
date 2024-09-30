<?php

namespace App\Models;

use CodeIgniter\Model;

class ObatMasukModels extends Model
{
    protected $table      = 'obatmasuk';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Tanggal', 'Asal', 'Catatan'];
}