<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LivroCategoria extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' =>'INT',
                'auto_increment' =>true
            ],
            'id_livro'  =>[
                'type' =>'INT'
            ],
            'id_categoria' =>[
                'type' => 'INT'
            ]
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->addForeignKey('id_livro', 'tb_livro', 'id');
        $this->forge->addForeignKey('id_categoria', 'tb_categoria', 'id');
        $this->forge->createTable('livro_categoria', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('livro_categoria', TRUE);
    }
}
