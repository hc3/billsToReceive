<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cliente;

class ClienteController extends Controller
{
    public function listaCliJSON() {
        $clientes = Cliente::all();
        return $clientes;
    }

}