<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['sub_category_name'];

    public function category ()
    {
    	return $this->belongsTo(JobCategory::class,'cat_id','id');
    }

}
