<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GenPDocumento
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $habilita
 * @property $created_at
 * @property $updated_at
 *
 * @property LabMOrdene[] $labMOrdenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GenPDocumento extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigo', 'nombre', 'habilita'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labMOrdenes()
    {
        return $this->hasMany(\App\Models\LabMOrdene::class, 'id', 'id_documento');
    }
    
}
