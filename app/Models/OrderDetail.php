<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

	protected $fillable = 
    [
        'id', 
        'produk_id', 
        'order_id',
        'jumlah', 
        'jumlah_harga', 
        'jumlah',
    ];

    public function produk()
	{
	      return $this->belongsTo(Produk::class,'produk_id', 'id');
	}

	public function order()
	{
	      return $this->belongsTo(Order::class,'order_id');
	}

}
