<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetail extends Model
{
    use HasFactory;
    protected $primaryKey = 'userId';
    protected $casts = [
        'friends'=>'array',
        'follow'=>'array'
    ];
}
