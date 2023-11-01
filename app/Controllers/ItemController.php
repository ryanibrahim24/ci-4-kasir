<?php

namespace App\Controllers;

use App\Models\ItemModel;
use CodeIgniter\I18n\Time;

class ItemController extends BaseController
{
    protected $ItemModel;

    public function __construct()
    {
        $this->ItemModel = new ItemModel();
    }

    public function index(): string
    {
        $data = [
            'items' => $this->ItemModel->findAll(),
            'i' => 0
        ];

        return view('items/index', $data);
    }

    public function create()
    {
        return view('items/create');
    }

    public function save()
    {

        $gambar = $this->request->getFile('item_foto');

        $namaGambar = $gambar->getRandomName();
        $gambar->move('image', $namaGambar);
        $myTime = Time::now();

        $this->ItemModel->save([
            'nama_barang' => $this->request->getPost('item_name'),
            'jenis_barang' => $this->request->getPost('item_jenis'),
            'kode_barang' => $this->request->getPost('item_kode'),
            'jumlah_barang' => $this->request->getPost('item_jumlah'),
            'harga_jual' => $this->request->getPost('item_harga'),
            'foto_barang' => $namaGambar,
            'created_at' => $myTime,
            'update_at' => $myTime,

        ]);

        session()->setFlashdata('pesan', 'Barang Berhasil Ditambahkan!');

        return redirect()->to('/items/create');
    }

    public function edit($id)
    {
        $data = [
            'items' => $this->ItemModel->find($id)
        ];
        return view('items/edit', $data);
    }

    public function update($id)
    {
        $data = $this->ItemModel->find($id);

        $filegambar = $this->request->getFile('item_foto');
        $gambarlama = $this->ItemModel->find($id)['foto_barang'];
        if ($filegambar->getError() == 4) {
            $namagambar = $gambarlama;
        } else {
            $namagambar = $filegambar->getRandomName();
            $filegambar->move('image', $namagambar);
            if ($gambarlama !== null) {
                unlink('image/' . $gambarlama);
            }
        }

        $myTime = Time::now();

        $this->ItemModel->save([
            'id' => $id,
            'nama_barang' => $this->request->getPost('item_name'),
            'jenis_barang' => $this->request->getPost('item_jenis'),
            'kode_barang' => $this->request->getPost('item_kode'),
            'jumlah_barang' => $this->request->getPost('item_jumlah'),
            'harga_jual' => $this->request->getPost('item_harga'),
            'foto_barang' => $namagambar,
            'update_at' => $myTime,
        ]);

        session()->setFlashdata('pesan', 'Barang Berhasil diupdate!');
        return redirect()->to("/items/edit/$id");
    }

    public function delete($id)
    {
        $barang = $this->ItemModel->find($id);

        unlink('image/' . $barang['foto_barang']);

        $this->ItemModel->delete($id);
        session()->setFlashdata('pesan', 'Komik Berhasil Dihapus!');
        return redirect()->to('/items');
    }

    public function detail($id)
    {
        $data = [
            'items' => $this->ItemModel->find($id)
        ];

        return view('items/detail', $data);
    }
}
