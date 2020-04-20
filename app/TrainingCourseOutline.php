<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingCourseOutline extends Model
{
    protected $fillable = ['training_course_outlines'];

    public function courseOutline ()
    {
    	return $this->belongsTo(Training::class,'training_id','id');
    }
}
