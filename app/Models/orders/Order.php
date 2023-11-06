<?php

namespace App\Models\orders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    


}
