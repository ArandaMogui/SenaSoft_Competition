<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Resultado
 *
 * @property $id
 * @property $fecha
 * @property $id_orden
 * @property $id_prueba
 * @property $id_procedimiento
 * @property $id_pruebaopcion
 * @property $res_opcion
 * @property $res_numerico
 * @property $res_texto
 * @property $res_memo
 * @property $num_procesamientos
 * @property $created_at
 * @property $updated_at
 *
 * @property Ordene $ordene
 * @property Procedimiento $procedimiento
 * @property Prueba $prueba
 * @property Pruebasopcione $pruebasopcione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resultado extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['fecha', 'id_orden', 'id_prueba', 'id_procedimiento', 'id_pruebaopcion', 'res_opcion', 'res_numerico', 'res_texto', 'res_memo', 'num_procesamientos'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ordene()
    {
        return $this->belongsTo(\App\Models\Ordene::class, 'id_orden', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function procedimiento()
    {
        return $this->belongsTo(\App\Models\Procedimiento::class, 'id_procedimiento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prueba()
    {
        return $this->belongsTo(\App\Models\Prueba::class, 'id_prueba', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pruebasopcione()
    {
        return $this->belongsTo(\App\Models\Pruebasopcione::class, 'id_pruebaopcion', 'id');
    }
    
}
