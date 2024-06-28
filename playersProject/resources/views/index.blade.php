@extends('layouts.app')

@section('content')
<header>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</header>

<div class="welcome" style="background-image: url('{{ asset('images/pexels-bohlemedia-1884574.jpg') }}');">
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
