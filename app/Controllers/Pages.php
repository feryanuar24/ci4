<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Belajar CI 4'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'About Me',
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact Me',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Cipinang Gading',
                    'kota' => 'Bogor'
                ],
                [
                    'tipe' => 'Kampus',
                    'alamat' => 'Jl. HRS. Ronggowaluyo',
                    'kota' => 'Karawang'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
