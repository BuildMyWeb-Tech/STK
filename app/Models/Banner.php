<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $guarded = [];

    public function pastEvents()
    {
        return $this->belongsTo(Past_event::class, 'event_id');
    }
}
