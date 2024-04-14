<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username','reffral','reffernce_code','phone','cnic','address','countries'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function userMeta()
    {
        return $this->hasOne(UserMeta::class, 'user_id');
    }
    public function receivedTransactions()
    {
        return $this->hasMany(Transaction::class, 'receiver_id');
    }

    public function sentTransactions()
    {
        return $this->hasMany(Transaction::class, 'sender_id');
    }
    public function videoWorkDone()
    {
        return $this->hasMany(VideoWorkDone::class);
    }
    public function earnings()
    {
        return $this->hasMany(UserEarning::class);
    }
    public function withdraw()
    {
        return $this->hasMany(Withdrawal::class);
    }
    Public function bankdetails(){
        return $this->hasOne(UserBankDetails::class);
    }
}
