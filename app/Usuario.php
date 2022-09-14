<?php

namespace App;

class Usuario extends RModel
{
    protected $table = 'usuarios';
    protected $fillable = ['nome', 'email', 'login', 'password'];
}
