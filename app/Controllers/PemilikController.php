<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PemilikController extends BaseController
{
    public function index()
 
    {
        return view('Pemilik/index');
    
        //
    }
}
