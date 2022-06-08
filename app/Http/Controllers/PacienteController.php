<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use Illuminate\Support\Facades\Session;

class PacienteController extends Controller{

  public function index() {
    if ($pacientes=Paciente::paginate(5)){
  	 return view('paciente.index', ['pacientes' =>$pacientes]); 
    }
    return view('paciente.index',['pacientes'=>['No hay pacientes aún']]);
  } 

  public function show($id) {
    $paciente = Paciente::findOrFail($id);

    if($paciente == null){
      return response()->view('errors.404',[],404);
    }

    return view('paciente.show',['paciente'=>$paciente]);
  }

  public function create() {
    return view('paciente.create');
  }

  public function store(Request $request) {

    $paciente = new Paciente;

    $resquest = request()->validate([
      'orden'=>'required',
      'tipo_documento'=>'required',
      'documento'=>'required',
      'nombre'=>'required',
      'edad'=>'required',
      'sexo'=>'required',
      'tipo_sangre'=>'required',
      'programa'=>'required',
      'regimen'=>'required',
      'ips'=>'required',
      'basica'=>'required',
      'profesion'=>'required',
      'direccion'=>'required',
      'email'=>['required','email','unique:pacientes,email'],
      'tel_celular'=>'required',
      'tel_fijo'=>'required',
      'condicion'=>'required',
      'departamento_residencia'=>'required',
      'municipio_residencia'=>'required',
      'contacto_familiar'=>'required',
      'peso'=>'required',
      'perimetro_abdominal'=>'required',
    ],[
      'orden.required'=>'* El campo orden es obligatorio',
      'email.required'=>'* El campo Email es obligatorio',
      'tipo_documento.required'=>'* Debe seleccionar el tipo de documento',
      'documento.required'=>'* El # de documento es obligatorio',
      'nombre.required'=>'* El campo nombre es obligatorio',
      'edad.required'=>'* El campo edad es obligatorio',
      'sexo.required'=>'* Debe seleccionar el sexo',
      'tipo_sangre.required'=>'* Debe seleccionar el tipo de sangre',
      'programa.required'=>'* El campo programa es obligatorio',
      'regimen.required'=>'* El campo regimen es obligatorio',
      'ips.required'=>'* El campo ips es obligatorio',
      'basica.required'=>'* El campo basica es obligatorio',
      'profesion.required'=>'* El campo profesion es obligatorio',
      'direccion.required'=>'* El campo direccion es obligatorio',
      'tel_celular.required'=>'* El campo telefono celular es obligatorio',
      'tel_fijo.required'=>'* El campo telefono fijo es obligatorio',
      'condicion.required'=>'* Debe seleccionar la condicion del paciente',
      'departamento_residencia.required'=>'* El campo departamento de residencia es obligatorio',
      'municipio_residencia.required'=>'* El campo municipio de residencia es obligatorio',
      'contacto_familiar.required'=>'* El campo contacto familiar es obligatorio',
      'peso.required'=>'* El campo peso es obligatorio',
      'perimetro_abdominal.required'=>'* El campo perimetro abdominal es obligatorio',
    ]);

    $paciente->orden=$request->orden;
    $paciente->tipo_documento=$request->tipo_documento;
    $paciente->documento=$request->documento;
    $paciente->nombre=$request->nombre;
    $paciente->edad=$request->edad;
    $paciente->sexo=$request->sexo;
    $paciente->tipo_sangre=$request->tipo_sangre;
    $paciente->fecha_nacimiento=$request->fecha_nacimiento;
    $paciente->programa=$request->programa;
    $paciente->regimen=$request->regimen;
    $paciente->ips=$request->ips;
    $paciente->basica=$request->basica;
    $paciente->profesion=$request->profesion;
    $paciente->direccion=$request->direccion;
    $paciente->email=$request->email;
    $paciente->tel_celular=$request->tel_celular;
    $paciente->tel_fijo=$request->tel_fijo;
    $paciente->condicion=$request->condicion;
    $paciente->departamento_residencia=$request->departamento_residencia;
    $paciente->municipio_residencia=$request->municipio_residencia;
    $paciente->contacto_familiar=$request->contacto_familiar;
    $paciente->patologia=$request->patologia;
    $paciente->antecedentes_familiares=$request->antecedentes_familiares;
    $paciente->peso=$request->peso;
    $paciente->perimetro_abdominal=$request->perimetro_abdominal;
    $paciente->ruta=$request->ruta;
    
    if($paciente->save()){
      return redirect()->route('pacientes.index');
    }
  }

  public function edit($id) {

    $paciente = Paciente::findOrFail($id);

    if($paciente == null){
      return response()->view('errors.404',[],404);
    }
    return view('paciente.update',['paciente'=>$paciente]);
  }

  public function update(Request $request, $id){
    
    $paciente = Paciente::findOrFail($id);

       
    $paciente->orden=$request->orden;
    $paciente->tipo_documento=$request->tipo_documento;
    $paciente->documento=$request->documento;
    $paciente->nombre=$request->nombre;
    $paciente->edad=$request->edad;
    $paciente->sexo=$request->sexo;
    $paciente->tipo_sangre=$request->tipo_sangre;
    $paciente->fecha_nacimiento=$request->fecha_nacimiento;
    $paciente->programa=$request->programa;
    $paciente->regimen=$request->regimen;
    $paciente->ips=$request->ips;
    $paciente->basica=$request->basica;
    $paciente->profesion=$request->profesion;
    $paciente->direccion=$request->direccion;
    $paciente->email=$request->email;
    $paciente->tel_celular=$request->tel_celular;
    $paciente->tel_fijo=$request->tel_fijo;
    $paciente->condicion=$request->condicion;
    $paciente->departamento_residencia=$request->departamento_residencia;
    $paciente->municipio_residencia=$request->municipio_residencia;
    $paciente->contacto_familiar=$request->contacto_familiar;
    $paciente->patologia=$request->patologia;
    $paciente->antecedentes_familiares=$request->antecedentes_familiares;
    $paciente->peso=$request->peso;
    $paciente->perimetro_abdominal=$request->perimetro_abdominal;
    $paciente->ruta=$request->ruta;

    if($paciente->save()){
      return redirect()->route('pacientes.show',['paciente'=>$paciente->id]);
    }
  }

  public function destroy($id){
    $paciente = Paciente::findOrFail($id);


    if($paciente->delete()){
      Session::flash('message','El registro fué eliminado');

      return redirect()->route('pacientes.index');
    }
  }

}
