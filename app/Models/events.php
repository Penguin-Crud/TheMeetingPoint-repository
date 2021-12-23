<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'user_id',
        'url',
        'description',
        'people',
        'data',
        'time',

    ];

    public function Author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
   
}
