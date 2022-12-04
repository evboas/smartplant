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
                <a href="{{route('plantas.edit', $planta->id)}}" class="card__editar-planta">
                    <iconify-icon inline icon="ic:outline-mode-edit-outline" width="24" height="24"></iconify-icon>
                </a>
                <form action="{{route('plantas.destroy', $planta->id)}}" method="POST" class="card__excluir">
                    @csrf
                    @method('DELETE')
                    <button class="card__excluir-planta"><iconify-icon inline icon="ic:outline-delete-forever" width="24" height="24"></iconify-icon></button>
                </form>
            </span>

            <div class="card__planta-identificacao">
                <h2 class="nome_planta">{{$planta->nome}}</h2>
                <p class="tipo_planta">{{$planta->tipo}}</p>
            </div>



            <div style="width: 100%;display: flex;">
                <div style="width: 32%;text-align: center;">
                    <iconify-icon inline icon="openmoji:temperature-taking" width="24" height="24"></iconify-icon><spam class="infoscards">30ºC</spam>
                    <p class="temperatura_planta">TEMPERATURA</p>
                </div>
                <div style="width: 32%;text-align: center;">
                    <iconify-icon inline icon="icon-park:water" width="24" height="24"></iconify-icon><spam class="infoscards">60%</spam>
                    <p class="umidade_planta">UMIDADE</p>
                </div>
                <div style="width: 32%;text-align: center;">
                    <iconify-icon inline icon="noto-v1:sun" width="24" height="24"></iconify-icon><spam class="infoscards">80%</spam>
                    <p class="luminosidade_planta">LUMINOSIDADE</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>