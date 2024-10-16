<?php

namespace App\Controllers;
use App\Controllers\BaseController;
class Obat extends BaseController
{
    public function index()
    {
        $data=[
            'title' => "PETHSOP | Obat",
              'judul' => "Data Obat"
        ];
        return view('admin/obat/index',$data);
    }
}
