<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{

    public function index()
    {
        $fichas=Ficha::get();

        return view('fichas.index',compact('fichas'));

        //return view('fichas.index',compact('fichas'));
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
