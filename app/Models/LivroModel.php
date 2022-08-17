<?php namespace App\Models;
    use CodeIgniter\Model;

    class UsuarioModel extends Model{
        protected $table = 'tb_livro';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nome', 'descricao', 'autor'];
        protected $returnType = 'object';
    }
?>