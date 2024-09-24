<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GenMPersona
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
 * @property GenPListaOpcion $genPListaOpcion
 * @property GenPListaOpcion $genPListaOpcion
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GenMPersona extends Model
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
    public function genPListaOpcion()
    {
        return $this->belongsTo(\App\Models\GenPListaOpcion::class, 'id_sexobiologico', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genPListaOpcion()
    {
        return $this->belongsTo(\App\Models\GenPListaOpcion::class, 'id_tipoid', 'id');
    }
    
}
