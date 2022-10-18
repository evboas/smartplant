<?php

namespace App\Http\Controllers;

use App\Models\Anotacao;
use Illuminate\Http\Request;

class AnotacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mensagemSucesso = session('mensagem.sucesso');
        $anotacoes = Anotacao::all();

        return view('anotacoes.index')->with('anotacoes', $anotacoes)->with('mensagemSucesso', $mensagemSucesso);;
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

        return to_route('anotacoes.index')->with('mensagem.sucesso', 'Anotação cadastrada com sucesso');
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
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Anotacao::destroy($request->anotaco);
        return to_route('anotacoes.index')->with('mensagem.sucesso', 'Anotação excluida com sucesso');
    }
}
