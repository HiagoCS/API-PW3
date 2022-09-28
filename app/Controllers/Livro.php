<?php

namespace App\Controllers;

class Livro extends BaseController
{
    public function index()
    {
        $livroModel = new \App\Models\LivroModel();
        $data['livros'] = $livroModel->findAll();
    }
    public function returnUnique($id){
        $livroModel = new \App\Models\LivroModel();
        $data['livros'] = $livroModel->find($id);
    }
    public function returnWithMax($max){
        $livroModel = new \App\Models\LivroModel();
        $data['livros'] = $livroModel->findAll($max);
    }

    public function insert(){
        $livroModel = new \App\Models\LivroModel();
        $livro = new LivroConstruct(
            $this->request->getPost('nome'),
            $this->request->getPost('descricao'),
            $this->request->getPost('autor')
        );
        $livroModel->postInserir((array)$livro);
    }
}

class LivroConstruct{
    public function __construct($nome, $descricao, $autor){
        $this->nome = $nome == '' ? null : $nome;
        $this->descricao = $descricao == '' ? null : $descricao;
        $this->autor = $autor == '' ? null : $autor;
    }
}
