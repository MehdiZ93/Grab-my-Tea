<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderProduct extends Model
{

    public function create($orderId, $productId, $sugarQuantity = 1)
    {
        DB::table('order_product')
            ->insert([
                'order_id' => $orderId,
                'product_id' => $productId,
                'sugar_quantity' => $sugarQuantity
            ]);
    }

    protected $table = 'order_product';
}
