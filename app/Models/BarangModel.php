<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    // protected $useTimestamps = false;
    protected $allowedFields = ['judul', 'slug', 'harga', 'stok', 'kategori', 'gambar', 'deskripsi'];

    public function getBarang($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    // public function get_keyword($keyword)
    // {
    //     $this->db->select('*');
    //     $this->db->from('barang');
    //     $this->db->like('judul', $keyword);
    //     $this->db->or_like('slug', $keyword);
    //     $this->db->or_like('harga', $keyword);
    //     $this->db->or_like('kategori', $keyword);

    //     return $this->db->get()->result();
    // }
    // public function find($id)
    // {
    //     $result = $this->db->where(['slug' => $slug], $data)
    //         ->limit(1)
    //         ->get('barang');
    //     if ($result->num_rows() > 0) {
    //         return $result->row();
    //     } else {
    //         return array();
    //     }
    // }
}
