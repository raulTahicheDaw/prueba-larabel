<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Nota;
use Illuminate\Http\Request;
use Mockery\Matcher\Not;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.nuevo-estudiante');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'dni' => 'required|string|max:10|unique:students',
            'nombre' => 'required|string|max:20',
            'apellido1' => 'max:20',
            'apellido2' => 'max:20',
            'f_nacimiento' => 'required|date',
            'email' => 'required|string|email|max:255|unique:students',
        ]);

        Estudiante::create($data);

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estudiante::findOrFail($id)->delete();
        return back();
    }


    public function listado()
    {
        $estudiantes = Estudiante::withTrashed()->orderBy('nombre')->paginate(15);
        return view('estudiantes.estudiantes', compact('estudiantes'));
    }
}
