<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class UserController extends BaseController
{
    protected $UserModel;

    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index(): string
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        $query   = $builder->get();

        $hasil['records'] = $query->getResultArray();

        $data = [
            'users' => $this->UserModel->paginate(5),
        ];
        return view('users/index', $hasil);
    }

    public function create()
    {
        return view('users/create');
    }

    public function save()
    {
        // $password = $this->request->getPost('user_password');
        $this->UserModel->save([
            'name' => $this->request->getPost('user_name'),
            'username' => $this->request->getPost('user_username'),
            'password_hash' => '$2y$10$CCcmtqvc55aEBxwkI2Pfle5x0liCdiKcmmhzFERm3sXHKqu3nP35u',
            'email' => $this->request->getPost('user_email'),
            'ktp' => $this->request->getPost('user_ktp'),
            'phone' => $this->request->getPost('user_phone'),
            'role' => $this->request->getPost('user_role'),
        ]);

        session()->setFlashdata('pesan', 'Karyawan Berhasil Ditambahkan!');

        return redirect()->to('/users/create');
    }

    public function edit($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('users'); // Ganti dengan nama tabel yang sesuai

        // Ambil satu baris data berdasarkan ID
        $query   = $builder->getWhere(['id' => $id], 1);

        $data['record'] = $query->getRowArray(); // Mengambil satu baris data sebagai objek

        return view('users/edit', $data);
    }

    public function update($id)
    {
        // Ambil data yang dikirimkan melalui form
        $newData = [
            'name' => $this->request->getPost('user_name'),
            'username' => $this->request->getPost('user_username'),
            'email' => $this->request->getPost('user_email'),
            'ktp' => $this->request->getPost('user_ktp'),
            'phone' => $this->request->getPost('user_phone'),
            'role' => $this->request->getPost('user_role'),
            'active' => $this->request->getPost('user_active'),
        ];

        // Inisialisasi Query Builder
        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        // Lakukan update
        $builder->where('id', $id);
        $builder->update($newData);

        session()->setFlashdata('pesan', 'Karyawan Berhasil diupdate!');
        return redirect()->to("/users/edit/$id");
    }

    public function delete($id)
    {
        // Inisialisasi Query Builder
        $db      = \Config\Database::connect();
        $builder = $db->table('users');

        // Lakukan delete
        $builder->where('id', $id);
        $builder->delete();

        session()->setFlashdata('pesan', 'Karyawan Berhasil Dihapus!');
        return redirect()->to('/users');
    }
}
