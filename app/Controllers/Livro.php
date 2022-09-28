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
        return var_dump($data);
    }
    public function returnWithMax($max){
        $livroModel = new \App\Models\LivroModel();
        $data['livros'] = $livroModel->findAll($max);
    }
    public function returnToken($id, $token){
        $livroModel = new \App\Models\LivroModel();
        $livro = $livroModel->where('token', $token)->find($id);
        return var_dump($livro);
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

    public function putEditar($id){
        $livroModel = new \App\Models\LivroModel();
        if($this->request->getMethod() == 'put'){
            $data = $this->request->getJSON();
            if($livroModel->update($id, $data)){
                return "Sucesso na edição!";
            }
            else{
                return "Erro na edição!";
            }
        }
    }

    public function patchEditar($id){
        $livroModel = new \App\Models\LivroModel();
        if($this->request->getMethod() == 'patch'){
            $data = $this->request->getJSON();
            if($livroModel->update($id, $data)){
                return "Sucesso na edição!";
            }
            else{
                return "Erro na edição!";
            }
        }
    }

    public function excluir($id){
        $livroModel = new \App\Models\LivroModel();
        if($this->request->getMethod() == 'delete'){
            if($livroModel->delete($id)){
               return "Sucesso na exclusão!!"; 
            }
            else{
                return "Erro na exclusão!!";
            }
        }
    }
}

class LivroConstruct{
    public function __construct($nome, $descricao, $autor){
        $this->nome = $nome == '' ? null : $nome;
        $this->descricao = $descricao == '' ? null : $descricao;
        $this->autor = $autor == '' ? null : $autor;
    }
}
