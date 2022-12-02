<x-layout title="Editar anotações">
    <x-anotacoes.form :action="route('anotacoes.update', $anotacao->id)" :plantas="$plantas" :idplanta="$anotacao->planta_id" :nome="$anotacao->nome" :observacoes="$anotacao->observacoes" />
</x-layout>
