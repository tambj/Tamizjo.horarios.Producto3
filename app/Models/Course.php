<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Course
 *
 * @property $id
 * @property $name
 * @property $description
 * @property $date_start
 * @property $date_end
 * @property $updated_at
 * @property $created_at
 * @property $active
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Course extends Model
{
    
    static $rules = [
		'name' => 'required',
		'description' => 'required',
		'date_start' => 'required',
		'date_end' => 'required',
		'updated_at' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','date_start','date_end','updated_at','created_at','active'];



}
