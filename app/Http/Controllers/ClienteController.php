<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller {
	public function altaCliente(Request $request) {
		$altaCliente = new Cliente();
		$altaCliente->nombre = $request->nombre;
		$altaCliente->apellido = $request->apellido;
		$altaCliente->edad = $request->edad;
		$altaCliente->descripcionEstado = $request->descripcionEstado;
		$altaCliente->fechaIngreso = $request->fechaIngreso;
		$altaCliente->fechaEgreso = $request->fechaEgreso;
		$altaCliente->nivelUrgencia_id = $request->nivelUrgencia_id;
		$altaCliente->save();
		return $altaCliente;
	}
	public function update(Request $request,$id){
		$updateCliente = Cliente::find($id)
		$updateCliente->nombre = $request->nombre;
		$updateCliente->apellido = $request->apellido;
		$updateCliente->edad = $request->edad;
		$updateCliente->descripcionEstado = $request->descripcionEstado;
		$updateCliente->fechaIngreso = $request->fechaIngreso;
		$updateCliente->fechaEgreso = $request->fechaEgreso;
		$updateCliente->nivelUrgencia_id = $request->nivelUrgencia_id;
		$updateCliente->save();
		return $updateCliente;
	}
	//idem ...esto no es borrado logico
	public function delete($id){
		$dropCliente = Cliente::find($id);
		$dropCliente->delete();
	}
	public function listar(){
		return CLiente::with("niveles_urgencias")->get();
	}
	public function traerUno($id);
		$client = Cliente::find($id);
		$client->load()

}
