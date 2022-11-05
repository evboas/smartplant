<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlantasFormRequest;
use App\Models\Planta;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class PlantasController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensagemSucesso = session('mensagem.sucesso');

        $plantas = Planta::all();

        return view('planta.index')->with('plantas', $plantas)->with('mensagemSucesso', $mensagemSucesso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlantasFormRequest $request)
    {
        $planta = Planta::create($request->all());
        return to_route('plantas.index')->with('mensagem.sucesso', "Planta '{$planta->nome}' foi adicionada com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Planta $planta)
    {
        $anotacoes = $planta->anotacoes()->all();

        return view('planta.show')->with('planta', $planta)->with('anotacoes', $anotacoes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Planta $planta)
    {
        
        return view('planta.edit')->with('planta', $planta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Planta $planta, PlantasFormRequest $request)
    {
        $planta->fill($request->all());
        $planta->save();

        return to_route('plantas.index')->with('mensagem.sucesso', "Planta '{$planta->nome}' atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Planta $planta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planta $planta)
    {
        $planta->delete();
        return to_route('plantas.index')->with('mensagem.sucesso', "Planta '{$planta->nome}' removida com sucesso");
    }
}
