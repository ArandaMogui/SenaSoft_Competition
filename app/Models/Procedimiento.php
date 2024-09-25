<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Procedimiento
 *
 * @property $id
 * @property $id_cups
 * @property $id_grupo_laboratorio
 * @property $metodo
 * @property $created_at
 * @property $updated_at
 *
 * @property Cup $cup
 * @property Grupo $grupo
 * @property Prueba[] $pruebas
 * @property Resultado[] $resultados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Procedimiento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_cups', 'id_grupo_laboratorio', 'metodo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cup()
    {
        return $this->belongsTo(\App\Models\Cup::class, 'id_cups', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grupo()
    {
        return $this->belongsTo(\App\Models\Grupo::class, 'id_grupo_laboratorio', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pruebas()
    {
        return $this->hasMany(\App\Models\Prueba::class, 'id', 'id_procedimiento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados()
    {
        return $this->hasMany(\App\Models\Resultado::class, 'id', 'id_procedimiento');
    }
    
}
