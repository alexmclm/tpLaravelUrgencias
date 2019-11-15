<?php

namespace App;

use App\Cliente;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
	//
	protected $table = "cliente";
	public $timestamps = false;
	public function estadoDeanimo() {
		//con sintaxis particular
		//cuando solo tengo solo un posteo-unEstadoDeAnimo .. y la foreign key de la BBDD
		return $this->belongsTo("App\NivelUrgencia", "estadoAnimo_id");
	}

}
