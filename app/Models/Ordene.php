<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ordene
 *
 * @property $id
 * @property $id_documento
 * @property $id_profesional_ordena
 * @property $orden
 * @property $fecha
 * @property $id_historia
 * @property $profesional_externo
 * @property $created_at
 * @property $updated_at
 *
 * @property Documento $documento
 * @property Tarjetero $tarjetero
 * @property Profesionale $profesionale
 * @property Resultado[] $resultados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ordene extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_documento', 'id_profesional_ordena', 'orden', 'fecha', 'id_historia', 'profesional_externo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function documento()
    {
        return $this->belongsTo(\App\Models\Documento::class, 'id_documento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tarjetero()
    {
        return $this->belongsTo(\App\Models\Tarjetero::class, 'id_historia', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profesionale()
    {
        return $this->belongsTo(\App\Models\Profesionale::class, 'id_profesional_ordena', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resultados()
    {
        return $this->hasMany(\App\Models\Resultado::class, 'id', 'id_orden');
    }
    
}
