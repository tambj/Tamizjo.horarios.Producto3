<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Clase
 *
 * @property $id
 * @property $id_teacher
 * @property $id_course
 * @property $id_schedule
 * @property $name
 * @property $color
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Clase extends Model
{
    
    static $rules = [
		'id_teacher' => 'required',
		'id_course' => 'required',
		'id_schedule' => 'required',
		'name' => 'required',
		'color' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_teacher','id_course','id_schedule','name','color','created_at','updated_at'];



}
