<?php

namespace App\Models;

use CodeIgniter\Model;

class PemesananModel extends Model
{
    protected $table          = 'pemesanan';
    protected $primaryKey     = 'id_pemesanan';
    /* protected $useSoftDeletes = true; */
    protected $allowedFields  = [
        'kode_pemesanan',	'tanggal_pemesanan',	'tempat_pemesanan',	'id_penumpang',	'kode_kursi',	'id_rute',	'tujuan',	'tanggal_berangkat',	'jam_cekin',	'jam_berangkat'	,'total_bayar'	,'id_petugas',
    ];

    protected $useTimestamps  = true;
}
