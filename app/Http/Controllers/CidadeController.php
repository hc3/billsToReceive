<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;

use App\Http\Requests;

class CidadeController extends Controller
{
    public function listaCidadeJSON() {
        $cidade = Cidade::with('estado')->get();
        return $cidade;
    }
}
