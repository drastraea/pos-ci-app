<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJual extends Model
{
    public function AllData()
    {
        //Fungsi Data Keseluruhan Tabel Penjualan
        return $this->db->table('penjualan')
        ->orderBy('tanggal_penjualan', 'desc')
        ->get()
        ->getResultArray();
    }
    public function Jual($jual)
    {
        $this->db->table('penjualan')->insert($jual);
    }
    
    public function NoFaktur()
    {
        //Fungsi Nomor Faktur
        $tgl = date('Ymd');
        $query = $this->db->query("SELECT MAX(RIGHT(no_faktur,4)) as no_urut from penjualan where DATE(tanggal_penjualan) = '$tgl'");
        $hasil = $query->getRowArray();
        if ($hasil['no_urut'] > 0)
            {
                $tmp = (int)$hasil['no_urut'] + 1;
                $kd = sprintf("%04s", $tmp);
            } else {
                $kd = "0001";
            }
            $no_faktur = date('Ymd') . $kd;
            //dd($no_faktur);
            return $no_faktur;
    }

    public function DataHariIni($data)
    {
        //Fungsi Data Tanggal Hari Ini
        $hasil = $this->db->table('penjualan')
        ->where('penjualan.tanggal_penjualan', $data)
        ->orderBy('no_faktur', 'desc')
        ->get()
        ->getResultArray();
            return $hasil;
    }
    public function Nota($data)
    {
        $nota = $this->db->table('penjualan')
        ->where('penjualan.no_faktur', $data)
        ->get()
        ->getResultArray();
        return $nota;
    }
}