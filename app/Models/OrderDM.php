<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderDM extends Model
{

    protected $table      = 'orderdetail';
    protected $primaryKey = 'Id_Orderdetail';
    protected $allowedFields = ['Id_Order', 'Nama_Pelanggan', 'Total'];
    protected $useTimestamps = true;
    protected $createdField  = 'Tgl_Transaksi';


    public function getOrderdetail($Id_Orderdetail = false)
    {
        if ($Id_Orderdetail == false) {
            return $this->findAll();
        }
        return $this->where(['Id_Orderdetail' => $Id_Orderdetail])->first();
    }
    public function delete_Orderdetail($id)
    {
        return $this->db->table($this->table)->delete(['Id_Orderdetail' => $id]);
    }
    // proses penyimpanan data ke database
    public function insert_Orderdetail($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    // proses pengeditan data 
    public function update_Orderdetail($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['Id_Orderdetail' => $id]);
    }

    public function search($keyword)
    {
        // $builder = $this->table('Menu');
        // $builder -> like('Nama_Menu', $keyword);
        // return $builder;

        return $this->table('orderdetail')->like('Nama_Pelanggan', $keyword);
    }
}
