<?php

namespace App\Controllers;

class Livro extends BaseController
{
    public function index()
    {
        $livroModel = new \App\Models\LivroModel();

        $retorno = $livroModel->findAll();
        return view("teste_view", $retorno);
    }
}
