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

        $prod = new \App\Produto(['nome' => 'Camisa Coritiba 2022 - Home', 'valor' => 229.90, 'foto' => 'images/brasileiros/parana/coritiba_2022_i.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa Coritiba 2022 - Away', 'valor' => 229.90, 'foto' => 'images/brasileiros/parana/coritiba_2022_ii.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa Operário Ferroviário 2021 - Home', 'valor' => 179.90, 'foto' => 'images/brasileiros/parana/operario_2021_i.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa União Francisco Beltrão 2021 - Home', 'valor' => 99.90, 'foto' => 'images/brasileiros/parana/uniao_2021_i.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa União Francisco Beltrão 2021 - Away', 'valor' => 99.90, 'foto' => 'images/brasileiros/parana/uniao_2021_ii.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa FC Casvavel 2021 - Home', 'valor' => 49.90, 'foto' => 'images/brasileiros/parana/cascavel_2021_i.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa FC Casvavel 2021 - Away', 'valor' => 49.90, 'foto' => 'images/brasileiros/parana/cascavel_2021_ii.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa Maringá 2020 - Home', 'valor' => 99.90, 'foto' => 'images/brasileiros/parana/maringa_2020_i.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa Cascavel CR 2021 - Home', 'valor' => 119.90, 'foto' => 'images/brasileiros/parana/cascavel_cr_2021_i.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();
        
        $prod = new \App\Produto(['nome' => 'Camisa Cascavel CR 2021 - Away', 'valor' => 119.90, 'foto' => 'images/brasileiros/parana/cascavel_cr_2021_ii.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();
        
        $prod = new \App\Produto(['nome' => 'Camisa Cascavel CR 2021 - Third', 'valor' => 119.90, 'foto' => 'images/brasileiros/parana/cascavel_cr_2021_iii.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa Cambará 2018 - Home', 'valor' => 99.90, 'foto' => 'images/brasileiros/parana/cambara_2018_i.png', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod = new \App\Produto(['nome' => 'Camisa Paranavaí 2018 - Home', 'valor' => 99.90, 'foto' => 'images/brasileiros/parana/paranavai_2018_i.png', 'descricao' => '', 'categoria_id' => $cat->id]);
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
