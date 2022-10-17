<x-layout title="Criar anotações">
    <form action="/anotacoes/salvar" class="formulario__anotacoes" method="POST">
        @csrf
        <div class="formulario_container">
            <label for="identificacao_planta">Identificação da Planta:</label>
            <input type="text" name="identificacao_planta" id="identificacao_planta">
        </div>
        
        <div class="formulario_container">
            <label for="estado_planta">Estado da Planta:</label>
            <select name="estado_planta">
                <option value="valor1">Bom</option>
                <option value="valor2" selected>Regular</option>
                <option value="valor3">Ruim</option>
            </select>
        </div>
        
        <div class="formulario_container formulario_container-observacoes">
            <label for="observacoes_planta">Observações:</label>
            <textarea name="observacoes_planta" id="observacoes_planta" cols="100" rows="10"></textarea>
        </div>

        <button type="submit" class="formulario__botao-anotacoes">Gravar</button>
    </form>
</x-layout>