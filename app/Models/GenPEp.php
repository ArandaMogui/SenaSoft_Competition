<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GenPEp
 *
 * @property $id
 * @property $codigo
 * @property $razonsocial
 * @property $nit
 * @property $habilita
 * @property $created_at
 * @property $updated_at
 *
 * @property FacMTarjetero[] $facMTarjeteros
 * @property FacPNivele[] $facPNiveles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GenPEp extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigo', 'razonsocial', 'nit', 'habilita'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facMTarjeteros()
    {
        return $this->hasMany(\App\Models\FacMTarjetero::class, 'id', 'id_eps');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facPNiveles()
    {
        return $this->hasMany(\App\Models\FacPNivele::class, 'id', 'id_eps');
    }
    
}
