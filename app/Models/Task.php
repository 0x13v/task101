<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    public function Job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'id');
    }

    public function project()
    {
        return $this->hasOneThrough(Project::class, Job::class);
    }
}
