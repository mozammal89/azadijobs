<?php

namespace App\JobProvider;
use App\JobCategory;
use App\SubCategory;
use App\Division;

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

    public function divisions()
    {
    	return $this->belongsTo(Division::class,'job_location','id');
    }

}
