<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Página Inicial</title>
    <link rel="stylesheet" href="{{ asset('css/painel.css') }}">
</head>
<body>
    <header>
        <link rel="stylesheet" href="{{ asset('css/insert.css') }}">
        <script src="{{ asset('js/countries.js') }}" defer></script>
        <script src="{{ asset('js/aproveInsert.js') }}" defer></script>
        <script>
            function atualizarValores(valorTotal, jogadoresAposentados, jogadoresAtividade) {
                document.getElementById('valorTotalJogadores').innerText = valorTotal;
                document.getElementById('jogadoresAposentados').innerText = jogadoresAposentados + " jogadores";
                document.getElementById('jogadoresAtividade').innerText = jogadoresAtividade + " jogadores";
            }
        </script>
    </header>

    <div class="info-container">
        <div class="info">
            <div class="info-1">
                <h1>Valor total Jogadores: <span id="valorTotalJogadores">190,00 mi.</span></h1>
            </div>

            <div class="categorias">
                <div class="categoria">
                    <h3>Jogadores Aposentados</h3>
                    <p id="jogadoresAposentados">0 jogadores</p>
                </div>
                <div class="categoria">
                    <h3>Jogadores em Atividade</h3>
                    <p id="jogadoresAtividade">0 jogadores</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Restante do conteúdo da sua página -->
</body>
</html>
