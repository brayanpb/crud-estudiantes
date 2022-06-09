<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estudiante
 *
 * @property $id
 * @property $nombre
 * @property $documento
 * @property $correo
 * @property $celular
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estudiante extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'documento' => 'required',
		'correo' => 'required',
		'celular' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','documento','correo','celular'];



}
