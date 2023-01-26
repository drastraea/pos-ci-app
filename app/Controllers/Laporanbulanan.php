<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelLaporan;
use App\Controllers\Admin;

class LaporanBulanan extends BaseController
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
            'subjudul' => 'Laporan Bulanan',
            'menu' => 'Laporan Bulanan',
            'submenu' => 'laporan bulanan',
            'page' => 'laporanbulanan'
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

    // LAPORAN PENJUALAN BULANAN
    public function LaporanJual()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Penjualan Bulanan Emas 75%',
            'menu' => 'Laporan',
            'submenu' => 'Laporan Penjualan',
            'page' => 'laporanbulanan/laporanjual',
        ];
        return view('template', $data);
    }
    public function TabelJual()
    {
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        // $bulan = "1";
        // $tahun = "2023";
        $data = [
            'databulanan' => $this->ModelLaporan->DataJualBulanan($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
        ];
        $response = [
            'data' => view('laporanbulanan/tabeljual', $data)
        ];
        echo json_encode($response);
        // echo dd($this->ModelLaporan->DataJualBulanan($bulan, $tahun));
    }
    public function PrintLaporanBulanan($bulan, $tahun)
    {
        $data = [
            'page' => 'laporanbulanan/printlaporan',
            'databulanan' => $this->ModelLaporan->DataJualBulanan($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
            'judul' => "Laporan Bulanan Penjualan",
            'toko' => $this->Admin->index(),
        ];
        return view('laporanbulanan/printlaporan', $data);
    }

    // LAPORAN PEMBELIAN HARIAN
    public function LaporanBeli()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Pembelian Bulanan Emas 75%',
            'menu' => 'Laporan',
            'submenu' => 'Laporan Pembelian Emas Bulanan',
            'page' => 'laporanbulanan/laporanbeli',
        ];
        return view('template', $data);
    }
    public function TabelBeli()
    {
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        // $bulan = "1";
        // $tahun = "2023";
        $data = [
            'databulanan' => $this->ModelLaporan->DataBeliBulanan($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
        ];
        $response = [
            'data' => view('laporanbulanan/tabelbeli', $data)
        ];
        echo json_encode($response);
    }
    public function PrintLaporanBeli($bulan, $tahun)
    {
        $data = [
            'page' => 'laporanbulanan/printlaporanbeli',
            'databulanan' => $this->ModelLaporan->DataBeliBulanan($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
            'judul' => "Laporan Pembelian Bulanan Emas 75%",
            'toko' => $this->Admin->index(),
        ];
        return view('laporanbulanan/printlaporanbeli', $data);
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
    public function TabelStok()
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
    public function PrintLaporanStok($tgl)
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
    public function LaporanBeliHancuran()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Pembelian Hancuran Bulanan',
            'menu' => 'Laporan',
            'submenu' => 'Pembelian Bulanan Hancuran',
            'page' => 'laporanbulanan/hancuran/laporanbelihancuran',
        ];
        return view('template', $data);
    }
    public function TabelBeliHancuran()
    {
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        // $bulan = "1";
        // $tahun = "2023";
        $data = [
            'databulanan' => $this->ModelLaporan->DataBeliBulananHancuran($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
        ];
        $response = [
            'data' => view('laporanbulanan/hancuran/tabelbelihancuran', $data)
        ];
        echo json_encode($response);
    }
    public function PrintLaporanHancuranBeli($bulan, $tahun)
    {
        $data = [
            'page' => 'laporanbulanan/printlaporanbeli',
            'databulanan' => $this->ModelLaporan->DataBeliBulananHancuran($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
            'judul' => "Laporan Bulanan Pembelian Hancuran",
            'toko' => $this->Admin->index(),
        ];
        return view('laporanbulanan/hancuran/printlaporanbeli', $data);
    }

    // 99 %
    // LAPORAN PEMBELIAN HARIAN MURNI
    public function LaporanBeliMurni()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Pembelian Harian 99%',
            'menu' => 'Laporan',
            'submenu' => 'Pembelian Emas Murni',
            'page' => 'laporanbulanan/murni/laporanbeli',
        ];
        return view('template', $data);
    }
    public function TabelBeliMurni()
    {
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        // $bulan = "1";
        // $tahun = "2023";
        $data = [
            'databulanan' => $this->ModelLaporan->DataBeliBulananMurni($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
        ];
        $response = [
            'data' => view('laporanbulanan/murni/tabelbeli', $data)
        ];
        echo json_encode($response);
    }
    public function PrintLaporanBeliMurni($bulan, $tahun)
    {
        $data = [
            'page' => 'laporanbulanan/printlaporanbeli',
            'databulanan' => $this->ModelLaporan->DataBeliBulananMurni($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
            'judul' => "Laporan Bulanan Pembelian Emas 99%",
            'toko' => $this->Admin->index(),
        ];
        return view('laporanbulanan/murni/printlaporanbeli', $data);
    }
    // LAPORAN PENJUALAN HARIAN
     public function LaporanJualMurni()
    {
        $data = [
            'judul' => 'Laporan',
            'subjudul' => 'Laporan Penjualan Bulanan Emas 99 %',
            'menu' => 'Laporan',
            'submenu' => 'Laporan Penjualan Emas Murni',
            'page' => 'laporanbulanan/murni/laporanjual',
        ];
        return view('template', $data);
    }
    public function TabelJualMurni()
    {
        $bulan = $this->request->getPost('bulan');
        $tahun = $this->request->getPost('tahun');
        // $bulan = "1";
        // $tahun = "2023";
        $data = [
            'databulanan' => $this->ModelLaporan->DataJualBulananMurni($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
        ];
        $response = [
            'data' => view('laporanbulanan/murni/tabeljual', $data)
        ];
        echo json_encode($response);
        // echo dd($this->ModelLaporan->DataJualBulanan($bulan, $tahun));
    }
    public function PrintLaporanBulananMurni($bulan, $tahun)
    {
        $data = [
            'page' => 'laporanbulanan/murni/printlaporan',
            'databulanan' => $this->ModelLaporan->DataJualBulananMurni($bulan, $tahun),
            'bulan' => $bulan,
            'tahun' => $tahun,
            'judul' => "Laporan Bulanan Penjualan Emas 99 %",
            'toko' => $this->Admin->index(),
        ];
        return view('laporanbulanan/murni/printlaporan', $data);
    }
}
