<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $livros = Livro::all()->toArray();

        return array_reverse($livros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        //
        $livro = new Livro([
            'nome'=> $request->input('nome'),
            'autor' => $request->input('autor')
        ]);

        $livro->save();

        return response()->json('O livro foi adicionado com sucesso!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $livro = Livro::find($id);

        return response()->json($livro);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $livro = Livro::find($id);
        $livro->update($request->all());

        return response()->json('O livro foi atualizado com sucesso!.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $livro
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $livro = Livro::find($id);
        $livro->delete();

        return response()->json('O livro deletado com sucesso!.');
    }
}
