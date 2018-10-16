<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ContenidoCurso;

use App\Area;

use App\Actividad;

use App\Formato;

use App\Mochila;

class ContenidoCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.contenidos.index');
    }


    public function getContenidos(){

        $contenidos = ContenidoCurso::all();
        /*$preguntas = Pregunta::all();
        $preguntas->each(function($preguntas){
            $preguntas->examen;
        });
        return response()->json(
            $preguntas->toArray()
        );*/

        $contenidos->each(function($contenidos){
            $contenidos->area;
        });

        return response()->json(
            $contenidos->toArray()
        );
    }


    public function setContenidos(Request $request){
        $contenido = new ContenidoCurso($request->all());
        $contenido->titulo = $request->titulo;
        $contenido->area_id = $request->area_id;
        $contenido->user_id = \Auth::user()->id;        

        $area = Area::find($contenido->area_id);

        $titulo = $contenido->titulo;

        $nom = $area->area_conocimiento;

        if($request->file('informacion')) {
        $file = $request->file('informacion');
        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/InformacionGeneral';


        $pathinfo = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/InformacionGeneral'.$nombre;

        
        $path_info = 'Contenidos/'.$nom.'/'.$titulo.'/InformacionGeneral/'.$nombre;

        $file->move($path, $nombre);
        }


        if($request->file('video')) {
        $file = $request->file('video');
        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/VideoGeneral';


        $pathvideo = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/VideoGeneral'.$nombre;

        
        $path_video = 'Contenidos/'.$nom.'/'.$titulo.'/VideoGeneral/'.$nombre;

        $file->move($path, $nombre);
        }

        $contenido->informacion = $path_info;
        $contenido->video = $path_video;
        $contenido->save();

        //actividades 

        if($request->file('actividad')) {
        $file = $request->file('actividad');
        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/Actividades';


        $pathactividad = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/Actividades'.$nombre;

        
        $path_actividad = 'Contenidos/'.$nom.'/'.$titulo.'/Actividades/'.$nombre;

        $file->move($path, $nombre);
        }

        $actividad = new Actividad($request->all());

        $actividad->actividad = $path_actividad;

        $actividad->contenido_curso_id = $contenido->id;

        $actividad->save();


        if($request->file('formato')) {
        $file = $request->file('formato');
        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/Formatos_Evaluacion';


        $pathformato = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/Formatos_Evaluacion'.$nombre;

        
        $path_formato = 'Contenidos/'.$nom.'/'.$titulo.'/Formatos_Evaluacion/'.$nombre;

        $file->move($path, $nombre);
        }


        $formato = new Formato($request->all());

        $formato->formato_evaluacion = $path_formato;

        $formato->contenido_curso_id = $contenido->id;

        $formato->save();


        if($request->file('mochila')) {
        $file = $request->file('mochila');
        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/Mochila';


        $pathmochila = public_path().'/Contenidos/'.$nom.'/'.$titulo.'/Mochila'.$nombre;

        
        $path_mochila = 'Contenidos/'.$nom.'/'.$titulo.'/Mochila/'.$nombre;

        $file->move($path, $nombre);
        }

        $mochila = new Mochila($request->all());

        $mochila->mochila = $path_mochila;

        $mochila->contenido_curso_id = $contenido->id;

        $mochila->save();




        $contenido = ContenidoCurso::all();
            return response()->json(
                $contenido->toArray()
        );
    }



    public function deleteContenidos($id){
         $contenido = ContenidoCurso::find($id);
         /*$rutaInfoGen = public_path().'/'.$area->informacion_general;
         $rutaVidGen = public_path().'/'.$area->video_general;
         $rutaImgGen = public_path().'/'.$area->imagen_general;
         $rutas = array($rutaInfoGen, $rutaVidGen, $rutaImgGen);
         \File::delete($rutas);*/
         $contenido->delete();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.contenidos.create');
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
