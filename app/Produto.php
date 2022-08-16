<?php

namespace App;

class Produto extends RModel
{
    protected $table = 'produtos';
    protected $fillable = ['nome', 'foto', 'descricao', 'categoria_id', 'valor'];
}
