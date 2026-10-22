<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $guarded = [];

    public function upcoming_event()
    {
        return $this->belongsTo(Upcoming_event::class, 'upcoming_events_id');
    }
}
