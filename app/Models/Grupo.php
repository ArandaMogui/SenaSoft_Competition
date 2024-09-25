<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grupo
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $habilita
 * @property $created_at
 * @property $updated_at
 *
 * @property Procedimiento[] $procedimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grupo extends Model
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
    public function procedimientos()
    {
        return $this->hasMany(\App\Models\Procedimiento::class, 'id', 'id_grupo_laboratorio');
    }
    
}
