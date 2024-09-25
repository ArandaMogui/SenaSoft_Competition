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
 * @property GenPListaOpcione $genPListaOpcione
 * @property GenPListaOpcione $genPListaOpcione
 * @property FacMTarjetero[] $facMTarjeteros
 * @property FacPProfesionale[] $facPProfesionales
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
    public function genPListaOpcione()
    {
        return $this->belongsTo(\App\Models\GenPListaOpcione::class, 'id_sexobiologico', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genPListaOpcione()
    {
        return $this->belongsTo(\App\Models\GenPListaOpcione::class, 'id_tipoid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facMTarjeteros()
    {
        return $this->hasMany(\App\Models\FacMTarjetero::class, 'id', 'id_persona');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facPProfesionales()
    {
        return $this->hasMany(\App\Models\FacPProfesionale::class, 'id', 'id_persona');
    }
    
}
