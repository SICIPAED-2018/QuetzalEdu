<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\AreaRequest;

use App\Area;

class AreaConocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.areas.index');
    }

    public function getAreas(){
        $areas = Area::all();
        return response()->json(
            $areas->toArray()
        );
    }

    public function setAreas(AreaRequest $request){

        dd($request);

        $area = new Area($request->all());
        
        $nom = $area->area_conocimiento;

        if($request->file('informacion_general')) {

        $file = $request->file('informacion_general');

        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/InformacionGeneral/';

        $pathinfo = public_path().'/Contenidos/'.$nom.'/InformacionGeneral/'.$nombre;

        $path_info = 'Contenidos/'.$nom.'/InformacionGeneral/'.$nombre;

        $file->move($path, $nombre);

        }

        if($request->file('video_general')) {

        $file = $request->file('video_general');

        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/InformacionGeneral/';

        $pathvideo = public_path().'/Contenidos/'.$nom.'/InformacionGeneral/'.$nombre;

        $path_video = 'Contenidos/'.$nom.'/InformacionGeneral/'.$nombre;

        $file->move($path, $nombre);

        }

        if($request->file('imagen_general')) {

        $file = $request->file('imagen_general');

        $nombre = $file->getClientOriginalName();

        $path = public_path().'/Contenidos/'.$nom.'/InformacionGeneral/';

        $pathimagen = public_path().'/Contenidos/'.$nom.'/InformacionGeneral/'.$nombre;

        $path_imagen = 'Contenidos/'.$nom.'/InformacionGeneral/'.$nombre;

        $file->move($path, $nombre);

        }

        /*if (($request->hasFile('informacion_general')) && ($request->hasFile('video_general'))) {
            $infoGen = $request->file('informacion_general');
            $vidGen = $request->file('video_general');
            $newNameinfoGen = time().$infoGen->getClientOriginalName();
            $newNamevidGen = time().$vidGen->getClientOriginalName();
            $infoGen->move(public_path().'/areas_conocimiento/files/pdf/',$newNameinfoGen);
            $vidGen->move(public_path().'/areas_conocimiento/files/video/',$newNamevidGen);
            $area->informacion_general=$newNameinfoGen;
            $area->video_general=$newNamevidGen;
        }*/

        $area->informacion_general = $path_info;

        $area->video_general = $path_video;

        $area->imagen_general = $path_imagen;

        $area->save();

        
        $areas = Area::all();
            return response()->json(
                $areas->toArray()
        );
    }

    public function updateAreas(Request $request, $id){
        $area = Area::find($id);
        $area->area_conocimiento = $request->area_conocimiento;
        $area->save();      
    }

    public function deleteAreas($id){
         $area = Area::find($id);
         $rutaInfoGen = public_path().'/'.$area->informacion_general;
         $rutaVidGen = public_path().'/'.$area->video_general;
         $rutaImgGen = public_path().'/'.$area->imagen_general;
         $rutas = array($rutaInfoGen, $rutaVidGen, $rutaImgGen);
         \File::delete($rutas);
         $area->delete();
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
