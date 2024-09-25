<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Persona
 *
 * @property $id
 * @property $numeroid
 * @property $apellido1
 * @property $apellido2
 * @property $nombre1
 * @property $nombre2
 * @property $fechanac
 * @property $direccion
 * @property $tel_movil
 * @property $email
 * @property $id_tipoid
 * @property $id_sexobiologico
 * @property $created_at
 * @property $updated_at
 *
 * @property Listaopcione $listaopcione
 * @property Listaopcione $listaopcione
 * @property Profesionale[] $profesionales
 * @property Tarjetero[] $tarjeteros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['numeroid', 'apellido1', 'apellido2', 'nombre1', 'nombre2', 'fechanac', 'direccion', 'tel_movil', 'email', 'id_tipoid', 'id_sexobiologico'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listaopcione()
    {
        return $this->belongsTo(\App\Models\Listaopcione::class, 'id_sexobiologico', 'id');
    }  
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profesionales()
    {
        return $this->hasMany(\App\Models\Profesionale::class, 'id', 'id_persona');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarjeteros()
    {
        return $this->hasMany(\App\Models\Tarjetero::class, 'id', 'id_persona');
    }
    public function tipoId()
    {
        return $this->belongsTo(Listaopcione::class, 'id_tipoid');
    }
    
}
