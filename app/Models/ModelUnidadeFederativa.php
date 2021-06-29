<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelUnidadeFederativa extends Model
{
    use HasFactory;

    protected $table='unidadeFederativa';
    protected $primaryKey = 'SGL_UNIDADE_FEDERATIVA';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'SGL_UNIDADE_FEDERATIVA',
        'NOM_UNIDADE_FEDERATIVA'
    ];

    public function relMunicipios(){
        return $this->hasMany('App\Models\ModelMunicipio','SGL_UNIDADE_FEDERATIVA');
        // return $this->hasMany('App\Models\ModelMunicipio','SGL_UNIDADE_FEDERATIVA','SGL_UNIDADE_FEDERATIVA');
        // otherClass, 'foreign_key', 'local_key'
    }

    public function getRouteKeyName()
    {
    //    return $this->primaryKey;
       return 'SGL_UNIDADE_FEDERATIVA';
    }
}
