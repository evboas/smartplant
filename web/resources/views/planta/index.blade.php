<x-layout title="Home">
    <div class="conteudo__cards">
        @foreach ($plantas as $planta)    
            <div class="card__planta">
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