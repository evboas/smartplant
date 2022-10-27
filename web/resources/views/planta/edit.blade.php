<x-layout title="Editar Planta">
    <x-plantas.form :action="route('plantas.update', $planta->id)" :nome="$planta->nome" :tipo="$planta->tipo" :update="true"/>
</x-layout>
