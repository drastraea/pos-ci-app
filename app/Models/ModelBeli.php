<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBeli extends Model
{
    //baca data pembelian
    public function AllData()
    {
        return $this->db->table('pembelian')
        ->orderBy('tanggal_pembelian', 'desc')
        ->get()
        ->getResultArray();
    }
    public function Beli($jual)
    {
        $this->db->table('pembelian')->insert($jual);
    }
    public function DataHariIni($data)
    {
        //Fungsi Data Tanggal Hari Ini
        $hasil = $this->db->table('pembelian')
        ->where('pembelian.tanggal_pembelian', $data)
        // ->orderBy('no_faktur', 'desc')
        ->get()
        ->getResultArray();
            return $hasil;
    }
}