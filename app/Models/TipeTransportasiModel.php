<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table          = 'rute';
    protected $primaryKey     = 'id_rute';
    /* protected $useSoftDeletes = true; */
    protected $allowedFields  = [
        'id_type_transportasi',	'nama_type',	'keterangan	',
    ];

    protected $useTimestamps  = true;
}
