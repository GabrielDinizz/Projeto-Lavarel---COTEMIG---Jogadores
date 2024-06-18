<header>
    <link rel="stylesheet" href="{{ asset('css/insert.css') }}">
</header>

<h2>Inserir Jogador</h2>
<form method="get" class="insert-form">
    @csrf

    <p class="nome">
        <label for="Nome">Nome</label>
        <input class="insert-spaces" type="text" name="nome" placeholder="Nome">
    </p>

    <p class="pais">
        <Label for="Pais">País</Label>
        <select name="pais" class="insert-spaces">
            <option value="brasil">Brasil</option>
        </select>
    </p>

    <p class="valor">
        <label for="Valor">Valor</label>
        <input class="insert-spaces" type="text" name="valor" placeholder="Valor">
    </p>

    <p class="status">
        <label for="Status">Status</label>
        <input class="insert-spaces" type="text" name="status" placeholder="Status">
    </p>

    <p class="posicao">
        <label for="Posicao">Posição</label>
        <select name="posicao" class="insert-spaces">
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
        <label for="clube">Clube</label>
        <select name="clube" class="insert-spaces">
            <option value="vasco">Vasco</option>
        </select>
    </p>

    <input class="submit" type="submit" value="Inserir">
</form>