<form action="{{ $action }}" class="formulario__anotacoes" method="POST">
    @csrf

    @isset($nome)
        @method('PUT')
    @endisset

    <div class="formulario_container">
        <label for="nome">Identificação da Planta:</label>
        <input type="text" name="nome" id="identificacao_planta"
        @isset($nome)
            value="{{$nome}}"
        @endisset>
    </div>
    
    <div class="formulario_container">
        <label for="estado_planta">Estado da Planta:</label>
        <select name="estado_planta">
            <option value="Bom">Bom</option>
            <option value="Regular" selected>Regular</option>
            <option value="Ruim">Ruim</option>
        </select>
    </div>
    
    <div class="formulario_container formulario_container-observacoes">
        <label for="observacoes">Observações:</label>
        <textarea name="observacoes" id="observacoes_planta" class="observacoes_planta" cols="100" rows="10"
        >@isset($observacoes){{$observacoes}}@endisset</textarea>
    </div>

    <button type="submit" class="formulario__botao-anotacoes">Gravar</button>
</form>