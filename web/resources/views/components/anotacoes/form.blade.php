<form action="{{ $action }}" class="formulario__anotacoes" method="POST">
    @csrf

    @isset($planta)
        @method('PUT')
    @endisset

    <div class="formulario_container">
        <label for="nome">Identificação da Planta:</label>
        <select name="nome" id="identificacao_planta">
            @foreach ($plantas as $planta)
                <option value="{{$planta->nome}}" 
                    @isset($nome)
                        value="{{$planta->nome}}"
                    @endisset>
                    {{$planta->nome}}
                </option>
            @endforeach
        </select>
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