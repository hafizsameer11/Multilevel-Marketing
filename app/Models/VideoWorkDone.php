<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoWorkDone extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the video model associated with the video work.
     */
    public function videoModel()
    {
        return $this->belongsTo(VideoModel::class, 'videdo_id', 'id');
    }
}
