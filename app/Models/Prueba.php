<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prueba
 *
 * @property $id
 * @property $id_procedimiento
 * @property $id_tipo_resultado
 * @property $codigo_prueba
 * @property $nombre_prueba
 * @property $unidad
 * @property $habilita
 * @property $created_at
 * @property $updated_at
 *
 * @property Procedimiento $procedimiento
 * @property Listaopcione $listaopcione
 * @property Pruebasopcione[] $pruebasopciones
 * @property Resultado[] $resultados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prueba extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_procedimiento', 'id_tipo_resultado', 'codigo_prueba', 'nombre_prueba', 'unidad', 'habilita'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function procedimiento()
    {
        return $this->belongsTo(\App\Models\Procedimiento::class, 'id_procedimiento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listaopcione()
    {
        return $this->belongsTo(\App\Models\Listaopcione::class, 'id_tipo_resultado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pruebasopciones()
    {
        return $this->hasMany(\App\Models\Pruebasopcione::class, 'id', 'id_prueba');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados()
    {
        return $this->hasMany(\App\Models\Resultado::class, 'id', 'id_prueba');
    }
    
}
