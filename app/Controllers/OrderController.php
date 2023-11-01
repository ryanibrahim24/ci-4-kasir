<?php

namespace App\Controllers;

use App\Models\ItemModel;
use App\Models\OrderModel;
use CodeIgniter\I18n\Time;

class OrderController extends BaseController
{
    protected $ItemModel;
    protected $OrderModel;

    public function __construct()
    {
        $this->ItemModel = new ItemModel();
        $this->OrderModel = new OrderModel();
    }

    public function index(): string
    {
        $data = [
            'orders' => $this->OrderModel->findAll(),
        ];

        return view('orders/index', $data);
    }

    public function create()
    {
        $keyword = $this->request->getVar('kata_kunci');
        $jumlah = $this->request->getVar('jumlahbarang');
        if ($keyword) {
            $barang = $this->ItemModel->search($keyword);
        } else {
            $barang = false;
        }

        if ($jumlah) {
            $jumlahbarang = $jumlah;
        } else {
            $jumlahbarang = 1;
        }

        $data = [
            'barang' => $barang,
            'jumlahbarang' => $jumlahbarang
        ];

        return view('orders/create', $data);
    }

    public function save()
    {
        $myTime = Time::now();
        $totalharga = $this->request->getPost('total_harga');
        $this->OrderModel->save([
            'total_harga' => $totalharga,
            'created_at' => $myTime,
            'nama_kasir' => user()->name,

        ]);

        session()->setFlashdata('pesan', 'Order Berhasil Ditambahkan!');

        return redirect()->to('/orders/create');
    }

    public function delete($id)
    {
        $this->OrderModel->delete($id);

        session()->setFlashdata('pesan', 'Order Berhasil Dihapus!');
        return redirect()->to('/orders');
    }
    // public function edit($id)
    // {
    //     $data = [
    //         'items' => $this->ItemModel->find($id)
    //     ];
    //     return view('items/edit', $data);
    // }

    // public function update($id)
    // {
    //     $data = $this->ItemModel->find($id);

    //     $filegambar = $this->request->getFile('item_foto');
    //     $gambarlama = $this->ItemModel->find($id)['foto_barang'];
    //     if ($filegambar->getError() == 4) {
    //         $namagambar = $gambarlama;
    //     } else {
    //         $namagambar = $filegambar->getRandomName();
    //         $filegambar->move('image', $namagambar);
    //         if ($gambarlama !== null) {
    //             unlink('image/' . $gambarlama);
    //         }
    //     }

    //     $myTime = Time::now();

    //     $this->ItemModel->save([
    //         'id' => $id,
    //         'nama_barang' => $this->request->getPost('item_name'),
    //         'jenis_barang' => $this->request->getPost('item_jenis'),
    //         'kode_barang' => $this->request->getPost('item_kode'),
    //         'jumlah_barang' => $this->request->getPost('item_jumlah'),
    //         'harga_jual' => $this->request->getPost('item_harga'),
    //         'foto_barang' => $namagambar,
    //         'update_at' => $myTime,
    //     ]);

    //     session()->setFlashdata('pesan', 'Barang Berhasil diupdate!');
    //     return redirect()->to("/items/edit/$id");
    // }


    // public function detail($id)
    // {
    //     $data = [
    //         'items' => $this->ItemModel->find($id)
    //     ];

    //     return view('items/detail', $data);
    // }
}
