<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Barang extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }
    public function create()
    {

        $data = [
            'title' => 'Form Tambah Data',
            'validation' => \Config\Services::validation()
        ];
        return view('barang/create', $data);
    }

    public function produk()
    {
        // $barangModel = new BarangModel();

        // $barang = $this->barangModel->findAll();

        $data = [
            'title' => 'Edit Data',
            'barang' => $this->barangModel->getBarang()

        ];

        return view('barang/produk', $data);
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

        return view('barang/detail', $data);
    }

    public function save()
    {

        //validasi input
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[barang.judul]',

                'errors' => [
                    'required' => '{field} barang harus diisi.',
                    'is_unique' => '{field} barang sudah ada.'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();

            // return redirect()->to(base_url() . '/barang/create')->withInput('validation', $validation);
            return redirect()->to(base_url() . '/barang/create')->withInput();
        }
        //ambil gambar
        $fileGambar = $this->request->getFile('gambar');
        //cek gambar kosong
        if ($fileGambar->getError() == 4) {
            $namaGambar = 'default.jpg';
        } else {
            //generate nama gambar
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan file ke folder img
            $fileGambar->move('assets/img/produk', $namaGambar);
        }
        //ambil nama file
        // $namaGambar = $fileGambar->getName();

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->barangModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'kategori' => $this->request->getVar('kategori'),
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

        return redirect()->to('barang/produk');
    }

    public function hapus($id)
    {
        //cari gambar berdasarkan id
        $barang = $this->barangModel->find($id);
        //cek jika file gambar default
        if ($barang['gambar'] != 'default.jpg') {
            //hapus gambar
            unlink('assets/img/produk/' . $barang['gambar']);
        }
        $this->barangModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus!');

        return redirect()->to('barang/produk');
    }

    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Barang',
            'validation' => \Config\Services::validation(),
            'barang' => $this->barangModel->getBarang($slug)
        ];
        return view('barang/edit', $data);
    }

    public function update($id)
    {
        //cek judul
        $barangLama = $this->barangModel->getBarang($this->request->getVar('slug'));
        if ($barangLama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[barang.judul]';
        }

        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,

                'errors' => [
                    'required' => '{field} barang harus diisi.',
                    'is_unique' => '{field} barang sudah ada.'
                ]
            ],
            'gambar' => [
                'rules' => 'max_size[gambar,1024]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar',
                    'is_image' => 'Yang Anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/barang/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileGambar = $this->request->getFile('gambar');

        //cek gambar, apakah tetap gambar lama
        if ($fileGambar->getError() == 4) {
            $namaGambar = $this->request->getVar('gambarLama');
        } else {
            //generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            //pindahkan gambar
            $fileGambar->move('assets/img/produk', $namaGambar);
            //hapus file lama
            unlink('assets/img/produk/' . $this->request->getVar('gambarLama'));
        }

        // dd($this->request->getVar());
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->barangModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'harga' => $this->request->getVar('harga'),
            'stok' => $this->request->getVar('stok'),
            'kategori' => $this->request->getVar('kategori'),
            'gambar' => $namaGambar,
            'deskripsi' => $this->request->getVar('deskripsi')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah!');

        return redirect()->to('barang/produk');
    }
}
