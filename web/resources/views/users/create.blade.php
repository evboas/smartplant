<x-loginLayout>
    <fieldset class="caixa-login">
        <form method="POST" class="formulario-login">
            @csrf
            <div class="formulario__container">
                <label for="name" class="user__label">Nome:</label>
                <input type="text" name="name" id="name" class="formulario__campo">
            </div>
            <div class="formulario__container">
                <label for="email" class="user__label">Email:</label>
                <input type="email" name="email" id="email" class="formulario__campo">
            </div>
            <div class="formulario__container">
                <label for="password" class="senha__label">Senha:</label>
                <input type="password" name="password" id="password" class="formulario__campo">
            </div>
    
            <button class="login__botao">Registrar</button>
        </form>
    </fieldset>
</x-loginLayout>