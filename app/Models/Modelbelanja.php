<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelbelanja  extends Model
{
    protected $table      = 'menu';


    public function getBelanja()
    {

        return $this->findAll();
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
