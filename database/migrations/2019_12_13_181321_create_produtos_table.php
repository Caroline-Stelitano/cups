<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {   //$table é da classe Blueprint. no laravel mos
            $table->bigIncrements('id');                           // os métodos do objeto table são bigIncrements, string
            $table->string('nome',100);                            //string(string $column, int $length = 255). Editei o numero de caracteres.
            $table->string('descricao',1000);
            $table->decimal('preco',9,2);        //decimal(string $column, int $total = 8, int $places = 2)
            $table->string('url_imagem');        //padrão 255 caractereres.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
