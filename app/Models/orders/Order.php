<?php

namespace App\Models\orders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Class_;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order_payment()
    {
        return $this->belongsTo(OrderPayment::class, 'id', 'order_id');
    }

    public function order_shipping_address(){
      return $this->belongsTo(OrderShippingAddress::class,'id','order_id');
    }

    public function order_products(){
    return $this->hasMany(OrderProduct::class,'order_id','id');
    }




}
