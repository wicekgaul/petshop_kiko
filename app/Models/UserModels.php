<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModels extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['Username', 'Password', 'Role'];
}