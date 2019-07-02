<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Actor;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $actors = Actor::all();

      return view('actorsIndex', compact('actors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarActor');
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

          'first_name' => 'required | unique:actors,first_name',
          'last_name' => 'required',
          'rating' => 'required | numeric | min:0 | max:10',
          'favorite_movie' => 'required',

      ], [

        'required' => 'EL campo :attribute es obligatorio',
        'first_name.unique' => 'Ese actor ya esta registrado', 
        'rating.numeric' => 'El rating debe ser un numero',
        'rating.min' => 'El rating debe ser como minimo 0 ',
        'rating.max' => 'El rating debe ser como maximo 10 ',
      ]);
      //
      // $newActor = new Actor()
      // $newActor->first_name = $request->input('first_name');
      // $newActor->first_name = $request->input('first_name');
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
    public function destroy($id)
    {
        //
    }

}
