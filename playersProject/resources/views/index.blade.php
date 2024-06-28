@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<style>
    body{
        background-image: url("{{ asset('images/homePicture.jpg') }}");
        background-size: cover;	
    }
</style>

<div class="welcome">
    <div class="welcome-content">
        <div class="content-left">
            <h1 class="welcome-title">SEJA BEM-VINDO AO CADASTRE SEU JOGADOR!</h1>
            <p class="welcome-text">O nosso site oferece uma plataforma fácil e intuitiva para você cadastrar jogadores de futebol. Registre informações detalhadas dos jogadores, como nome, valor, posição, país, status e clube, facilitando a gestão do seu time.</p>
            <p class="welcome-text">Cadastre-se agora e comece a gerenciar seu time de forma eficiente!</p>
            <button class="central-button" onclick="window.location.href='/cadastrar'">Cadastrar Jogador</button>
        </div>
    </div>
</div>
@endsection