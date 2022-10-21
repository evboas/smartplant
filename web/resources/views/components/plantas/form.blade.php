<form action="{{ $action }}" method="POST" class="formulario_cadastro-planta">
    @csrf

    @isset($nome)
        @method('PUT')
    @endisset

    <div class="formulario_container">
        <label for="nome">Identificação da planta:</label>
        <input type="text" id="identificacao_planta" name="nome"
        @isset($nome)
            value="{{$nome}}"
        @endisset>
    </div>
    <div class="formulario_container">
        <label for="tipo">Tipo de planta:</label>
        <input type="text" id="tipo_planta" name="tipo"
        @isset($tipo)
            value={{$tipo}}
        @endisset>
    </div>

    <button type="submit" class="envia__formulario">Cadastrar</button>
</form>