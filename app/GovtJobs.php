<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GovtJobs extends Model
{
    protected $fillable = ['govt_jobs'];
    
	 public function divisions()
	    {
	    	return $this->belongsTo(Division::class,'job_location','id');
	    }
    
}
