<?php

namespace App\Http\Controllers;
use App\Models\Jogador;

use Illuminate\Http\Request;

class JogadorController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function cadastro()
    {
        $jogadores = Jogador::get();
        return view('cadastro')->with('jogadores', $jogadores);
    }

    public function store(Request $request)
    {
        $name = $request->nome;
        $pais = $request->pais;
        $valor = $request->valor;
        $status = $request->status;
        $posicao = $request->posicao;
        $clube = $request->clube;

        $jogador = new Jogador();
        $jogador->nome = $name;
        $jogador->pais = $pais;
        $jogador->valor = $valor;
        $jogador->status = $status;
        $jogador->posicao = $posicao;
        $jogador->clube = $clube;

        $jogador->save();

        return redirect('cadastrar');
    }

}
