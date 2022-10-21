<x-layout title="Home">
    
    @isset($mensagemSucesso)
        <div class="mensagem__alerta">
            {{$mensagemSucesso}}
        </div>
    @endisset

    <div class="conteudo__cards">
        @foreach ($plantas as $planta)    
            <div class="card__planta">
                <span class="card__plantas-botoes">
                    <a href="{{route('plantas.edit', $planta->id)}}" class="card__editar-planta">E</a>
                    <form action="{{route('plantas.destroy', $planta->id)}}" method="POST" class="card__excluir">
                        @csrf
                        @method('DELETE')
                        <button class="card__excluir-planta">x</button>
                    </form>
                </span>

                <div class="card__planta-identificacao">
                    <h2 class="nome_planta">{{$planta->nome}}</h2>
                    <p class="tipo_planta">{{$planta->tipo}}</p>
                </div>

                <p class="temperatura_planta">Temperatura:</p>
                <p class="umidade_planta">Umidade:</p>
                <p class="luminosidade_planta">Luminosidade:</p>
            </div>
        @endforeach
    </div>
</x-layout>