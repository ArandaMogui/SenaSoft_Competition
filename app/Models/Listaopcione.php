<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Listaopcione
 *
 * @property $id
 * @property $variable
 * @property $descripcion
 * @property $valor
 * @property $nombre
 * @property $abreviacion
 * @property $habilita
 * @property $created_at
 * @property $updated_at
 *
 * @property Nivele[] $niveles
 * @property Persona[] $personas
 * @property Persona[] $personas
 * @property Profesionale[] $profesionales
 * @property Prueba[] $pruebas
 * @property Tarjetero[] $tarjeteros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Listaopcione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['variable', 'descripcion', 'valor', 'nombre', 'abreviacion', 'habilita'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function niveles()
    {
        return $this->hasMany(\App\Models\Nivele::class, 'id', 'id_regimen');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personas()
    {
        return $this->hasMany(\App\Models\Persona::class, 'id', 'id_sexobiologico');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesionales()
    {
        return $this->hasMany(\App\Models\Profesionale::class, 'id', 'id_tipo_prof');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pruebas()
    {
        return $this->hasMany(\App\Models\Prueba::class, 'id', 'id_tipo_resultado');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarjeteros()
    {
        return $this->hasMany(\App\Models\Tarjetero::class, 'id', 'id_regimen');
    }
    
}
