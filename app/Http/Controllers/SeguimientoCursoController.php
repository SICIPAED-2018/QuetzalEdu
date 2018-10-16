<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Area;

use App\ContenidoCurso;

class SeguimientoCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function getCurso($id){
        $area = Area::find($id);
        
        $area->contenidos;

        return response()->json(
            $area->toArray()
        );
    }


    public function getContenido($id){
        $contenido = ContenidoCurso::find($id);
        
        
        $contenido->actividades;
        $contenido->mochila;

        return response()->json(
            $contenido->toArray()
        );
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
    public function store(Request $request)
    {
        //
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
         return view('cliente.cursos.index');
        /*return response()->json(
            $curso->toArray()
        );*/
    }

    public function showContenido($id)
    {
        //
         return view('cliente.contenidos.index');
        /*return response()->json(
            $curso->toArray()
        );*/
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
