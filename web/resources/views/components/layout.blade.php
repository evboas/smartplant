<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cadastroPlanta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/anotacoes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre.css') }}">

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

    <title>{{ $title }} | Smart Plant Info</title>
</head>
<body>
    <div class="conteudo">

        <header class="cabecalho__mobile">
            <h1 class="cabecalho__titulo">Smart Plant Info</h1>
            <button class="cabecalho__botao" id="mobile__botao-menu">
                <img src="{{asset('img/menu.png')}}" class="cabecalho__botao-menu-img">
            </button>
        </header>

        <nav class="conteudo__barra-lateral hidden-mobile">
            <h1 class="titulo"><iconify-icon inline icon="fluent-emoji-flat:potted-plant" width="24" height="24"></iconify-icon>Smart Plant Info</h1>

            <ul class="barra-lateral__lista">
                <li class="barra-lateral__item">
                    <a href="{{route('plantas.index')}}" class="barra-lateral__link"><iconify-icon inline icon="ic:round-home" width="24" height="24"></iconify-icon><spam class="menulateral">Home</spam></a>
                </li>
                <li class="barra-lateral__item">
                    <a href="{{route('plantas.create')}}" class="barra-lateral__link"><iconify-icon inline icon="material-symbols:add-circle-outline" width="24" height="24"></iconify-icon><spam class="menulateral">Cadastrar</spam></a>
                </li>
                <li class="barra-lateral__item">
                    <a href="{{route('anotacoes.index')}}" class="barra-lateral__link"><iconify-icon inline icon="material-symbols:add-notes-outline" width="24" height="24"></iconify-icon><spam class="menulateral">Anotações</spam></a>
                </li>
                <li class="barra-lateral__item">
                    <a href="/sobre" class="barra-lateral__link"><iconify-icon inline icon="mdi:about-circle-outline" width="24" height="24"></iconify-icon><spam class="menulateral">Sobre</spam></a>
                </li>
                <li class="barra-lateral__item">
                    <a href="{{route('logout')}}" class="barra-lateral__link">
                        <iconify-icon inline icon="icomoon-free:exit" width="24" height="24"></iconify-icon><spam class="menulateral">Sair</spam>
                    </a>
                </li>
            </ul>
        </nav>

        <main class="conteudo__principal">
            <h2 class="titulo__pagina">{{ $title }}</h2>
            
            @if ($errors->any())
            <div class="alerta_erro">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            {{ $slot }}
        </main>
    </div>

    <footer>
        <p class="rodape__texto">Projeto desenvolvido na disciplina de Projeto Integrador da 
        Universidade Virtual do Estado de São Paulo</p>
    </footer>
    
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>