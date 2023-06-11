<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    protected $fillable = [
        'alamat',
        'no_hp',
        'tgl_lahir',
    ];

    public function users()
	{
		return $this->hasOne(User::class, 'id_users');
	}
}
