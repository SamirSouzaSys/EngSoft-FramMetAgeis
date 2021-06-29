<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelMunicipio extends Model
{
    use HasFactory;

    protected $table='municipio';
    protected $primaryKey = 'COD_MUNICIPIO';


    public function relUnidadeFederativa(){
        return $this->hasOne('App\Models\ModelUnidadeFederativa','SGL_UNIDADE_FEDERATIVA', 'SGL_UNIDADE_FEDERATIVA');
        // otherClass / foreignKey / LocalKey
    }

    public function getRouteKeyName()
    {
    //    return $this->primaryKey;
       return 'COD_MUNICIPIO';
    }
}
