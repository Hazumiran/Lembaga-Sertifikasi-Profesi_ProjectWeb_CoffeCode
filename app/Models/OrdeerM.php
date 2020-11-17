<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdeerM extends Model
{

    protected $table      = 'orderpelanggan';
    protected $primaryKey = 'Id_Order';
    protected $allowedFields = ['Id_Pelanggan', 'Nama_Pelanggan', 'Id_Menu', 'Menu', 'Kategori', 'Harga'];
    protected $useTimestamps = true;
    protected $createdField  = 'Tgl_Order';


    public function getOrder($Id_Order = false)
    {
        if ($Id_Order == false) {
            return $this->findAll();
        }
        return $this->where(['Id_Order' => $Id_Order])->first();
    }
    public function delete_Order($id)
    {
        return $this->db->table($this->table)->delete(['Id_Order' => $id]);
    }
    // proses penyimpanan data ke database
    public function insert_Order($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    // proses pengeditan data 
    public function update_Order($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['Id_Order' => $id]);
    }

    public function search($keyword)
    {
        // $builder = $this->table('Menu');
        // $builder -> like('Nama_Menu', $keyword);
        // return $builder;

        return $this->table('orderpelanggan')->like('Nama_Pelanggan', $keyword);
    }
}
