<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class ProfilController extends BaseController
{
    public function index()
    {
        // mengatur waktu ke wilayah Indonesia
        date_default_timezone_set('Asia/Jakarta');
        $session = session();
        // waktu login
        $login_time = $session->get('login_time') ?? date('Y-m-d H:i:s'); 

        $data = [
            'username'   => $session->get('username'),
            'role'       => $session->get('role'),
            'email'      => '1112315363@mhs.dinus.ac.id',
            'login_time' => $login_time,
            'status'     => 'Sudah Login',
        ];

        return view('v_profil', $data);
    }
}