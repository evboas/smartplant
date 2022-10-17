<x-layout title="Novo Registro">
    <form action="/planta/salvar" method="POST" class="formulario_cadastro-planta">
        @csrf
        <div class="formulario_container">
            <label for="identificacao">Identificação da planta:</label>
            <input type="text" id="identificacao_planta" name="identificacao_planta">
        </div>
        <div class="formulario_container">
            <label for="tipo">Tipo de planta:</label>
            <input type="text" id="tipo_planta" name="tipo_planta">
        </div>

        <button type="submit" class="envia__formulario">Cadastrar</button>
    </form>
</x-layout>