<?php

namespace App\Http\Controllers;

use App\Models\Anotacao;
use App\Models\Planta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnotacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anotacoes = Anotacao::all();

        return view('anotacoes.index')->with('anotacoes', $anotacoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anotacoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $nomePlanta = $request->input('identificacao_planta');
        $observacoesPlanta = $request->input('observacoes_planta');
        
        $anotacao = new Anotacao();
        $anotacao->nome = $nomePlanta;
        $anotacao->observacoes = $observacoesPlanta;
        $anotacao->save(); */

        Anotacao::create($request->all());

        return to_route('anotacoes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Anotacao::destroy($request->anotaco);
        return to_route('anotacoes.index');
    }
}
