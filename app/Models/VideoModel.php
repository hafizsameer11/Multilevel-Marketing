<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoModel extends Model
{
    use HasFactory;
    public function videoWorkDone()
    {
        return $this->hasMany(VideoWorkDone::class);

    }
    public function earnings()
    {
        return $this->hasMany(UserEarning::class);
    }
}
