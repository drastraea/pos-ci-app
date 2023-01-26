<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
    }
    public function index()
    {
        $tgl = date('Ymd');
        $data = [
            'judul' => 'Admin Harmonis 1',
            'namatoko' => 'Harmonis I',
            'subjudul' => '',
            'menu' => 'admin',
            'submenu' => '',
            'page' => 'admin',
            'blok' => 'Blok A. No. 104-105-106',
            'pasar' => 'PASAR INPRES II - KLANDASAN, BALIKPAPAN',
            'rumah' => 'Jl. Letkol H. Asnawi Arbain No. 112, Balikpapan',
            'no_hp' => '0812 1711 2770',
            'ig' => 'toko_emas_harmonis1',
            'print' => 'cetaknota',
            'harianjual' => $this->ModelAdmin->DataJualHariIni($tgl),
            'harianbeli' => $this->ModelAdmin->DataBeliHariIni($tgl),
        ];
        return view('template', $data);
    }
    // Setting Menu
    public function Setting()
    {
        $data = [
            'judul' => 'Setting',
            'subjudul' => 'pengaturan',
            'menu' => 'Setting',
            'submenu' => 'setting',
            'page' => 'setting',

        ];
        return view('template', $data);
    }
    public function Stok()
    {
        $data = [
            'judul' => 'Stok',
            'subjudul' => 'Stok Barang',
            'menu' => 'Stok',
            'submenu' => 'stok',
            'page' => 'stok/stok',
            'stok' => $this->ModelAdmin->Stok(),
            ];
    return view('template', $data);
    }
    public function StokHarian()
    {
        // $fotoJual = $this->request->getFile('foto');
        // $fotoJual -> move('stok');
        // $namafoto = $fotoJual->getName();
        //tambahkan data penjualan
        $data = [
            'tanggal'=> $this->request->getVar('tanggal'),
            'piring'=> $this->request->getVar('piring'),
            'berat' => $this->request->getVar('berat'),
            'keluar' => $this->request->getVar('keluar'),
            'masuk' => $this->request->getVar('masuk'),
            // 'foto' => $namafoto,
        ];
        // dd($data);
        print_r($data);
            $this->ModelAdmin->StokHarian($data);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan!');
        return redirect()->to(base_url('/admin/stok'));
    }
    public function UpdateStok($id)
    {
        $data = [
            'id' => $id,
            'tanggal'=> $this->request->getVar('tanggal'),
            'piring'=> $this->request->getVar('piring'),
            'berat' => $this->request->getVar('berat'),
            'keluar' => $this->request->getVar('keluar'),
            'masuk' => $this->request->getVar('masuk'),
        ];
        print_r($data);
        $this->ModelAdmin->UpdateStok($data);
            
        session()->setFlashdata('pesan','Data Berhasil Diedit!');
        return redirect()->to(base_url('/admin/stok'));
    }
    public function DeleteStok($id)
    {
        $data = [
                'id' => $id,
                ];
        $this->ModelAdmin->DeleteStok($data);
        
        session()->setFlashdata('pesan','Data Berhasil Dihapus!');
        return redirect()->to(base_url('/admin/stok'));
    }
}