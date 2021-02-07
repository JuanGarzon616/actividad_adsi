<?php

namespace App\Http\Controllers;

use App\Models\Jornada;
use Illuminate\Http\Request;

class JornadaController extends Controller
{/*
    public function index()
    {
        $jornadas=Jornada::get();
        return view('Jornadas.index',compact('jornadas'));
    }

    public function create()
    {
        return view('jornadas.create');
    }

    public function store(Request $request)
    {
        $jornada=Jornada::create($request->all());
        return redirect()->route('jornadas.index')->with('status','Se ha creado la nueva jornada.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $jornada=Jornada::find($id);
        return view('jornadas.edit',compact('jornada'));
    }

    public function update(Request $request, $id)
    {
        $jornada=Jornada::find($id)->update($request->all());
        return redirect()->route('jornadas.index')->with('status1','Se han guardado los cambios.');
    }

    public function destroy($id)
    {
        $jornada=Jornada::find($id)->delete();
        //'.$jornada->nombre.'
        return redirect()->route('jornadas.index')->with('status2','Se ha borrado el registro.');
    }
    public function __invoke($id){
        $jornada=Jornada::find($id);
        return view('jornadas.delete',compact('jornada'));
    }*/
    /*
    public function borrar($id){
        //return view('Jornadas.delete');
        $jornada=Jornada::find($id);
        return view('jornadas.delete',compact('jornada'));
    }*/
}
