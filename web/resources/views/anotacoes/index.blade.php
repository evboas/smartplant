<x-layout title="Anotações">

    @isset($mensagemSucesso)
        <div class="mensagem__alerta">
            {{$mensagemSucesso}}
        </div>
    @endisset

    <button class="anotacoes__botao">
        <a href="{{route('anotacoes.create')}}" class="anotacoes__botao-texto">Criar Anotações</a>
    </button>

    <table class="tabela__anotacoes">
        <thead>
            <th>Planta</th>
            <th>Data</th>
        </thead>
        <tbody>
            @foreach ($anotacoes as $anotacao)
                <tr>
                    <td class="tabela__dados-nome">{{$anotacao->nome}}</td>
                    <td class="tabela__dados-data">{{$anotacao->created_at}}</td>
                    <td class="tabela__dados-remover">
                        <form action="{{route('anotacoes.destroy', $anotacao->id)}}" method="POST" class="card__excluir">
                            @csrf
                            @method('DELETE')
                            <button class="botao__excluir-anotacao">x</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>