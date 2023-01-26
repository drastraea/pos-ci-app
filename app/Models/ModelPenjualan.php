<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPenjualan extends Model
{
    //baca data penjualan
    public function AllData()
    {
        return $this->db->table('penjualan')
        ->orderBy('tanggal_penjualan', 'desc')
        ->get()
        ->getResultArray();
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
            return $no_faktur;
    }
    //tambahkan data penjualan
    public function Jual($data)
    {
        $this->db->table('penjualan')->insert($data);
    }
    //edit data
    public function UpdateData($data)
    {
        $this->db->table('penjualan')
        ->where('id_penjualan', $data['id_penjualan'])
        ->update($data);
    }
        //hapus data
    public function DeleteData($data)
        {
            $this->db->table('penjualan')
            ->where('id_penjualan', $data['id_penjualan'])
            ->delete($data);
        }
}