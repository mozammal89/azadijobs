<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['employees'];

    public function empDepartment ()
    {
    	return $this->belongsTo(Department::class,'employee_department','id');
    }

    public function empDesignation ()
    {
    	return $this->belongsTo(Designation::class,'employee_designation','id');
    }
}
