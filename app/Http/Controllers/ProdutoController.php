<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //estou criando uma função de lógica
    public function viewProdutos(){
        return view('produtos');
    }
}
