<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NivelUrgenciaController extends Controller {
	public function darAlta(Request $request) {
		$altaNivel = new NivelUrgencia();
		//despues del -> va el nombre del campo de la tabla de la BBDD al cual corresponda
		//como esto del nivel de urgencia, voy a la tabla nivelurgencia y digo cual campo corresponde
		$altaNivel->color = $request->color;
		$altaNivel->tipoUrgencia = $request->tipoUrgencia;
		$altaNivel->tiempoMaximoEspera = $request->tiempoMaximoEspera;
		$altaNivel->save();
		return $altaNivel;
	}
	public function update(Request $request, $id) {
		//primero busco al cliente
		$altaUpdate = NivelUrgencia::find($id);
		$altaUpdate->color = $request->color;
		$altaUpdate->tipoUrgencia = $request->tipoUrgencia;
		$altaUpdate->tiempoMaximoEspera = $request->tipoUrgencia;
		$altaUpdate->save();
		return $altaUpdate;
	}
	//esto debe ser borrado logicamente
	public function delete($id) {
		$altaDelete = NivelUrgencia::find($id);
		$altaNivel->delete();
	}
	//creo que cuando se habla de listar los tipos de urgencias, no deberia mostrar al cual corresponde ....
	public function listar() {
		return NivelUrgencia::all();
	}
	/*
		public function verUno($id){
			$altaView = Posteo::find($id);
			$altaView->load("estadoDeAnimo");
			return $altaView;
		}
	*/
	public function traerUno($id) {
		return NivelUrgencia::find($id);

	}
}
