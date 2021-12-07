<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCursoRequest;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    
    public function index()
    {
        $curso = Curso::latest()->paginate();

        return view("cursos.index", compact("curso"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cursos.create", [
            'curso' => new Curso
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCursoRequest $request)
    {
    
      Curso::create($request->validated());

      return redirect()->route('cursos.index')->with('succes', "Curso creado con exito!");     
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
         return view("cursos.show", [
        'curso' => $curso
     ]);
    }

    
    public function edit(Curso $curso)
    {
        return view ('cursos.edit', [
            'curso' => $curso
        ]);
    }

   
    public function update(Curso $curso, SaveCursoRequest $request)
    {
        $curso->update($request->validated());

        return redirect()->route('cursos.show', $curso)->with("succes", "Curso Actualizado");
    }

   
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index')->with("succes", "Curso eliminado");  
        
    }

}
