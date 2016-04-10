<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome','cpf','endereco_id','cidade_id','contato_id'];

    public function endereco() {
        return $this->belongsTo('App\Endereco');
    }

    public function cidade() {
        return $this->belongsTo('App\Cidade');
    }

    public function contato() {
        return $this->belongsTo('App\Contato');
    }

    public static function boot() {
        parent::boot();

        static::deleted(function($cliente){
            $cliente->endereco()->delete();
            $cliente->contato()->delete();
        });
    }
}


