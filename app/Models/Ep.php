<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ep
 *
 * @property $id
 * @property $codigo
 * @property $razonsocial
 * @property $nit
 * @property $habilita
 * @property $created_at
 * @property $updated_at
 *
 * @property Nivele[] $niveles
 * @property Tarjetero[] $tarjeteros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Ep extends Model
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
    public function niveles()
    {
        return $this->hasMany(\App\Models\Nivele::class, 'id', 'id_eps');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarjeteros()
    {
        return $this->hasMany(\App\Models\Tarjetero::class, 'id', 'id_eps');
    }
    
}
