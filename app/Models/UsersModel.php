<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'Id_Users';
    protected $allowedFields = ['Nama_Users', 'Alamat', 'Telp', 'Email', 'Username', 'Password', 'Level'];
    protected $useTimestamps = true;
    protected $createdField  = 'Created_date';
    protected $updatedField  = 'Update_date';
}
