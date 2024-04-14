<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserMeta extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function plan()
    {
        return $this->belongsTo(plans::class, 'plan_id');
    }
}
