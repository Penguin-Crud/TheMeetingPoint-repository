<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\Helpers\Helpers;

class Events extends Model
{
    use HasFactory;
    protected $casts = [
        'mi_fecha' => 'datetime:Y-m-d',
        'mi_hora' => 'datetime:H:i:s'
        ];

    protected $fillable = [
        'title',
        'image',
        'user_id',
        'url',
        'showSlider',
        'date',
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

    public static function highlightedEvents()
    {
        return self::where('showSlider', true)->get();
    }

    public function students()
    {
        return $this->belongsToMany(User::class, 'students')->withTimestamps();
    }

    public function addStudent($userId): bool
    {
        $user = User::find($userId);
        if($user->isSubscribed($this) || $this->isFull() ) return false;

        $this->students()->attach($user);
        return true;
    }

    public function removeStudent($userId)
    {
        $user = User::find($userId);
        $this->students()->detach($user);
    }

    /*
        public function wantsToApply()
        {
            return $this->belongsToMany(User::class, 'students');
        }
    */

    public function countStudents()
    {
        return $this->students()->count();
    }

    public function isFull(): bool
    {
        return $this->countStudents() >= $this->people;
    }

    public function setUserTime(){
        $this->date = Carbon::parse($this->date)->setTimezone(Helpers::getUserTimeZone());
    }

    public function isEventExpired(){
        $today = Carbon::now();
        if ($this->date <= $today ) return true;
        return false;
    }

    public static function getOnTimeEvents(){
        $today = Carbon::now();
        return self::where('date','>', $today)->orderBy('date', 'asc')->get();
    }

    public static function getTimeOutedEvents(){
        $today = Carbon::now();
        return self::where('date','<=', $today)->orderBy('date', 'asc')->get();
    }
}
