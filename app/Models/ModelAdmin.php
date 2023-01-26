<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function AllData()
    {
        //Fungsi Data Keseluruhan Tabel Penjualan
        return $this->db->table('penjualan')
        ->orderBy('tanggal_penjualan', 'desc')
        ->get()
        ->getResultArray();
    }
    public function DataJualHariIni($data)
    {
        //Fungsi Data Tanggal Hari Ini
        $hasil = $this->db->table('penjualan')
        ->where('penjualan.tanggal_penjualan', $data)
        ->selectSum('penjualan.berat_penjualan')
        ->selectSum('penjualan.harga_penjualan')
        ->get()
        ->getResultArray();
            return $hasil;
    }
    public function DataBeliHariIni($data)
    {
        //Fungsi Data Tanggal Hari Ini
        $hasil = $this->db->table('pembelian')
        ->where('pembelian.tanggal_pembelian', $data)
        ->selectSum('pembelian.berat_pembelian')
        ->selectSum('pembelian.harga_pembelian')
        ->get()
        ->getResultArray();
            return $hasil;
    }
    public function Stok()
    {
        //Fungsi Data Keseluruhan Tabel Penjualan
        return $this->db->table('stok')
        ->orderBy('tanggal', 'desc')
        ->get()
        ->getResultArray();
    }
    public function StokHarian($data)
    {
        $this->db->table('stok')->insert($data);
    }
    public function UpdateStok($data)
    {
        $this->db->table('stok')
        ->where('id', $data['id'])
        ->update($data);
    }
    public function DeleteStok($data)
    {
        $this->db->table('stok')
        ->where('id', $data['id'])
        ->delete($data);
    }
}