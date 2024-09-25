<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LabMOrdene
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
 * @property GenPDocumento $genPDocumento
 * @property FacMTarjetero $facMTarjetero
 * @property FacPProfesionale $facPProfesionale
 * @property LabMOrdenResultado[] $labMOrdenResultados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LabMOrdene extends Model
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
    public function genPDocumento()
    {
        return $this->belongsTo(\App\Models\GenPDocumento::class, 'id_documento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facMTarjetero()
    {
        return $this->belongsTo(\App\Models\FacMTarjetero::class, 'id_historia', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facPProfesionale()
    {
        return $this->belongsTo(\App\Models\FacPProfesionale::class, 'id_profesional_ordena', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labMOrdenResultados()
    {
        return $this->hasMany(\App\Models\LabMOrdenResultado::class, 'id', 'id_orden');
    }
    
}
