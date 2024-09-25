<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FacPNivele
 *
 * @property $id
 * @property $nivel
 * @property $nombre
 * @property $id_eps
 * @property $id_regimen
 * @property $created_at
 * @property $updated_at
 *
 * @property GenPEp $genPEp
 * @property GenPListaOpcione $genPListaOpcione
 * @property FacMTarjetero[] $facMTarjeteros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class FacPNivele extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nivel', 'nombre', 'id_eps', 'id_regimen'];


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
    public function genPListaOpcione()
    {
        return $this->belongsTo(\App\Models\GenPListaOpcione::class, 'id_regimen', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facMTarjeteros()
    {
        return $this->hasMany(\App\Models\FacMTarjetero::class, 'id', 'id_nivel');
    }
    
}
