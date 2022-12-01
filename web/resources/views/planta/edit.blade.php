<x-layout title="Editar Planta">
    <x-plantas.form :action="route('plantas.update', $planta->id)" :nome="$planta->nome" :tipo="$planta->tipo" :plantaip="$planta->ip_planta" :update="true"/>
</x-layout>
