<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Documento
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $habilita
 * @property $created_at
 * @property $updated_at
 *
 * @property Ordene[] $ordenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Documento extends Model
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
    public function ordenes()
    {
        return $this->hasMany(\App\Models\Ordene::class, 'id', 'id_documento');
    }
    
}
