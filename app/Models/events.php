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
        'showSlider',
        'date',
        'time',
        'description',
        'people',
    ];

    public function Author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function toggleHighlight()
    {
        $this->showSlider = !$this->showSlider;
        $this->save();
    }

    public static function highlightedEvents(){
        return self::where('showSlider', true)->get();
    }
    
    private function students()
    {
        return $this->belongsToMany(User::class, 'students')->withTimestamps();
    }

    public function addStudent($userId)
    {
        $user = User::find($userId);
        $this->students()->attach($user);
    }

    public function removeStudent($userId)
    {
        $user = User::find($userId);
        $this->students()->detach($user);
    }
    
    public function countStudent()
    {
        $this->students()->count();
    }



}
