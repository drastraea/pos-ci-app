<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLaporan;
use App\Controllers\Admin;

class Laporan extends BaseController
{
    public function __construct()
    {
        $this->ModelLaporan = new ModelLaporan();
        $this->Admin = new Admin();
    }
    public function index()
    {
        $data = [
            'judul' => 'Kasir Harmonis 1',
            'subjudul' => 'Laporan',
            'menu' => 'Laporan',
            'submenu' => 'laporan',
            'page' => 'laporan'
        ];
        return view('template', $data);
    }
    public function Laporan()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan',
            'menu' => 'Laporan',
            'submenu' => 'laporan',
            'page' => 'laporan',
        ];
        return view('template', $data);
    }
    
    // LAPORAN PENJUALAN HARIAN
    public function LaporanHarianJual()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Penjualan Harian',
            'menu' => 'Laporan',
            'submenu' => 'Penjualan-Harian',
            'page' => 'laporan/laporanharianjual',
        ];
        return view('template', $data);
    }
    public function TabelJualHarian()
    {
        $tgl = $this->request->getPost('tgl');
        $data = [
            'dataharian' => $this->ModelLaporan->DataJualHarian($tgl),
            'tgl' => $tgl,
        ];
        $response = [
            'data' => view('laporan/tabeljualharian', $data)
        ];
        echo json_encode($response);
        // echo dd($this->ModelLaporan->DataJualHarian($tgl));
    }
    public function PrintLaporanHarianJual($tgl)
    {
        // $tgl = $this->request->uri->getSegment(3);
        $data = [
            'page' => 'laporan/printlaporanharian',
            'dataharian' => $this->ModelLaporan->DataJualHarian($tgl),
            'tgl' => $tgl,
            'judul' => "Laporan Harian Penjualan",
            'toko' => $this->Admin->index(),
        ];
        return view('laporan/printlaporan', $data);
    }
    
    // LAPORAN PEMBELIAN HARIAN
    public function LaporanHarianBeli()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Pembelian Harian',
            'menu' => 'Laporan',
            'submenu' => 'Pembelian-Harian',
            'page' => 'laporan/laporanharianbeli',
        ];
        return view('template', $data);
    }
    public function TabelBeliHarian()
    {
        $tgl = $this->request->getPost('tgl');
        $data = [
            'dataharian' => $this->ModelLaporan->DataBeliHarian($tgl),
            'tgl' => $tgl,
        ];
        $response = [
            'data' => view('laporan/tabelbeliharian', $data)
        ];
        echo json_encode($response);
        // echo dd($this->ModelLaporan->DataJualHarian($tgl));

    }
    public function PrintLaporanHarianBeli($tgl)
    {
        // $tgl = $this->request->uri->getSegment(3);
        $data = [
            'page' => 'laporan/printlaporanharian',
            'dataharian' => $this->ModelLaporan->DataBeliHarian($tgl),
            'tgl' => $tgl,
            'judul' => "Laporan Harian Pembelian",
            'toko' => $this->Admin->index(),
        ];
        return view('laporan/printlaporanbeli', $data);
    }
    
    // Laporan Stok
    public function StokAkhir()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Stok Hari Ini',
            'menu' => 'Laporan',
            'submenu' => 'Laporan Stok',
            'page' => 'laporan/stokakhir',
        ];
        return view('template', $data);
    }
    public function TabelStokHarian()
    {
        $tgl = $this->request->getPost('tgl');
        $data = [
            'dataharian' => $this->ModelLaporan->DataStokHarian($tgl),
            'tgl' => $tgl,
        ];
        $response = [
            'data' => view('laporan/tabelstokharian', $data)
        ];
        echo json_encode($response);
        // echo dd($this->ModelLaporan->DataJualHarian($tgl));
    }
    public function PrintLaporanHarianStok($tgl)
    {
        // $tgl = $this->request->uri->getSegment(3);
        $data = [
            'page' => 'laporan/printlaporanharian',
            'dataharian' => $this->ModelLaporan->DataStokHarian($tgl),
            'tgl' => $tgl,
            'judul' => "Laporan Harian Stok Barang",
            'toko' => $this->Admin->index(),
        ];
        return view('laporan/printlaporanstok', $data);
    }
    
    // HANCURAN
    // LAPORAN PEMBELIAN HARIAN
    public function LaporanHarianBeliHancuran()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Pembelian Hancuran Harian',
            'menu' => 'Laporan',
            'submenu' => 'Pembelian-Hancuran',
            'page' => 'laporan/hancuran/laporanharianbeli',
        ];
        return view('template', $data);
    }
    public function TabelBeliHancuran()
    {
        $tgl = $this->request->getPost('tgl');
        $data = [
            'dataharian' => $this->ModelLaporan->DataBeliHancuran($tgl),
            'tgl' => $tgl,
        ];
        $response = [
            'data' => view('laporan/hancuran/tabelbeliharian', $data)
        ];
        echo json_encode($response);
        // echo dd($this->ModelLaporan->DataJualHarian($tgl));

    }
    public function PrintLaporanHancuranBeli($tgl)
    {
        // $tgl = $this->request->uri->getSegment(3);
        $data = [
            'page' => 'laporan/hancuran/printlaporanharian',
            'dataharian' => $this->ModelLaporan->DataBeliHancuran($tgl),
            'tgl' => $tgl,
            'judul' => "Laporan Harian Pembelian Hancuran",
            'toko' => $this->Admin->index(),
        ];
        return view('laporan/hancuran/printlaporanbeli', $data);
    }
    
    // 99 %
    // LAPORAN PEMBELIAN HARIAN 99%
    public function LaporanHarianBeli99()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Pembelian Harian 99%',
            'menu' => 'Laporan',
            'submenu' => 'Pembelian-Murni',
            'page' => 'laporan/murni/laporanharianbeli',
        ];
        return view('template', $data);
    }
    public function TabelBeli99()
    {
        $tgl = $this->request->getPost('tgl');
        $data = [
            'dataharian' => $this->ModelLaporan->DataBeliMurni($tgl),
            'tgl' => $tgl,
        ];
        $response = [
            'data' => view('laporan/murni/tabelbeliharian', $data)
        ];
        echo json_encode($response);
        // echo dd($this->ModelLaporan->DataJualHarian($tgl));

    }
    public function PrintLaporan99Beli($tgl)
    {
        // $tgl = $this->request->uri->getSegment(3);
        $data = [
            'page' => 'laporan/murni/printlaporanharian',
            'dataharian' => $this->ModelLaporan->DataBeliMurni($tgl),
            'tgl' => $tgl,
            'judul' => "Laporan Harian Pembelian 99%",
            'toko' => $this->Admin->index(),
        ];
        return view('laporan/murni/printlaporanbeli', $data);
    }
    // LAPORAN PENJUALAN HARIAN
    public function LaporanHarianJualMurni()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Penjualan Harian 75%+',
            'menu' => 'Laporan',
            'submenu' => 'Penjualan-Murni',
            'page' => 'laporan/murni/laporanharianjual',
        ];
        return view('template', $data);
    }
    public function TabelJualHarianMurni()
    {
        $tgl = $this->request->getPost('tgl');
        $data = [
            'dataharian' => $this->ModelLaporan->DataJualMurni($tgl),
            'tgl' => $tgl,
        ];
        $response = [
            'data' => view('laporan/murni/tabeljualharian', $data)
        ];
        echo json_encode($response);
        // echo dd($this->ModelLaporan->DataJualHarian($tgl));
    }
    public function PrintLaporanHarianJualMurni($tgl)
    {
        // $tgl = $this->request->uri->getSegment(3);
        $data = [
            'page' => 'laporan/murni/printlaporanharian',
            'dataharian' => $this->ModelLaporan->DataJualMurni($tgl),
            'tgl' => $tgl,
            'judul' => "Laporan Harian Penjualan Emas 99 %",
            'toko' => $this->Admin->index(),
        ];
        return view('laporan/printlaporan', $data);
    }
}