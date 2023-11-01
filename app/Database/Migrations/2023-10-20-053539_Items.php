<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Items extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true, // agar angkanya positiv terus
                'auto_increment' => true, // AI
            ],
            'nama_barang'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null' => true
            ],
            'jenis_barang'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null' => true
            ],
            'foto_barang'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null' => true
            ],
            'kode_barang'       => [
                'type'           => 'INT',
                'constraint'     => '10',
                'null' => true
            ],
            'jumlah_barang'       => [
                'type'           => 'INT',
                'constraint'     => '10',
                'null' => true
            ],
            'harga_jual'       => [
                'type'           => 'INT',
                'constraint'     => '10',
                'null' => true
            ],
            'created_at'       => [
                'type'           => 'DATETIME',
                'null' => TRUE
            ],

            'update_at'       => [
                'type'           => 'DATETIME',
                'null' => TRUE
            ]
        ]);
        $this->forge->addKey('id', true); //primary key nya adalah id
        $this->forge->createTable('item'); //nama table
    }

    public function down()
    {
        //
        $this->forge->dropTable('item');
    }
}
