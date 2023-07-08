<?php

namespace App\Models;

use CodeIgniter\Model;

class TransportasiModel extends Model
{
    protected $table          = 'rute';
    protected $primaryKey     = 'id_rute';
    /* protected $useSoftDeletes = true; */
    protected $allowedFields  = [
        'id_transportasi', 'id_type_transportasi',
        'kode',   'jumlah_kursi',    'keterangan	',
    ];

    protected $useTimestamps  = true;
}
