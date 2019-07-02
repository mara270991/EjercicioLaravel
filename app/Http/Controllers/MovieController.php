<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use \App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $TheMovie = Movie::all();

        return view('moviesIndex', compact('TheMovie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('agregarPelicula');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([

          'title' => 'required | unique:movies,title',
          'rating' => 'required | numeric | min:0 | max:10',
          'awards' => 'required',
          'length' => 'required',
          'release_date' => 'required',
      ], [

        'required' => 'EL campo :attribute es obligatorio',
        'rating.numeric' => 'El rating debe ser un numero',
        'rating.min' => 'El rating debe ser como minimo 0 ',
        'rating.max' => 'El rating debe ser como maximo 10 ',
      ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
