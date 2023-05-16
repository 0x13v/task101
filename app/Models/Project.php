<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }


    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }

    public function tasks()
    {
        return $this->hasManyThrough(Task::class, Job::class);
    }
}
