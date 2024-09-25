<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FacMTarjetero
 *
 * @property $id
 * @property $historia
 * @property $id_persona
 * @property $id_regimen
 * @property $id_eps
 * @property $id_nivel
 * @property $created_at
 * @property $updated_at
 *
 * @property GenPEp $genPEp
 * @property FacPNivele $facPNivele
 * @property GenMPersona $genMPersona
 * @property GenPListaOpcione $genPListaOpcione
 * @property LabMOrdene[] $labMOrdenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FacMTarjetero extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['historia', 'id_persona', 'id_regimen', 'id_eps', 'id_nivel'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function genPEp()
    {
        return $this->belongsTo(\App\Models\GenPEp::class, 'id_eps', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function facPNivele()
    {
        return $this->belongsTo(\App\Models\FacPNivele::class, 'id_nivel', 'id');
    }
    
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
        return $this->belongsTo(\App\Models\GenPListaOpcione::class, 'id_regimen', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labMOrdenes()
    {
        return $this->hasMany(\App\Models\LabMOrdene::class, 'id', 'id_historia');
    }
    
}
