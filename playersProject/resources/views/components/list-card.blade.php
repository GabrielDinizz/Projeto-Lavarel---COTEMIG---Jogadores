<header>
    <link rel="stylesheet" href="{{ asset('css/list.css') }}">
</header>
<div class="tittle">
    <h2>Todos os Jogadores</h2>
    <h5>Active Menbers</h5>
</div>
<div class="table">
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Posição</th>
                <th>Clube</th>
                <th>País</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jogadores as $jogador)
            <tr>
                <td>{{ $jogador->nome }}</td>
                <td>{{ $jogador->valor }}</td>
                <td>{{ $jogador->posicao }}</td>
                <td>{{ $jogador->clube }}</td>
                <td>{{ $jogador->pais }}</td>
                <td>{{ $jogador->status }}</td>
                <td>
                    <a href="{{ $jogador->id }}/edit">
                        <button type="button" class="btn btn-danger delete-btn">
                            <i class="fas fa-edit"></i> Editar
                        </button>
                    </a>
                </td>
                <td>
                    <form action="/cadastrar/{{ $jogador->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn">
                            <i class="fas fa-trash-alt"></i> Deletar
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Paginação -->
<div class="pagination">
    @if ($jogadores->lastPage() > 1)
        <ul>
            @if ($jogadores->onFirstPage())
                <li><span>&laquo; Anterior</span></li>
            @else
                <li><a href="{{ $jogadores->previousPageUrl() }}" rel="prev">&laquo; Anterior</a></li>
            @endif

            @for ($i = 1; $i <= $jogadores->lastPage(); $i++)
                <li>
                    @if ($i == $jogadores->currentPage())
                        <span>{{ $i }}</span>
                    @else
                        <a href="{{ $jogadores->url($i) }}">{{ $i }}</a>
                    @endif
                </li>
            @endfor

            @if ($jogadores->hasMorePages())
                <li><a href="{{ $jogadores->nextPageUrl() }}" rel="next">Próximo &raquo;</a></li>
            @else
                <li><span>Próximo &raquo;</span></li>
            @endif
        </ul>
    @endif
</div>
        