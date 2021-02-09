<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FichaController extends Controller
{

    public function index()
    {
        //$fichas=Ficha::select();
        //$fichas=Ficha::with(['jornada','programaformacione']);

        $fichas=Ficha::with('jornadas','programaFormacion')
            ->join('jornadas','fichas.id','=','jornadas.id')
            ->join('programa_formaciones','fichas.id','=','programa_formaciones.id')
            ->get('fichas.*');
        /*
        $fichas=DB::table('fichas')
            ->Join('jornadas','fichas.id','=','jornadas.id')
            ->join('programa_formaciones','fichas.id','=','programa_formaciones.id')
            ->select('fichas.*','jornadas.nombre as nombrej','programa_formaciones.nombre')
            ->get();*/
        return view('fichas.index',compact('fichas'));
    }

    public function create()
    {
        return view('fichas.create');
    }

    public function store(Request $request)
    {
        $fichas=Ficha::create($request->all());
        return redirect()->route('fichas.index')->with('status','Se ha creado la nueva ficha.');
    }

    public function edit($id)
    {
        $fichas=Ficha::find($id);
        return view('ficha.edit',compact('fichas'));
    }

    public function update(Request $request, $id)
    {
        $fichas=Ficha::find($id)->update($request->all());
        return redirect()->route('ficha.index')->with('status1','Se han guardado los cambios.');
    }

    public function show($id)
    {

    }

}
