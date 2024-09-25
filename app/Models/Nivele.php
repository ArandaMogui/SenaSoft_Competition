<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nivele
 *
 * @property $id
 * @property $nivel
 * @property $nombre
 * @property $id_eps
 * @property $id_regimen
 * @property $created_at
 * @property $updated_at
 *
 * @property Ep $ep
 * @property Listaopcione $listaopcione
 * @property Tarjetero[] $tarjeteros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nivele extends Model
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
    public function ep()
    {
        return $this->belongsTo(\App\Models\Ep::class, 'id_eps', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function listaopcione()
    {
        return $this->belongsTo(\App\Models\Listaopcione::class, 'id_regimen', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tarjeteros()
    {
        return $this->hasMany(\App\Models\Tarjetero::class, 'id', 'id_nivel');
    }
    
}
