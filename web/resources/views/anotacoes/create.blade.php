<x-layout title="Criar anotações">
    <x-anotacoes.form :action="route('anotacoes.store')" :nome="old('nome')" :observacoes="old('observacoes')" />
</x-layout>