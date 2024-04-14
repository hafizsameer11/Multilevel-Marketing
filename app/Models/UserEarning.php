<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEarning extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);

    }
    public function video()
    {
        return $this->belongsTo(VideoModel::class);

    }
    public function aricles()
    {
        return $this->belongsTo(Articels::class);

    }

}
