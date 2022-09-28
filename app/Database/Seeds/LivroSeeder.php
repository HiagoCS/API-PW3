<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LivroSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nome' => 'IT, A coisa',
                'descricao' => 'It é um romance de terror de 1986 do autor estadunidense Stephen King. Foi seu 22º livro e seu 17º romance escrito em seu próprio nome. A história segue as experiências de sete crianças, que são aterrorizadas por uma entidade maligna que explora os medos de suas vítimas para se disfarçar enquanto caçam suas presas.',
                'autor' => 'Stephen King',
                'token' => md5(1)
            ],
            [
                'nome' => 'Manifesto do Partido Comunista',
                'descricao' => 'É uma coleção ou compilação de livros sagrados, contendo as histórias, doutrinas, códigos e tradições que guiam os cristãos, com base na tradição judaica (Antigo Testamento) e na divulgação do Evangelho (Novo Testamento).',
                'autor' => 'Karl Mar e Friedrich Engels',
                'token' => md5(2)
            ],
            [
                'nome' => 'Cinquenta Tons de Cinza',
                'descricao' => 'é um romance erótico bestseller da autora inglesa Erika Leonard James publicado em 2011. O primeiro livro de uma trilogia que está sendo tratado como o "pornô das mamães" vendeu mais de dez milhões de livros nas seis primeiras semanas.',
                'autor' => 'E. L. James',
                'token' => md5(3)
            ],
            [
                'nome' => 'Cães e gatos',
                'descricao' => 'A felicidade para um cão é um rabo abanando, já para um gato, não. É o gato que tem que abanar o rabo para demonstrar felicidade para o cão ou o cão que tem que entender que o gato demonstra afeto de outras formas? Cães e gatos lida com as diferenças.',
                'autor' => 'Carlos Ruas',
                'token' => md5(4)
            ],
            [
                'nome' => 'O Mar de Monstros',
                'descricao' => 'É o segundo livro da série Percy Jackson & os Olimpianos baseado em mitologia grega de Rick Riordan.',
                'autor' => 'Rick Riordan',
                'token' => md5(5)
            ],
            [
                'nome' => 'Caixa de Pássaros',
                'descricao' => 'É um romance pós-apocalíptico escrito por Josh Malerman, o livro foi publicado pela primeira vez no Reino Unido em 27 de março de 2014, através da Harper Voyager e nos Estados Unidos em 13 de maio de 2014, através da Ecco Press. ',
                'autor' => 'Josh Malerman',
                'token' => md5(6)
            ]
            
        ];
        $this->db->table('tb_livro')->insertBatch($data);
    }
}
