<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome','cpf','endereco_id','cidade_id','estado_id','contato_id'];
}
