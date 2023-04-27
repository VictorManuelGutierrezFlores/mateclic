<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestnAnsw
 *
 * @property $id
 * @property $questions
 * @property $answer
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class QuestnAnsw extends Model
{
    
    static $rules = [
		'questions' => 'required',
		'answer' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['questions','answer'];



}
