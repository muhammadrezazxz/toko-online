<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function masuk()
    {
        $data = [
            'title' => 'Masuk | Faza.'

        ];
        return view('auth/masuk', $data);
    }
    public function daftar()
    {
        $data = [
            'title' => 'Daftar | Faza.'
        ];
        return view('auth/daftar', $data);
    }
}
