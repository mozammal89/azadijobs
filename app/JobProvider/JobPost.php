<?php

namespace App\JobProvider;
use App\JobCategory;
use App\SubCategory;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    protected $table = 'job_provider_job_post';

    public function category2()
    {
    	return $this->belongsTo(JobCategory::class,'category','id');
    }

    public function subcategory()
    {
    	return $this->belongsTo(SubCategory::class,'sub_category','id');
    }

}
