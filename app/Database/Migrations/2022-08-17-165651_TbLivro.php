<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbLivro extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>[
                'type' =>'INT',
                'auto_increment' =>true
            ],
            'nome' =>[
                'type' => 'VARCHAR',
                'constraint' => 199
            ],
            'descricao' =>[
                'type' => 'LONGTEXT'
            ],
            'autor' =>[
                'type' =>'VARCHAR',
                'constraint' => 199
            ],
            'token' =>[
                'type' => 'VARCHAR',
                'constraint' => 5
            ]
        ]);
        $this->forge->addPrimaryKey('id', TRUE);
        $this->forge->createTable('tb_livro', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('tb_livro', TRUE);
    }
}
