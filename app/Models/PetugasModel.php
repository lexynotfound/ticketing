<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table          = 'petugas';
    protected $primaryKey     = 'id_petugas';
    /* protected $useSoftDeletes = true; */
    protected $allowedFields  = [
        'username'	,'password'	,'nama_petugas'	,'id_level'
    ];

    protected $useTimestamps  = true;
}
