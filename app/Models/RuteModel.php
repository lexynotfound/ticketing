<?php

namespace App\Models;

use CodeIgniter\Model;

class RuteModel extends Model
{
    protected $table          = 'rute';
    protected $primaryKey     = 'id_rute';
    /* protected $useSoftDeletes = true; */
    protected $allowedFields  = [
        'kode_pemesanan',    'tujuan',	'rutu_awal',	'rute_akhir',	'harga',	'id_transportasi',
    ];

    protected $useTimestamps  = true;
}
