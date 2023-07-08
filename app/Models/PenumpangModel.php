<?php

namespace App\Models;

use CodeIgniter\Model;

class PenumpangModel extends Model
{
    protected $table          = 'penumpang';
    protected $primaryKey     = 'id_penumpang';
    /* protected $useSoftDeletes = true; */
    protected $allowedFields  = [
        'username', 'nama_penumpang', 'alamat_penumpang', 'tanggal_lahir', 'jenis_kelamin', 'telepon', 'password'
    ];

}
