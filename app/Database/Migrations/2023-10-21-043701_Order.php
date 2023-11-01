<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
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
            'nama_kasir'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null' => true
            ],
            'total_harga'       => [
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
        $this->forge->createTable('order'); //nama table
    }

    public function down()
    {
        //
        $this->forge->dropTable('order');
    }
}
