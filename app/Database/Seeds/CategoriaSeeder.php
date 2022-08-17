<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nome' => 'Terror'],
            ['nome' => 'Suspense'],
            ['nome' => 'Romance'],
            ['nome' => 'Comédia'],
            ['nome' => 'Infantil'],
            ['nome' => 'Ação']
        ];

        $this->db->table('tb_categoria')->insertBatch($data);
    }
}
