<x-layout title="Criar anotações">
    <x-anotacoes.form :action="route('anotacoes.store')" :plantas="$plantas" :nome="old('$planta->nome')" :observacoes="old('observacoes')" />
</x-layout>