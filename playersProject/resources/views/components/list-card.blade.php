<header>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</header>
<div class="tittle">
    <h2>Todos os Jogadores</h2>
    <h5>Active Menbers</h5>
</div>
<div class="table">
    <table>
        <tr>
            <td>Nome</td>
            <td>Valor</td>
            <td>Posição</td>
            <td>Clube</td>
            <td>País</td>
            <td>Status</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach($jogadores as $jogador)
        <tr>
            <th>{{$jogador->nome}}</th>
            <th>{{$jogador->valor}}</th>
            <th>{{$jogador->posicao}}</th>
            <th>{{$jogador->clube}}</th>
            <th>{{$jogador->pais}}</th>
            <th>{{$jogador->status}}</th>
            <th><a href="{{ $jogador->id }}/edit"><button type="submit" class="btn btn-danger delete-btn">
                        <i class="fas fa-edit"></i> Editar
                    </button></a>
            </th>
            <th>
                <form action="/cadastrar/{{$jogador->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn">
                        <i class="fas fa-trash-alt"></i> Deletar
                    </button>
                </form>
            </th>
        </tr>
        @endforeach
    </table>
</div>