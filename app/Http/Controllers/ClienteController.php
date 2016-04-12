<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;
use Illuminate\Support\Facades\Input;

class ClienteController extends Controller
{
    public function listaCliJSON() {
        $clientes = Cliente::with('endereco','cidade','contato')->get();
        return $clientes;
    }
/**
    public function saveCliJSON() {
        $input = Input::all();
        $cliente = new Cliente();
        $cliente->
    }
**/

    public function saveCliJSON(Request $request) {
        $cliente = new Cliente();
        $endereco = new Endereco();
        $contato = new Contato();
        $contato->email = $request->input('email');
        $contato->celular = $request->input('celular');
        $contato->fixo = $request->input('fixo');
        $contato->save();
        $contato_id = $contato->id;
        $endereco->rua = $request->input('rua');
        $endereco->bairro = $request->input('bairro');
        $endereco->cep = $request->input('cep');
        $endereco->save();
        $endereco_id = $endereco->id;
        $cliente->nome = $request->input('nome');
        $cliente->cpf = $request->input('cpf');
        $cliente->contato_id = $contato_id;
        $cliente->endereco_id = $endereco_id;

        $cliente->save();

        return $cliente;

    }

    public function cadastrar(Request $request) {


    }

}
