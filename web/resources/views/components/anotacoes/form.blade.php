<form action="{{ $action }}" class="formulario__anotacoes" method="POST">
    @csrf

    @if($update)
        @method('PUT')
    @endif

    <div class="formulario_container">
        <label for="nome">Identificação da Planta:</label>
        
        <select name="nome" id="identificacao_planta">
            @foreach ($plantas as $planta)
                <option value="{{$planta->nome}}" 
                    @isset($idplanta)
                        @if($planta->id == $idplanta)
                            selected
                        @endif
                    @endisset>
                    {{$planta->nome}}
                </option>
            @endforeach
        </select>    
    </div>
    
    <div class="formulario_container">
        <label for="estado_planta">Estado da Planta:</label>
        <select name="estado_planta">
            <option value="Regular" @isset($estado) @if($estado == "Regular") selected @endif @endisset>Regular</option>
            <option value="Bom" @isset($estado) @if($estado == "Bom") selected @endif @endisset>Bom</option>
            <option value="Ruim" @isset($estado) @if($estado == "Ruim") selected @endif @endisset>Ruim</option>
        </select>
    </div>
    
    <div class="formulario_container formulario_container-observacoes">
        <label for="observacoes">Observações:</label>
        <textarea name="observacoes" id="observacoes_planta" class="observacoes_planta" cols="100" rows="10">@isset($observacoes){{$observacoes}}@endisset</textarea>
    </div>

    <button type="submit" class="formulario__botao-anotacoes">Gravar</button>
</form>