<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramaFormacione;

class ProgramaFormacionController extends Controller
{
    public function index()
    {
        $programas=ProgramaFormacione::get();
        return view('programaformaciones.index',compact('programas'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
