<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function index(){
        // $personas =[
        //     ['titulo'=>'Persona 1'],
        //     ['titulo'=>'Persona 2'],
        //     ['titulo'=>'Persona 3']
        // ];
        //$personas =DB::table('persona')->get();
        //$personas =Persona::latest()->paginate(2);
        $personas =Persona::orderBy('cPerNombre', 'asc')->simplePaginate(2);
        

        return view('personas', compact('personas'));
    }

    public function show($id){        

        return view('show',[
            'persona' =>  Persona::find($id)
        ]);
       
    }
}
