<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plans extends Model
{
    protected $table='plans';
    use HasFactory;
    public function userMetas()
    {
        return $this->hasMany(UserMeta::class, 'plan_id');
    }
}
