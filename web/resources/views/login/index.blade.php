<x-loginLayout>
    <fieldset class="caixa-login">
        <form method="POST" class="formulario-login">
            @csrf
            <div class="formulario__container">
                <label for="name" class="user__label">Usuário:</label>
                <input type="text" name="name" id="name" class="formulario__campo">
            </div>
            <div class="formulario__container">
                <label for="password" class="senha__label">Senha:</label>
                <input type="password" name="password" id="password" class="formulario__campo">
            </div>

            <button class="login__botao">Entrar</button>

            <a href="{{route('create')}}" class="login__cadastro">Registrar</a>
        </form>
    </fieldset>

    <div class="login__texto">
        <p class="texto__univesp">
            Este projeto tem como objetivo, auxilia no controle
            dos cuidados com sua(s) planta(s). <br>
            Seu conteúdo é apresentado na disciplina de Projeto
            Integrador III para os cursos do eixo de computação
            da Universidade Virtual do Estado de São Paulo (UNIVESP).
        </p>
    </div>
</x-layout>