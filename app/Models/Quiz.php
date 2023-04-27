<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Quiz
 *
 * @property $id
 * @property $pregunta
 * @property $respuesta
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Quiz extends Model
{
    
    static $rules = [
		'pregunta' => 'required',
		'respuesta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pregunta','respuesta'];



}
