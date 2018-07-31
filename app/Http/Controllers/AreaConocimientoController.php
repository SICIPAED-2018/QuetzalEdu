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
        $area = new Area($request->all());
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
