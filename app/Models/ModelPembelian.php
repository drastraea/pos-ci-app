<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPembelian extends Model
{
    //baca data pembelian
    public function AllData()
    {
        return $this->db->table('pembelian')
        ->orderBy('tanggal_pembelian', 'desc')
        ->get()
        ->getResultArray();
    }
    //tambahkan data pembelian
    public function Beli($data)
    {
        $this->db->table('pembelian')->insert($data);
    }
    //edit data
    public function UpdateData($data)
    {
        $this->db->table('pembelian')
        ->where('id_pembelian', $data['id_pembelian'])
        ->update($data);
    }
        //hapus data
        public function DeleteData($data)
        {
            $this->db->table('pembelian')
            ->where('id_pembelian', $data['id_pembelian'])
            ->delete($data);
        }
}