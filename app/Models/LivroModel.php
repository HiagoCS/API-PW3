<?php namespace App\Models;
    use CodeIgniter\Model;

    class LivroModel extends Model{
        protected $table = 'tb_livro';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nome', 'descricao', 'autor'];
        protected $returnType = 'object';
    }
?>