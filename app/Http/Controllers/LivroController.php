<?php

namespace App\Http\Controllers;

use App\Models\Book;
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
        $books = Book::all()->toArray();

        return array_reverse($books);
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
        $Book = new Book([
            'name'=> $request->input('name'),
            'autor' => $request->input('author')
        ]);

        $Book->save();

        return response()->json('O livro foi adicionado com sucesso!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $book = Book::find($id);

        return response()->json($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livro  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book = Book::find($id);
        $book->update($request->all());

        return response()->json('O livro foi atualizado com sucesso!.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livro  $book
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $book = Book::find($id);
        $book->delete();

        return response()->json('O livro deletado com sucesso!.');
    }
}
