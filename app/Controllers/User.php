<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
    public function __construct()
    {
        $this->ModelUser = new ModelUser();
    }
    public function index()
    {
        $data = [
            'judul' => 'Kasir Harmonis 1',
            'subjudul' => 'User',
            'menu' => 'admin',
            'submenu' => 'user',
            'page' => 'user',
            'user' => $this->ModelUser->AllData(),
        ];
        return view('template', $data);
    }
    public function InsertData()
    {
        //tambahkan data user
        $data = [
            'nama_user'=> $this->request->getVar('nama_user'),
            'email'=> $this->request->getVar('email'),
            'password'=> sha1($this->request->getVar('password')),
            'level'=> $this->request->getVar('level'),
                ];
            $this->ModelUser->InsertData($data);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan!');
        return redirect()->to(base_url('/user'));
    }
    public function UpdateData($id_user)
    {
        //edit data user
        $data = [
            'id_user' => $id_user,
            'nama_user'=> $this->request->getVar('nama_user'),
            'email'=> $this->request->getVar('email'),
            'password'=> sha1($this->request->getVar('password')),
            'level'=> $this->request->getVar('level'),
           ];
            $this->ModelUser->UpdateData($data);
        session()->setFlashdata('pesan','Data User Berhasil Diedit!');
        return redirect()->to(base_url('/user'));
    }
    public function DeleteData($id_user)
    {
        //delete data user
        $data = [
            'id_user' => $id_user,
           ];
            $this->ModelUser->DeleteData($data);
        session()->setFlashdata('pesan','Data User Berhasil Dihapus!');
        return redirect()->to(base_url('/user'));
    }

}
