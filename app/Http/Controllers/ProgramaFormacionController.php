<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramaFormacione;

class ProgramaFormacionController extends Controller
{
    public function index()
    {
        $programas=ProgramaFormacione::paginate('5');
        return view('programaformaciones.index',compact('programas'));
    }

    public function create()
    {
        return view('programaformaciones.create');
    }

    public function store(Request $request)
    {
        $programa=ProgramaFormacione::create($request->all());
        return redirect()->route('programaformaciones.index')->with('status','Se ha creado el nuevo programacion de formacion.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $programa=ProgramaFormacione::find($id);
        return view('programaformaciones.edit',compact('programa'));
    }

    public function update(Request $request, $id)
    {
        $programa=ProgramaFormacione::find($id)->update($request->all());
        return redirect()->route('programaformaciones.index')->with('status1','Se han guardado los cambios.');
    }
}
