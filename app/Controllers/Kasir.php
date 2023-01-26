<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJual;
use App\Models\ModelBeli;
use App\Controllers\Admin;
use App\Helper\harmonis_helper;

class Kasir extends BaseController
{
    public function __construct()
    {
        $this->ModelJual = new ModelJual();
        $this->ModelBeli = new ModelBeli();
        $this->Admin = new Admin();
        helper('terbilang');
    }
    public function index()
    {
        $data = [
            'judul' => 'Kasir',
            'subjudul' => 'Menu Utama',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'kasir/menukasir',

        ];
        return view('templates', $data);
    }
    public function KasirJual()
    {
        $tgl = date('Ymd');
        $data = [
            'judul' => 'Kasir',
            'subjudul' => 'Jual',
            'menu' => 'dashboard',
            'submenu' => '',
            'page' => 'kasir/kasirjual',
            'penjualan' => $this->ModelJual->AllData(),
            'no_faktur'=> $this->ModelJual->NoFaktur(),
            'hasil' => $this->ModelJual->DataHariIni($tgl),
        ];
        return view('templates', $data);
    }
    public function Jual()
    {
        $fotoJual = $this->request->getFile('foto_jual');
        $fotoJual->move('foto');
        $namafoto = $fotoJual->getName();
        $data = [
            'no_faktur' => $this->request->getVar('invoice_jual'),
            'tanggal_penjualan' => $this->request->getVar('tanggal_jual'),
            'nama_penjualan' => $this->request->getVar('nama_jual'),
            'tipe_penjualan'=> $this->request->getVar('tipe_jual'),
            'kadar_penjualan' => $this->request->getVar('kadar_jual'),
            'berat_penjualan' => $this->request->getVar('berat_jual'),
            'harga_penjualan' => $this->request->getVar('harga_jual'),
            'foto' => $namafoto,];
        $this->ModelJual->Jual($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to(base_url('/Kasir/KasirJual'));
    }
    public function KasirBeli()
    {
        $tgl = date('Ymd');
        $data = [
            'judul' => 'Kasir',
            'subjudul' => 'Jual',
            'page' => '/kasir/kasirbeli',
            'hasil' => $this->ModelBeli->DataHariIni($tgl),
        ];
        return view('templates', $data);
    }
    public function Beli()
    {
        // $fotoJual = $this->request->getFile('foto_jual');
        // $fotoJual -> move('foto');
        // $namafoto = $fotoJual->getName();
        $data = [
            'tanggal_pembelian' => $this->request->getVar('tanggal_beli'),
            'nama_pembelian' => $this->request->getVar('nama_beli'),
            'tipe_pembelian'=> $this->request->getVar('tipe_beli'),
            'kadar_pembelian' => $this->request->getVar('kadar_beli'),
            'berat_pembelian' => $this->request->getVar('berat_beli'),
            'harga_pembelian' => $this->request->getVar('harga_beli'),
            // 'foto' => $namafoto,
        ];
        $this->ModelBeli->Beli($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to(base_url('/Kasir/KasirBeli'));
    }
    public function Nota()
        {
            helper('terbilang');
            $nofaktur = $this->request->uri->getSegment(3);
            $data = [
                'terbilang' => helper('terbilang'),
                'data' => $this->ModelJual->Nota($nofaktur),
                'judul' => "Nota Belanja",
                'faktur' => $nofaktur,
                'toko' => $this->Admin->index(),
            ];

            //echo dd($this->ModelJual->Nota($nofaktur));
            return view('templatenota', $data);
        }
}