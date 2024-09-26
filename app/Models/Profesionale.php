<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesionale
 *
 * @property $id
 * @property $codigo
 * @property $id_persona
 * @property $registro_medico
 * @property $id_tipo_prof
 * @property $created_at
 * @property $updated_at
 *
 * @property Persona $persona
 * @property Listaopcione $listaopcione
 * @property Ordene[] $ordenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Profesionale extends Model
{
    
    protected $perPage = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigo', 'id_persona', 'registro_medico', 'id_tipo_prof'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persona()
    {
        return $this->belongsTo(\App\Models\Persona::class, 'id_persona', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listaopcione()
    {
        return $this->belongsTo(\App\Models\Listaopcione::class, 'id_tipo_prof', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordenes()
    {
        return $this->hasMany(\App\Models\Ordene::class, 'id', 'id_profesional_ordena');
    }
    
}
