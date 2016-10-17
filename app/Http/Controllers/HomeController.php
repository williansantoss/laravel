<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Assinaturas;
use App\Cursos;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        if (Auth::check()){
            $user =  Auth::user();
            $assinaturas = Assinaturas::where('user_id', $user->id)
            ->join('cursos', 'assinaturas.curso_id', '=', 'cursos.id')
            ->orderBy('id','ASC')->paginate(5); 
        }
        
        return view('home',compact('assinaturas'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
        
    }
}
