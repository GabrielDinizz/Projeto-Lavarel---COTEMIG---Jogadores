@extends('layouts.app')

@section('content')
<header>
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    <script src="{{ asset('js/countries.js') }}" defer></script>
    <script src="{{ asset('js/aproveInsert.js') }}" defer></script>
</header>
<div id="edit-container">
    <form action="/update/{{ $jogador->id }}" class="insert-form" method="post" onsubmit="return validarFormulario();">
        @csrf
        @method('PUT')

        <p class="nome">
            <label for="Nome">Nome</label>
            <input class="insert-spaces" type="text" name="nome" placeholder="Nome" id="nome" value="{{ $jogador->nome }}">
        </p>

        <p class="pais">
            <Label for="Pais">País</Label>
            <select name="pais" class="insert-spaces" id="pais">
                <option value="{{ $jogador->pais }}">{{ $jogador->pais }}</option>
            </select>
        </p>

        <p class="valor">
            <label for="Valor">Valor</label>
            <input class="insert-spaces" type="text" name="valor" placeholder="Valor" id="valor" value="{{ $jogador->valor }}">
        </p>

        <p class="status">
            <label for="Status">Status</label>
            <select class="insert-spaces" name="status" id="statusOptions">
                <option value="{{ $jogador->status }}" hidden>{{ $jogador->status }}</option>
                <option value="inativo">Inativo</option>
                <option value="ativo">Ativo</option>
            </select>
        </p>

        <p class="posicao">
            <label for="Posicao">Posição</label>
            <select name="posicao" class="insert-spaces" id="posicao">
                <option value="{{ $jogador->posicao }}" hidden>{{ $jogador->posicao }}</option>
                <option value="goleiro">Goleiro</option>
                <option value="lateral-direito">Lateral Direito</option>
                <option value="lateral-esquerdo">Lateral Esquerdo</option>
                <option value="zagueiro">Zagueiro</option>
                <option value="zagueiro-central">Zagueiro Central</option>
                <option value="volante">Volante</option>
                <option value="meio-campista-direito">Meio-campista Direito</option>
                <option value="meio-campista-centers">Meio-campista Centro</option>
                <option value="meio-campista">Meio-campista</option>
                <option value="meio-campista-ofensivo">Meio-campista Ofensivo</option>
                <option value="centroavante">Centroavante</option>
            </select>
        </p>

        <p class="clube">
            <label for="Clube">Clube</label>
            <input type="text" name="clube" class="insert-spaces" placeholder="Clube" id="clube" value="{{ $jogador->clube }}">
        </p>

        <input class="submit" type="submit" value="Atualizar">
    </form>
</div>
@endsection