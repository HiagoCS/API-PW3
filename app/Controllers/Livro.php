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
}
