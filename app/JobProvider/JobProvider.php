<?php

namespace App\JobProvider;

use Illuminate\Database\Eloquent\Model;
use App\JobCategory;

class JobProvider extends Model
{
    protected $table = 'job_provider_registers';

    public function type()
    {
    	return $this->belongsTo(JobCategory::class,'com_business_type','id');
    }
}
