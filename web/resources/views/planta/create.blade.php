<x-layout title="Novo Registro">
    <x-plantas.form :action="route('plantas.store')" :nome="old('nome')" :tipo="old('tipo')" :update="false" />
</x-layout>