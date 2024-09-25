<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LabPGrupo
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $habilita
 * @property $created_at
 * @property $updated_at
 *
 * @property LabPProcedimiento[] $labPProcedimientos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LabPGrupo extends Model
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
    public function labPProcedimientos()
    {
        return $this->hasMany(\App\Models\LabPProcedimiento::class, 'id', 'id_grupo_laboratorio');
    }
    
}
