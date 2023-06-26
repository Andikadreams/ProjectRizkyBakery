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
<<<<<<< HEAD
	      return $this->belongsTo(Order::class,'order_id', 'id');
=======
	      return $this->belongsTo(Order::class,'order_id');
>>>>>>> 579196f6f8dece10fe94d2af9360c67e13610309
	}

}
