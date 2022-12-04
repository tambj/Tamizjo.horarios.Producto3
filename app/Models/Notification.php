<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Notification
 *
 * @property $id
 * @property $id_student
 * @property $work
 * @property $exam
 * @property $continuous_assessment
 * @property $final_note
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Notification extends Model
{
    
    static $rules = [
		'id_student' => 'required',
		'work' => 'required',
		'exam' => 'required',
		'continuous_assessment' => 'required',
		'final_note' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_student','work','exam','continuous_assessment','final_note','created_at','updated_at'];



}
