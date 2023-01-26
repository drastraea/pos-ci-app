<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPenjualan;

class Penjualan extends BaseController
{

    public function __construct()
    {
        $this->ModelPenjualan = new ModelPenjualan();
    }
    public function index()
    {
        $data = [
            'judul' => 'Admin Harmonis 1',
            'subjudul' => 'Penjualan',
            'menu' => 'Penjualan',
            'submenu' => 'penjualan',
            'page' => 'penjualan',
            'no_faktur' => $this->ModelPenjualan->NoFaktur(),
            'penjualan' => $this->ModelPenjualan->AllData(),
        ];
        return view('template', $data);
    }

    public function Jual()
    {
        //tambahkan data penjualan
        $fotoJual = $this->request->getFile('foto_jual');
        $fotoJual -> move('foto');
        $namafoto = $fotoJual->getName();
        $data = [
            'tanggal_penjualan'=> $this->request->getVar('tanggal_pjln'),
            'nama_penjualan'=> $this->request->getVar('nama_pjln'),
            'tipe_penjualan'=> $this->request->getVar('tipe_pjln'),
            'kadar_penjualan'=> $this->request->getVar('kadar_pjln'),
            'berat_penjualan'=> $this->request->getVar('berat_pjln'),
            'harga_penjualan'=> $this->request->getVar('harga_pjln'),
            'no_faktur'=> $this->request->getVar('invoice_jual'),
            'foto' => $namafoto,];
            $this->ModelPenjualan->Jual($data);
        session()->setFlashdata('pesan','Data Berhasil Ditambahkan!');
        return redirect()->to(base_url('/penjualan'));
    }
        //Update data penjualan
    public function UpdateData($id_penjualan)
    {
        $data = [
            'id_penjualan' => $id_penjualan,
            'tanggal_penjualan' => $this->request->getVar('tanggal_pjln'),
            'nama_penjualan' => $this->request->getVar('nama_pjln'),
            'tipe_penjualan'=> $this->request->getVar('tipe_pjln'),
            'kadar_penjualan' => $this->request->getVar('kadar_pjln'),
            'berat_penjualan' => $this->request->getVar('berat_pjln'),
            'harga_penjualan' => $this->request->getVar('harga_pjln'),
            'no_faktur'=> $this->request->getVar('invoice_jual')];
            print_r($data);

            $this->ModelPenjualan->UpdateData($data);
            
        session()->setFlashdata('pesan','Data Berhasil Diedit!');
        return redirect()->to(base_url('/penjualan'));
    }
            //Hapus data penjualan
    public function DeleteData($id_penjualan)
            {
                $data = [
                    'id_penjualan' => $id_penjualan,
                ];
                    $this->ModelPenjualan->DeleteData($data);
                    
                session()->setFlashdata('pesan','Data Berhasil Dihapus!');
                return redirect()->to(base_url('/penjualan'));
            }

}