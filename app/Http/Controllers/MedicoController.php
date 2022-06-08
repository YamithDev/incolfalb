<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\User;

class MedicoController extends Controller
{
  public function index() {
  	if ($medicos=User::paginate(5)){
     return view('medico.index', ['medicos' =>$medicos]); 
    }
    return view('medico.index',['medicos'=>['No hay medicos aún']]);
  } 

  public function show(Request $request) {
    
  }

  public function create() {

  }

  public function store(Request $request) {
    
  }

  public function edit(Request $request) {
    
  }

  public function update(Request $request) {
    
  }

  public function destroy(Request $request) {
    
  }
}
