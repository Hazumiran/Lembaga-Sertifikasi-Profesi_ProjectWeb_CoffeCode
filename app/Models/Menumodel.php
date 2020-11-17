<?php

namespace App\Models;

use CodeIgniter\Model;

class Menumodel extends Model
{

    protected $table      = 'menu';
    protected $primaryKey = 'Id_Menu';
    protected $allowedFields = ['Menu', 'Kategori', 'Harga'];
    protected $useTimestamps = true;
    protected $createdField  = 'Created_date';
    protected $updatedField  = 'Update_date';

    public function getMenu($Id_Menu = false)
    {
        if ($Id_Menu == false) {
            return $this->findAll();
        }
        return $this->where(['Id_Menu' => $Id_Menu])->first();
    }
    public function delete_Menu($id)
    {
        return $this->db->table($this->table)->delete(['Id_Menu' => $id]);
    }
    // proses penyimpanan data ke database
    public function insert_Menu($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    // proses pengeditan data 
    public function update_Menu($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['Id_Menu' => $id]);
    }

    public function search($keyword)
    {
        // $builder = $this->table('Menu');
        // $builder -> like('Nama_Menu', $keyword);
        // return $builder;

        return $this->table('menu')->like('Menu', $keyword);
    }
}
