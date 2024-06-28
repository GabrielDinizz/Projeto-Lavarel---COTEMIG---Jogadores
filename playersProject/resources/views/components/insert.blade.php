<head>
    <link rel="stylesheet" href="{{ asset('css/insert.css') }}">
    <script src="{{ asset('js/countries.js') }}" defer></script>
    <script src="{{ asset('js/aproveInsert.js') }}" defer></script>
</head>

<h2>Inserir Jogador</h2>
<form action="/store" method="post" class="insert-form" onsubmit="return validarFormulario();">
    @csrf

    <p class="nome">
        <label class="insert-label" for="Nome">Nome</label>
        <input class="insert-spaces" type="text" name="nome" placeholder="Nome">
    </p>

    <p class="pais">
        <Label class="insert-label" for="Pais">País</label>
        <select name="pais" class="insert-spaces">
            <option>Selecione o País</option>
        </select>
    </p>

    <p class="valor">
        <label class="insert-label" for="Valor">Valor</label>
        <input class="insert-spaces" type="number" name="valor" placeholder="Valor">
    </p>

    <p class="status">
        <label class="insert-label" for="Status">Status</label>
        <select class="insert-spaces" name="status" id="statusOptions">
            <option value="ativo" id="ativo">Ativo</option>
            <option value="inativo" id="inativo">Inativo</option>
        </select>
    </p>


    <p class="posicao">
        <label class="insert-label" for="Posição">Posição</label>
        <select name="posicao" class="insert-spaces">
            <option>Selecione a Posição</option>
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
        <label class="insert-label" for="clube">Clube</label>
        <input type="text" name="clube" class="insert-spaces" placeholder="Clube">
    </p>

    <input class="submit" type="submit" value="Inserir">
</form>