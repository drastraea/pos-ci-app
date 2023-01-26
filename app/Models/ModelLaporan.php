<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLaporan extends Model
{
    // Get Data Jual
    public function DataJualHarian($tgl)
    {
        $emas = "tipe_penjualan='Emas'";
        return $this->db->table('penjualan')
            ->where('penjualan.tanggal_penjualan', $tgl)
            ->where($emas)
            ->get()
            ->getResultArray();
    }
    // Get Data Jual 99%
    public function DataJualMurni($tgl)
    {
        $murni = "tipe_penjualan='Murni'";
        return $this->db->table('penjualan')
            ->where('penjualan.tanggal_penjualan', $tgl)
            ->where($murni)
            ->get()
            ->getResultArray();
    }
    // Get Data Beli
    public function DataBeliHarian($tgl)
    {
        $emas = "tipe_pembelian='Emas'";
        return $this->db->table('pembelian')
            ->where('pembelian.tanggal_pembelian', $tgl)
            ->where($emas)
            ->get()
            ->getResultArray();
    }
    // Get Data Beli
    public function DataBeliHancuran($tgl)
    {
        $hancuran = "tipe_pembelian='Hancuran'";
        return $this->db->table('pembelian')
            ->where('pembelian.tanggal_pembelian', $tgl)
            ->where($hancuran)
            ->get()
            ->getResultArray();
    }
    // Get Data Beli 99%
    public function DataBeliMurni($tgl)
    {
        return $this->db->table('pembelian')
            ->where('pembelian.tanggal_pembelian', $tgl)
            ->like('tipe_pembelian', '99')
            ->get()
            ->getResultArray();
    }
    // Get Data Stok
    public function DataStokHarian($tgl)
    {
        return $this->db->table('stok')
            ->where('stok.tanggal', $tgl)
            ->get()
            ->getResultArray();
    }
    // Data Bulanan
    // Get Data Jual
    public function DataJualBulanan($bulan, $tahun)
    {
        $emas = "tipe_penjualan='Emas'";
        return $this->db->table('penjualan')
            ->where('MONTH(penjualan.tanggal_penjualan)', $bulan)
            ->where('YEAR(penjualan.tanggal_penjualan)', $tahun)
            ->where($emas)
            ->select('tanggal_penjualan')
            ->groupBy('tanggal_penjualan')
            ->selectSum('harga_penjualan')
            ->selectSum('berat_penjualan')
            ->selectSum('kadar_penjualan')
            ->get()
            ->getResultArray();
    }
     public function DataJualBulananMurni($bulan, $tahun)
    {
        $emas = "tipe_penjualan='Murni'";
        return $this->db->table('penjualan')
            ->where('MONTH(penjualan.tanggal_penjualan)', $bulan)
            ->where('YEAR(penjualan.tanggal_penjualan)', $tahun)
            ->where($emas)
            ->select('tanggal_penjualan')
            ->groupBy('tanggal_penjualan')
            ->selectSum('harga_penjualan')
            ->selectSum('berat_penjualan')
            ->selectSum('kadar_penjualan')
            ->get()
            ->getResultArray();
    }
    // Data Pembelian Bulanan
    public function DataBeliBulanan($bulan, $tahun)
    {
        $emas = "tipe_pembelian='Emas'";
        return $this->db->table('pembelian')
            ->where('MONTH(pembelian.tanggal_pembelian)', $bulan)
            ->where('YEAR(pembelian.tanggal_pembelian)', $tahun)
            ->where($emas)
            ->select('tanggal_pembelian')
            ->groupBy('tanggal_pembelian')
            ->selectSum('harga_pembelian')
            ->selectSum('berat_pembelian')
            ->selectSum('kadar_pembelian')
            ->get()
            ->getResultArray();
    }
     public function DataBeliBulananMurni($bulan, $tahun)
    {
        return $this->db->table('pembelian')
            ->where('MONTH(pembelian.tanggal_pembelian)', $bulan)
            ->where('YEAR(pembelian.tanggal_pembelian)', $tahun)
            ->like('tipe_pembelian', '99')
            ->select('tanggal_pembelian')
            ->groupBy('tanggal_pembelian')
            ->selectSum('harga_pembelian')
            ->selectSum('berat_pembelian')
            ->selectSum('kadar_pembelian')
            ->get()
            ->getResultArray();
    }
     public function DataBeliBulananHancuran($bulan, $tahun)
    {
        $emas = "tipe_pembelian='Hancuran'";
        return $this->db->table('pembelian')
            ->where('MONTH(pembelian.tanggal_pembelian)', $bulan)
            ->where('YEAR(pembelian.tanggal_pembelian)', $tahun)
            ->where($emas)
            ->select('tanggal_pembelian')
            ->groupBy('tanggal_pembelian')
            ->selectSum('harga_pembelian')
            ->selectSum('berat_pembelian')
            ->selectSum('kadar_pembelian')
            ->get()
            ->getResultArray();
    }
}