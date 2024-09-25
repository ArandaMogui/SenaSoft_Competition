<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LabPProcedimiento
 *
 * @property $id
 * @property $id_cups
 * @property $id_grupo_laboratorio
 * @property $metodo
 * @property $created_at
 * @property $updated_at
 *
 * @property FacPCup $facPCup
 * @property LabPGrupo $labPGrupo
 * @property LabMOrdenResultado[] $labMOrdenResultados
 * @property LabPPrueba[] $labPPruebas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LabPProcedimiento extends Model
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
    public function facPCup()
    {
        return $this->belongsTo(\App\Models\FacPCup::class, 'id_cups', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function labPGrupo()
    {
        return $this->belongsTo(\App\Models\LabPGrupo::class, 'id_grupo_laboratorio', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labMOrdenResultados()
    {
        return $this->hasMany(\App\Models\LabMOrdenResultado::class, 'id', 'id_procedimiento');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labPPruebas()
    {
        return $this->hasMany(\App\Models\LabPPrueba::class, 'id', 'id_procedimiento');
    }
    
}
