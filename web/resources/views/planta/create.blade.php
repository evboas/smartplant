<x-layout title="Novo Registro">
    <form action="{{route('plantas.store')}}" method="POST" class="formulario_cadastro-planta">
        @csrf
        <div class="formulario_container">
            <label for="nome">Identificação da planta:</label>
            <input type="text" id="identificacao_planta" name="nome">
        </div>
        <div class="formulario_container">
            <label for="tipo">Tipo de planta:</label>
            <input type="text" id="tipo_planta" name="tipo">
        </div>

        <button type="submit" class="envia__formulario">Cadastrar</button>
    </form>
</x-layout>