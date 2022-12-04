<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Student
 *
 * @property $id
 * @property $username
 * @property $pass
 * @property $email
 * @property $name
 * @property $surname
 * @property $telephone
 * @property $nif
 * @property $date_registered
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Student extends Model
{
    
    static $rules = [
		'username' => 'required',
		'pass' => 'required',
		'email' => 'required',
		'name' => 'required',
		'surname' => 'required',
		'telephone' => 'required',
		'nif' => 'required',
		'date_registered' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['username','pass','email','name','surname','telephone','nif','date_registered'];



}
