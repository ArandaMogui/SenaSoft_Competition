<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FacPProfesionale
 *
 * @property $id
 * @property $codigo
 * @property $id_persona
 * @property $registro_medico
 * @property $id_tipo_prof
 * @property $created_at
 * @property $updated_at
 *
 * @property GenMPersona $genMPersona
 * @property GenPListaOpcione $genPListaOpcione
 * @property LabMOrdene[] $labMOrdenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FacPProfesionale extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigo', 'id_persona', 'registro_medico', 'id_tipo_prof'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genMPersona()
    {
        return $this->belongsTo(\App\Models\GenMPersona::class, 'id_persona', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genPListaOpcione()
    {
        return $this->belongsTo(\App\Models\GenPListaOpcione::class, 'id_tipo_prof', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labMOrdenes()
    {
        return $this->hasMany(\App\Models\LabMOrdene::class, 'id', 'id_profesional_ordena');
    }
    
}
