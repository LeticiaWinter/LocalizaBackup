<?php

namespace App;

use App\Usuario;
use App\Alerta;

use Illuminate\Database\Eloquent\Model;

class Geo_localizacao extends Model
{
    public function usuario(){

        return $this->belongsTo(Usuario::class);

    }

    public function alerta(){

        return $this->belongsTo(Alerta::class);
    }
}
