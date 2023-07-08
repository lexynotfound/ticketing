<?php

namespace App\Controllers;

use App\Models\RuteModel;

class Home extends BaseController
{

    protected $db;
    protected $builder;
    protected $ruteModel;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table(('rute'));
        $this->ruteModel = new RuteModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Yohanna Tiket',
        ];

        return view('home/index', $data);
    }

    public function pesawat()
    {
        $ruteModel = new RuteModel();

        if ($this->request->getMethod() === 'post') {
            // Mengambil input dari form pencarian
            $kodePemesanan = $this->request->getPost('kode_pemesanan');
            $tujuan = $this->request->getPost('tujuan');

            // Mencari pesawat berdasarkan kriteria pencarian
            $pesawat = $ruteModel->where('kode_pemesanan', $kodePemesanan)
                ->where('tujuan', $tujuan)
                ->findAll();

            $data = [
                'title' => 'Pesawat',
                'pesawat' => $pesawat,
            ];
        } else {
            $data = [
                'title' => 'Pesawat',
                'pesawat' => [],
            ];
        }

        return view('home/pesawat', $data);
    }

    public function kereta()
    {
        $ruteModel = new RuteModel();

        if ($this->request->getMethod() === 'post') {
            // Mengambil input dari form pencarian
            $kodePemesanan = $this->request->getPost('kode_pemesanan');
            $tujuan = $this->request->getPost('tujuan');

            // Mencari kereta berdasarkan kriteria pencarian
            $kereta = $ruteModel->where('kode_pemesanan', $kodePemesanan)
                ->where('tujuan', $tujuan)
                ->findAll();

            $data = [
                'title' => 'Kereta',
                'kereta' => $kereta,
            ];
        } else {
            $data = [
                'title' => 'Kereta',
                'kereta' => [],
            ];
        }

        return view('home/kereta', $data);
    }
}
