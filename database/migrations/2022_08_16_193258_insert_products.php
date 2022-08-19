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
        $cat = new \App\Categoria(['categoria' => 'Parana' ]);
        $cat->save();
        $cat = new \App\Categoria(['categoria' => 'Bahia' ]);
        $cat->save();

        $prod = new \App\Produto(['nome' => 'Camisa Paraná Clube 2021 - Home', 'valor' => 149.90, 'foto' => '../images/brasileiros/parana/parana_2021_i.png', 'descricao' => '', 'categoria_id' => 1]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa Bahia 2022 - Home', 'valor' => 229.90, 'foto' => '../images/brasileiros/bahia/bahia_2022_i.png', 'descricao' => '', 'categoria_id' => 2]);
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
