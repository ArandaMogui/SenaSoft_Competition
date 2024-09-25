<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pruebasopcione
 *
 * @property $id
 * @property $id_prueba
 * @property $opcion
 * @property $valor_ref_min_f
 * @property $valor_ref_max_f
 * @property $valor_ref_min_m
 * @property $valor_ref_max_m
 * @property $created_at
 * @property $updated_at
 *
 * @property Prueba $prueba
 * @property Resultado[] $resultados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pruebasopcione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_prueba', 'opcion', 'valor_ref_min_f', 'valor_ref_max_f', 'valor_ref_min_m', 'valor_ref_max_m'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prueba()
    {
        return $this->belongsTo(\App\Models\Prueba::class, 'id_prueba', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados()
    {
        return $this->hasMany(\App\Models\Resultado::class, 'id', 'id_pruebaopcion');
    }
    
}
