<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Usuario extends Eloquent
{
    protected $collection = 'usuario';

    protected $fillable = ['nome', 'idade', 'foto', 'lat', 'long', 'perfis'];

    public function perfils()
    {
      return $this->hasMany('App\Perfil');
    }
}
