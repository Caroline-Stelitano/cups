<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    //estou criando uma função de lógica
    public function viewProdutos(){
        //return view('produtos');
        // $produtos = Produto::all();
        // return view('produtos',compact('produtos')); //return view('produtos',['produtos' => $produtos]);

        //criando um produto no BD:
        $p = new Produto();
        $p->nome = "corega";
        $p->descricao = "cola pra dentadura";
        $p->preco = 10;
        $p->url_imagem = 'colatudo';
        $p->save();
        return $p;
    }
}
