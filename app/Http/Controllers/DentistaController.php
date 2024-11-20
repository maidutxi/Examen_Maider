<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Dentista;
use Illuminate\Http\Request;

class DentistaController extends Controller
{
    public function index(){
        $dentistas=Dentista::all();
        return view('dentistas.index', compact('dentistas'));
    }

    public function edit($id){
        $dentistas = Dentista::find($id);
        $clientes=Cliente::all();
        return view('dentistas.edit', compact('clientes', 'dentistas'));
    }

    public function create(){
        return view('dentistas.create');
    }

    public function store(Request $request){
       
        $validated=$request->validate([ 
            'nombre'=>'required ',
            'apellido'=>'required ',
            //'dni'=> 'required| numeric|unique:dentistas | max:8', 
        ]);
 
       
        
        $dentista=new Dentista();
        $dentista->nombre=$request->nombre;
        $dentista->apellido=$request->apellido;
        $dentista->dni=$request->dni;
        $dentista->fecha_nacimiento=$request->fecha_nacimiento;
        $dentista->en_vacaciones=$request->en_vacaciones;
        $dentista->save();

        

        return redirect('/dentistas/index');
        
    }

    public function delete($id){
        
        $dentista = Dentista::find($id);
        $dentista->delete();
        
        return redirect('/dentistas/index');
    }

    public function update(Request $request, $id){
        
        $dentista = Dentista::find($id);
        $dentista->nombre = $request->nombre;
        $dentista->apellido = $request->apellido;
        $dentista->dni = $request->dni;
        $dentista->fecha_nacimiento = $request->fecha_nacimiento;
        $dentista->en_vacaciones = $request->en_vacaciones;
        $dentista->save();

        return redirect('/dentistas/index'); 
    }
}
