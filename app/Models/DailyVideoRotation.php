<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyVideoRotation extends Model
{
    use HasFactory;
    protected $fillable = [
        'plan_id',
        'rotation_date',
        'last_video_id',
        'start_video_id'
    ];

    // Define relationships
    public function plan()
    {
        return $this->belongsTo(plans::class);
    }

}
