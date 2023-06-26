<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'order';

	protected $fillable = [
        'id',
        'tanggal',
        'status',
        'kode',
        'jumlah_harga',
    ];

	public function user()
	{
	      return $this->belongsTo(User::class,'user_id', 'id');
	}

	public function order_detail() 
	{
	     return $this->hasMany(OrderDetail::class,'order_id', 'id');
	}
}
