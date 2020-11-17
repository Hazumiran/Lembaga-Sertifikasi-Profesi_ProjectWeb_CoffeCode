<?php

namespace App\Models;

use CodeIgniter\Model;

class Adminmodel extends Model
{

    protected $table      = 'users';
    protected $primaryKey = 'Id_Users';
    protected $allowedFields = ['Nama_Users', 'Alamat', 'Telp', 'Email', 'Username', 'Password', 'Level'];
    protected $useTimestamps = true;
    protected $createdField  = 'Created_date';
    protected $updatedField  = 'Update_date';

    public function getUsers($Id_Users = false)
    {
        if ($Id_Users == false) {
            return $this->findAll();
        }
        return $this->where(['Id_Users' => $Id_Users])->first();
    }
    public function delete_Users($id)
    {
        return $this->db->table($this->table)->delete(['Id_Users' => $id]);
    }
    // proses penyimpanan data ke database
    public function insert_Users($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    // proses pengeditan data 
    public function update_Users($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['Id_Users' => $id]);
    }

    public function search($keyword)
    {
        // $builder = $this->table('Users');
        // $builder -> like('Nama_Users', $keyword);
        // return $builder;

        return $this->table('Users')->like('Nama_Users', $keyword);
    }
    function get_data_login($Username, $tbl)
    {
        $builder = $this->db->table($tbl);
        $builder->where('Username', $Username);
        $log = $builder->get()->getRow();
        return $log;
    }
}
