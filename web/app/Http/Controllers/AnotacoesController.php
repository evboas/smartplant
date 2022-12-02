<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnotacoesFormRequest;
use App\Models\Anotacao;
use App\Models\Planta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnotacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param Planta $planta
     * @return \Illuminate\Http\Response
     */
    public function index(Planta $planta)
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
        $plantas = Planta::all();
        return view('anotacoes.create')->with('plantas', $plantas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnotacoesFormRequest $request)
    {
        DB::transaction(function() use ($request){
            $anotacao = new Anotacao();
            $anotacao->planta_id = Planta::where('nome', $request->nome)->first()->id;
            $anotacao->nome = $request->nome;
            $anotacao->estado = $request->estado_planta;
            $anotacao->observacoes = $request->observacoes;
            $anotacao->save();
        });
        
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
     * @param Anotacao $anotaco
     * @return \Illuminate\Http\Response
     */
    public function edit(Anotacao $anotaco, Planta $plantas)
    {
        $plantas = Planta::all();
        return view('anotacoes.edit')->with('anotacao', $anotaco)->with('plantas', $plantas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Anotacao $anotaco,Request $request)
    {
        $anotaco->planta_id = Planta::where('nome', $request->nome)->first()->id;
        $anotaco->nome = $request->nome;
        $anotaco->estado = $request->estado_planta;
        $anotaco->observacoes = $request->observacoes;
        $anotaco->save();
        
        return to_route('anotacoes.index')->with('mensagem.sucesso', 'Anotação editada com sucesso');
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
