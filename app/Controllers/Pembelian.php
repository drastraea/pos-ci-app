<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPembelian;

class Pembelian extends BaseController
{

    public function __construct()
    {
        $this->ModelPembelian = new ModelPembelian();
    }
    public function index()
    {
        $data = [
            'judul' => 'Admin Harmonis 1',
            'subjudul' => 'Pembelian',
            'menu' => 'pembelian',
            'submenu' => 'pembelian',
            'page' => 'pembelian',
            'pembelian' => $this->ModelPembelian->AllData(),
        ];
        return view('template', $data);
    }

    public function Beli()
    {
        //tambahkan data pembelian
        $data = [
            'tanggal_pembelian'=> $this->request->getVar('tanggal_pbln'),
            'nama_pembelian'=> $this->request->getVar('nama_pbln'),
            'nama_pembelian'=> $this->request->getVar('nama_pbln'),
            'tipe_pembelian'=> $this->request->getVar('tipe_pbln'),
            'berat_pembelian'=> $this->request->getVar('berat_pbln'),
            'harga_pembelian'=> $this->request->getVar('harga_pbln')];
            $this->ModelPembelian->Beli($data);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan!');
        return redirect()->to(base_url('/pembelian'));
    }
        //Update data pembelian
    public function UpdateData($id_pembelian)
    {
        $data = [
            'id_pembelian' => $id_pembelian,
            'tanggal_pembelian' => $this->request->getVar('tanggal_pbln'),
            'nama_pembelian' => $this->request->getVar('nama_pbln'),
            'kadar_pembelian' => $this->request->getVar('kadar_pbln'),
            'berat_pembelian' => $this->request->getVar('berat_pbln'),
            'harga_pembelian' => $this->request->getVar('harga_pbln')];
            print_r($data);

            $this->ModelPembelian->UpdateData($data);
            
        session()->setFlashdata('pesan','Data Berhasil Diedit!');
        return redirect()->to(base_url('/pembelian'));
    }
            //Hapus data pembelian
            public function DeleteData($id_pembelian)
            {
                $data = [
                    'id_pembelian' => $id_pembelian,
                ];
                    $this->ModelPembelian->DeleteData($data);
                    
                session()->setFlashdata('pesan','Data Berhasil Dihapus!');
                return redirect()->to(base_url('/pembelian'));
            }

}