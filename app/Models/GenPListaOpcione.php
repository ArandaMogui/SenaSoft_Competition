<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GenPListaOpcione
 *
 * @property $id
 * @property $variable
 * @property $descripcion
 * @property $valor
 * @property $nombre
 * @property $abreviacion
 * @property $habilita
 * @property $created_at
 * @property $updated_at
 *
 * @property FacMTarjetero[] $facMTarjeteros
 * @property FacPNivele[] $facPNiveles
 * @property FacPProfesionale[] $facPProfesionales
 * @property GenMPersona[] $genMPersonas
 * @property GenMPersona[] $genMPersonas
 * @property LabPPrueba[] $labPPruebas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class GenPListaOpcione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['variable', 'descripcion', 'valor', 'nombre', 'abreviacion', 'habilita'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facMTarjeteros()
    {
        return $this->hasMany(\App\Models\FacMTarjetero::class, 'id', 'id_regimen');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facPNiveles()
    {
        return $this->hasMany(\App\Models\FacPNivele::class, 'id', 'id_regimen');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facPProfesionales()
    {
        return $this->hasMany(\App\Models\FacPProfesionale::class, 'id', 'id_tipo_prof');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function genMPersonas()
    {
        return $this->hasMany(\App\Models\GenMPersona::class, 'id', 'id_sexobiologico');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function genMPersonas()
    {
        return $this->hasMany(\App\Models\GenMPersona::class, 'id', 'id_tipoid');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labPPruebas()
    {
        return $this->hasMany(\App\Models\LabPPrueba::class, 'id', 'id_tipo_resultado');
    }
    
}
