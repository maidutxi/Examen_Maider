<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Dentista;

class ClientesController extends Controller
{
    public function index(){
        $clientes=Cliente::all();
        $dentistas=Dentista::all();
        //$dentistas=$clientes->dentista; //no coge bien la funcion del controller por eso no funciona y he puesto todos
        return view('clientes.index', compact('clientes', 'dentistas'));
    }

    public function create(){
        $dentistas=Dentista::all();
        return view('clientes.create', compact('dentistas'));
    }

    public function store(Request $request){
       
        $validated=$request->validate([ 
            'nombre'=>'required ',
            'apellido'=>'required ',
            //'dni'=> 'required| numeric|unique:clientes | max:8', 
        ]);
 
       
        
        $cliente=new Cliente();
        $cliente->nombre=$request->nombre;
        $cliente->apellido=$request->apellido;
        $cliente->dni=$request->dni;
        $cliente->dentista_id=$request->dentista_id;
        $cliente->fecha_nacimiento=$request->fecha_nacimiento;
        $cliente->save();

        

        return redirect('/clientes/index');
        
    }

    public function update(Request $request, $id){
        
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->dni = $request->dni;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->en_vacaciones = $request->en_vacaciones;
        $cliente->save();

        return redirect('/clientes/index'); 
    }
}
