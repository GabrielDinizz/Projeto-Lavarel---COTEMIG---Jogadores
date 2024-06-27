@extends('layouts.app')

@section('content')
<form action="/update/{{ $jogador->id }}" method="post">
    @csrf
    @method('PUT')

    <p class="nome">
        <label for="Nome">Nome</label>
        <input class="insert-spaces" type="text" name="nome" placeholder="Nome" id="nome" value="{{ $jogador->nome }}">
    </p>

    <p class="pais">
        <Label for="Pais">País</Label>
        <select name="pais" class="insert-spaces" id="pais">
            <option value="brasil" {{ "$jogador->pais" == 'brasil' ? 'selected' : ' '}}</option>
            <!-- Adicione outras opções conforme necessário -->
        </select>
    </p>

    <p class="valor">
        <label for="Valor">Valor</label>
        <input class="insert-spaces" type="text" name="valor" placeholder="Valor" id="valor" value="{{ $jogador->valor }}">
    </p>

    <p class="status">
        <label for="Status">Status</label>
        <input class="insert-spaces" type="text" name="status" placeholder="Status" id="status" value="{{ $jogador->status }}">
    </p>

    <p class="posicao">
        <label for="Posicao">Posição</label>
        <select name="posicao" class="insert-spaces" id="posicao">
            <option value="goleiro" {{ $jogador->posicao == 'goleiro' ? 'selected' : '' }}>Goleiro</option>
            <!-- Adicione outras opções conforme necessário -->
        </select>
    </p>

    <p class="clube">
        <label for="Clube">Clube</label>
        <select name="clube" class="insert-spaces" id="clube">
            <option value="vasco" {{ $jogador->clube == 'vasco' ? 'selected' : '' }}>Vasco</option>
            <!-- Adicione outras opções conforme necessário -->
        </select>
    </p>

    <input class="submit" type="submit" value="Atualizar">
</form>
@endsection
