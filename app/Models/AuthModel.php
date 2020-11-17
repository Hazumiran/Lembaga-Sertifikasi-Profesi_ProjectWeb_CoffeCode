<?php

namespace App\Models;

use CodeIgniter\Model;

class Authmodel extends Model
{

    function get_data_login($Email, $tbl)
    {
        $builder = $this->db->table($tbl);
        $builder->where('Email', $Email);
        $log = $builder->get()->getRow();
        return $log;
    }
}
