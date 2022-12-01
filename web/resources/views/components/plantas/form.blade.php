<form action="{{ $action }}" method="POST" class="formulario_cadastro-planta">
    @csrf

    @if($update)
        @method('PUT')
    @endif

    <div class="formulario_container">
        <label for="nome">Identificação da planta:</label>
        <input type="text" id="identificacao_planta" name="nome" autofocus
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
    <div class="formulario_container">
        <label for="ip_planta">IP planta de planta:</label>
        <input type="text" id="ip_planta_planta" name="ip_planta"
        @isset($ip_planta)
            value={{$ip_planta}}
        @endisset>
    </div>

    <button type="submit" class="envia__formulario">Cadastrar</button>
</form>