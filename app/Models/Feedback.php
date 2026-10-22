<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $guarded = [];

    public function past_events()
    {
        return $this->belongsTo(Past_event::class, 'past_event_id');
    }
}
