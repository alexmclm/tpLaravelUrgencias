<?php

namespace App;

use App\Cliente;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
	//
	protected $table = "cliente";
	public $timestamps = false;
}
