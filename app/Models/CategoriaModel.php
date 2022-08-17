<?php namespace App\Models;
    use CodeIgniter\Model;

    class CategoriaModel extends Model{
        protected $table = 'tb_categoria';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nome'];
        protected $returnType = 'object';
    }
?>