<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'tweets';

    protected $fillable = [
        'id_str',
        'text',
        'user_id_str',
        'user_screen_name',
        'retweet_count',
        'favorite_count',

    ];

}
