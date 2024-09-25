<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LabMOrdenResultado
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
 * @property LabMOrdene $labMOrdene
 * @property LabPProcedimiento $labPProcedimiento
 * @property LabPPrueba $labPPrueba
 * @property LabPPruebasOpcione $labPPruebasOpcione
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class LabMOrdenResultado extends Model
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
    public function labMOrdene()
    {
        return $this->belongsTo(\App\Models\LabMOrdene::class, 'id_orden', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function labPProcedimiento()
    {
        return $this->belongsTo(\App\Models\LabPProcedimiento::class, 'id_procedimiento', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function labPPrueba()
    {
        return $this->belongsTo(\App\Models\LabPPrueba::class, 'id_prueba', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function labPPruebasOpcione()
    {
        return $this->belongsTo(\App\Models\LabPPruebasOpcione::class, 'id_pruebaopcion', 'id');
    }
    
}
