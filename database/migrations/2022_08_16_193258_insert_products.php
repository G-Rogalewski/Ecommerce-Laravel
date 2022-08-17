<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Categoria(['categoria' => 'Geral' ]);
        $cat->save();

        $prod = new \App\Produto(['nome' => 'Camisa Paraná Clube 2021 - Home', 'valor' => 149.90, 'foto' => 'images/brasileiros/parana/parana_2021_i.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa Paraná Clube 2020 - Away', 'valor' => 149.90, 'foto' => 'images/brasileiros/parana/parana_2020_ii.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa Paraná Clube 2022 - Third', 'valor' => 179.90, 'foto' => 'images/brasileiros/parana/parana_2022_iii.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}