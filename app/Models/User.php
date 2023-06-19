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
        'google_id',
        'level',
        'alamat',
        'foto',
        'no_hp',
        'tgl_lahir',
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
<<<<<<< HEAD

    public function Admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function Pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    public function Rating()
    {
        return $this->belongsTo(Rating::class);
    }
=======
>>>>>>> cd53577fff24aee79a9a024be2c165f55eab1f11
}
