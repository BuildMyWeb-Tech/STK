<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upcoming_event extends Model
{
    protected $guarded = [];
    protected $casts = ['food_choice' => 'array'];
    public function registration()
    {
        return $this->hasMany(Registration::class, 'upcoming_events_id');
    }
}
