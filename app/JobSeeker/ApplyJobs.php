<?php

namespace App\JobSeeker;
use App\User;

use Illuminate\Database\Eloquent\Model;

class ApplyJobs extends Model
{
    protected $table = 'apply_jobs';

	public function seeker()
    {
        return $this->belongsTo(User::class,'seeker_id','id');
    }
    
}
