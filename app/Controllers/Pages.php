<?php

namespace App\Controllers;

use App\Models\BarangModel;


class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Faza.'
        ];
        return view('pages/home', $data);
    }

    public function tentang_kami()
    {
        $data = [
            'title' => 'Tentang Kami | Faza.'
        ];
        return view('pages/tentang_kami', $data);
    }

    public function promo()
    {
        $data = [
            'title' => 'Tentang Kami | Faza.'
        ];
        return view('pages/promo', $data);
    }

    public function ikuti_kami()
    {
        $data = [
            'title' => 'Ikuti | Faza.'
        ];
        return view('pages/ikuti_kami', $data);
    }


    public function kontak()
    {
        $data = [
            'title' => 'Kontak | Faza.'
        ];
        return view('pages/kontak', $data);
    }

    public function daftar()
    {
        $data = [
            'title' => 'Daftar | Faza.'
        ];
        return view('pages/daftar', $data);
    }

    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new barangModel();
    }

    public function belanja()
    {
        $barang = $this->barangModel->findAll();
        $data = [
            'title' => 'Belanja | Faza.',
            'barang' => $barang

        ];

        return view('pages/belanja', $data);
    }

    // public function create()
    // {
    // $barang = $this->barangModel->findAll();


    // $data = [];



    // return view('barang/create', $data);
    // }


    public function masuk()
    {
        $data = [
            'title' => 'Masuk | Faza.'
        ];
        return view('pages/masuk', $data);
    }
    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Barang',
            'barang' => $this->barangModel->getBarang($slug)
        ];

        //jika barang tak ada di tabel
        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Mohon maaf, barang ' . $slug . ' tidak ditemukan');
        }

        return view('pages/detail', $data);
    }
    // public function detail()
    // {
    //     $barang = $this->barangModel->findAll();

    //     $data = [
    //         'title' => 'Detail | Faza.',
    //         'barang' => $barang

    //     ];
    //     return view('pages/detail', $data);
    // }

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $data['barang'] = $this->barangModel->get_keyword($keyword);

        return view('mahasiswa', $data);
    }

    public function keranjang($slug)
    {
        $data = [
            'title' => 'Keranjang | Faza.',
            'barang' => $this->barangModel->getBarang($slug)
        ];

        return view('pages/keranjang', $data);
    }

    public function cek()
    {
        $cart = \Config\Services::cart();
        $response = $cart->content();
        $data = json_encode($response);
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

    public function add()
    {
        $cart = \Config\Services::cart();
        $cart->insert(array(
            'id'      => $this->request->getPost('id'),
            'qty'     => 1,
            'price'   => '19.56',
            'name'    => 'T-Shirt',
            'options' => array('Size' => 'L', 'Color' => 'Red')
        ));
    }
    public function clear()
    {
        $cart = \Config\Services::cart();
        $cart->destroy();
    }
}
