<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests; 
use App\Cursos;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cursos = Cursos::orderBy('id','DESC')->paginate(5);
        return view('cursos.index',compact('cursos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',           
        ]);
        Cursos::create($request->all());
        return redirect()->route('cursos.index')
                        ->with('success','Cursos created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursos = Cursos::find($id);
        return view('cursos.show',compact('cursos'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursos = Cursos::find($id);
        return view('cursos.edit',compact('cursos'));
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
        $this->validate($request, [
            'nome' => 'required',           
        ]);
        Cursos::find($id)->update($request->all());
        return redirect()->route('cursos.index')
                        ->with('success','Curso updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cursos::find($id)->delete();
        return redirect()->route('cursos.index')
                        ->with('success','Curso deleted successfully');
    }
}
