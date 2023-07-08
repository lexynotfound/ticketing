<?php

namespace App\Controllers;

use App\Models\PetugasModel;
use App\Models\PenumpangModel;

class Auth extends BaseController
{
    protected $penumpangModel;
    protected $petugasModel;
    public function __construct()
    {
        $this->penumpangModel = new PenumpangModel();
        $this->petugasModel = new PetugasModel();
    }
    public function login()
    {
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $penumpang = $this->penumpangModel->where('username', $username)->first();

            if ($penumpang && password_verify((string)$password, (string)$penumpang['password'])) {
                // Authentication successful
                // Store user data in session or perform other necessary actions

                // Redirect to the home page or other appropriate page
                return redirect()->to(base_url('home/index'));
            } else {
                // Authentication failed
                // Display appropriate error message
                $data['error'] = 'Invalid credentials';
                return view('auth/login', $data);
            }
        }

        $data = [
            'title' => 'Login',
        ];

        return view('auth/login', $data);
    }


    public function authenticate()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $level = $this->request->getPost('level');

        if ($level == 'penumpang') {
            $penumpang = $this->penumpangModel->where('username', $username)->first();

            if ($penumpang && password_verify((string)$password, (string)$penumpang['password'])) {
                // Authentication successful
                // Redirect to authenticated page
                return redirect()->to(base_url('home/index'));
            } else {
                // Authentication failed
                // Display appropriate error message
                $data['error'] = 'Invalid credentials';
                return view('auth/login', $data);
            }
        } elseif ($level == 'petugas') {
            $petugas = $this->petugasModel->where('username', $username)->first();

            if ($petugas && password_verify((string)$password, (string)$petugas['password'])) {
                // Authentication successful
                // Redirect to authenticated page
                return redirect()->to(base_url('dashboard'));
            } else {
                // Authentication failed
                // Display appropriate error message
                $data['error'] = 'Invalid credentials';
                return view('auth/login', $data);
            }
        } else {
            // Handle error when level is not recognized
            // Redirect to error page or display appropriate error message
        }
    }


    public function register()
    {
        $data = [
            'title' => 'Register',
        ];

        return view('auth/register', $data);
    }

    public function processRegister()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        $nama = $this->request->getPost('nama_penumpang');
        $alamat = $this->request->getPost('alamat_penumpang');
        $tanggalLahir = $this->request->getPost('tanggal_lahir');
        $jenisKelamin = $this->request->getPost('jenis_kelamin');
        $telepon = $this->request->getPost('telepon');
        $level = $this->request->getPost('level');

        if ($level == 'penumpang') {
            $penumpangModel = new PenumpangModel();

            $data = [
                'username' => $username,
                'password' => $password, // Hash the password
                'nama_penumpang' => $nama,
                'alamat_penumpang' => $alamat,
                'tanggal_lahir' => $tanggalLahir,
                'jenis_kelamin' => $jenisKelamin,
                'telepon' => $telepon
            ];

            $penumpangModel->insert($data);

            // Redirect to login page or other appropriate page
            return redirect()->to(base_url('auth/login'));
        } elseif ($level == 'petugas') {
            $petugasModel = new PetugasModel();

            $data = [
                'username' => $username,
                'password' => $password, // Hash the password
                'nama_petugas' => $nama
            ];

            $petugasModel->insert($data);

            // Redirect to login page or other appropriate page
            return redirect()->to(base_url('auth/login'));
        } else {
            // Handle error when level is not recognized
            // Redirect to error page or display appropriate error message
        }
    }
}
