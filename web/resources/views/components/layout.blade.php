<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/template.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cadastroPlanta.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sobre.css') }}">

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
            <h1 class="titulo">Smart Plant Info</h1>
    
            <ul class="barra-lateral__lista">
                <li class="barra-lateral__item">
                    <a href="/" class="barra-lateral__link">Home</a>
                </li>
                <li class="barra-lateral__item">
                    <a href="/planta/criar" class="barra-lateral__link">Cadastrar</a>
                </li>
                <li class="barra-lateral__item">
                    <a href="#" class="barra-lateral__link">Observações</a>
                </li>
                <li class="barra-lateral__item">
                    <a href="/sobre" class="barra-lateral__link">Sobre</a>
                </li>
                <li class="barra-lateral__item">
                    <a href="login.html" class="barra-lateral__link">
                        <img src="{{asset('img/exit.svg')}}" class="img-sair">
                        Sair
                    </a>
                </li>
            </ul>
        </nav>
    
        <main class="conteudo__principal">
            <h2 class="titulo__pagina">{{ $title }}</h2>
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