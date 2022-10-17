<x-layout title="Anotações">
    <button class="anotacoes__botao">
        <a href="/anotacoes/criar" class="anotacoes__botao-texto">Criar Anotações</a>
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
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>