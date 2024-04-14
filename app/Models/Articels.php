<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articels extends Model
{
    use HasFactory;
    public function earnings()
    {
        return $this->hasMany(UserEarning::class);
    }
}
