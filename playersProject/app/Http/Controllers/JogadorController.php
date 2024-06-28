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
    $jogadores = Jogador::paginate(5); 

    return view('cadastro', compact('jogadores'));
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

    public function edit($id){
        $jogador = Jogador::find($id);
        return view('edit', ['jogador' => $jogador]);
    }

    public function update(Request $request, $id)
    {
        $jogador = Jogador::find($id);
        $jogador->nome = $request->nome;
        $jogador->pais = $request->pais;
        $jogador->valor = $request->valor;
        $jogador->status = $request->status;
        $jogador->posicao = $request->posicao;
        $jogador->clube = $request->clube;
        $jogador->save();
        return redirect('cadastrar')->with('msg', 'Jogador atualizado com sucesso!');
    }

    public function destroy($id)
    {        
        Jogador::findOrFail($id)->delete(); 
        return redirect('cadastrar')->with('msg', 'Jogador excluído com sucesso!'); 
    }

}
