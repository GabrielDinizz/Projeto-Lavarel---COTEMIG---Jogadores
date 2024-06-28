@extends('layouts.app')
@section('content')

<header>
    <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
</header>

<div class="primeiro-painel">
    <div>
        <img src="{{ asset('assets/Group 10.svg') }}" alt="Description of the image" class="image-style">
    </div>

    <div class="info-1">
        <h2 class="titulo-info">Valor total Jogadores</h2>
        <h2>190,00 mi.</h2>
        <h4>16% this month</h4>
    </div>

    <div class="info-2">
        <h2 class="titulo-info">Aposentados</h2>
        <h2>2</h2>
    </div>

    <div class="info-3">
        <h2 class="titulo-info">Jogadores em atividade</h2>
        <h2>2</h2>
    </div>
</div>

<div class="insert-container">
    <x-painel/>
</div>

<div id="insert-container" class="component">
    <x-insert />
</div>

<div id="list-container" class="component">
    <x-list-card :jogadores="$jogadores" />
</div>

@endsection
