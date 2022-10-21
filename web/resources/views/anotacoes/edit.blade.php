<x-layout title="Editar anotações">
    <x-anotacoes.form :action="route('anotacoes.update', $anotacao->id)" :nome="$anotacao->nome" :observacoes="$anotacao->observacoes" />
</x-layout>
