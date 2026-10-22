<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Past_event extends Model
{
    protected $guarded = [];

    protected $casts = [
        'gallery_images' => 'array',
        'feedback_enabled' => 'boolean',           // ✅ Cast to boolean
        'feedback_close_date' => 'datetime',       // ✅ Cast to Carbon datetime
    ];

    public function banner()
    {
        return $this->hasMany(Banner::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}
