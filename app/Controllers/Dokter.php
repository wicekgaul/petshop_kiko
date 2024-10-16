<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DokterModels;
use App\Models\UserModels;

class Dokter extends BaseController
{
    protected $Dokter;
    protected $user;
    public function __construct()
    {
        $this->Dokter = new DokterModels();
        $this->user = new UserModels();
    }
    public function index()
    {
        $data = [
            'Dokter' => $this->Dokter->findAll(),
            'title' => "PETHSOP | Dokter",
            'judul' => "Data Dokter"
        ];
        return view('admin/dokter/index', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => "PETHSOP | Dokter",
            'judul' => "Data Dokter"
        ];
        return view('admin/dokter/tambah', $data);
    }

    public function save()
    {
        try {
            $user = [
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('username'), PASSWORD_DEFAULT),
            ];
            $this->user->insert($user);
            $User_id = $this->user->getInsertID();
            $dokter = [
                'User_id' => $User_id,
                'Nama' => $this->request->getVar('Nama')
            ];
            $this->Dokter->save($dokter);
            return redirect()->to(base_url('dokter'));
        } catch (\Throwable $th) {
        }
    }
}
