<?php namespace App\Models;
    use CodeIgniter\Model;

    class LivroModel extends Model{
        protected $table = 'tb_livro';
        protected $primaryKey = 'id';
        protected $allowedFields = ['nome', 'descricao', 'autor'];
        protected $returnType = 'object';

        public function postInserir($livro_data){
            if($this->insert($livro_data)){
                return "Sucesso na inserção!!";
            }
            else{
                return "Erro na inserção!!";
            }
        }
    }
?>