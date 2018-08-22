<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pregunta;

use App\Examen;

use App\Nivel;

use App\Http\Requests\PreguntaRequest;

class SimuladorExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.simulador.index');
    }

    public function getPreguntas(){
        $preguntas = Pregunta::all();
        $preguntas->each(function($preguntas){
            $preguntas->examen;
        });
        return response()->json(
            $preguntas->toArray()
        );
    }

    public function getExamenes(Request $request,$id){
        if($request->ajax()){
            $examenes = Examen::examenes($id);
            return response()->json($examenes);
        }
    }

    public function setPreguntas(PreguntaRequest $request){
        $pregunta = new Pregunta($request->all());
        $pregunta->examen_id = 1;
        $pregunta->save();
        $preguntas = Pregunta::all();
            return response()->json(
                $preguntas->toArray()
        );
    }


    public function deletePreguntas($id){
         $pregunta = Pregunta::find($id);
         $pregunta->delete();    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $niveles = Nivel::all();
        return view('admin.simulador.create')->with('niveles', $niveles);
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
