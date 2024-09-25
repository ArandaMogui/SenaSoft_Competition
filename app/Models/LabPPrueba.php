<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LabPPrueba
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
 * @property LabPProcedimiento $labPProcedimiento
 * @property GenPListaOpcione $genPListaOpcione
 * @property LabMOrdenResultado[] $labMOrdenResultados
 * @property LabPPruebasOpcione[] $labPPruebasOpciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LabPPrueba extends Model
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
    public function labPProcedimiento()
    {
        return $this->belongsTo(\App\Models\LabPProcedimiento::class, 'id_procedimiento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genPListaOpcione()
    {
        return $this->belongsTo(\App\Models\GenPListaOpcione::class, 'id_tipo_resultado', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labMOrdenResultados()
    {
        return $this->hasMany(\App\Models\LabMOrdenResultado::class, 'id', 'id_prueba');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labPPruebasOpciones()
    {
        return $this->hasMany(\App\Models\LabPPruebasOpcione::class, 'id', 'id_prueba');
    }
    
}
