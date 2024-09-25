<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tarjetero
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
 * @property Ep $ep
 * @property Nivele $nivele
 * @property Persona $persona
 * @property Listaopcione $listaopcione
 * @property Ordene[] $ordenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tarjetero extends Model
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
    public function ep()
    {
        return $this->belongsTo(\App\Models\Ep::class, 'id_eps', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nivele()
    {
        return $this->belongsTo(\App\Models\Nivele::class, 'id_nivel', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function persona()
    {
        return $this->belongsTo(\App\Models\Persona::class, 'id_persona', 'id');
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
    public function ordenes()
    {
        return $this->hasMany(\App\Models\Ordene::class, 'id', 'id_historia');
    }
    
}
