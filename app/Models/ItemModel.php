<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'item';
    protected $allowedFields = ['nama_barang', 'jenis_barang', 'foto_barang', 'kode_barang', 'jumlah_barang', 'harga_jual', 'created_at', 'update_at'];
    protected $useTimestamps   = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function search($keyword)
    {
        return $this->table('item')->like('kode_barang', $keyword)->first();
    }
}
