<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('sugar_quantity');
    }

    public function getAll()
    {
        return DB::table('orders')
            ->get();
    }

    public function getByUser($userId)
    {
        return DB::table('orders')
            ->where('user_id', '=', $userId)
            ->get();
    }

    public function create($userId)
    {
        DB::table('orders')
            ->insert([
                'user_id' => $userId,
                'date' => now()
            ]);
    }
    public function getProducts()
    {
        return DB::table('Products')
            ->join('order_product', 'products.id', '=', 'order_product.product_id')
            ->where('order_id', '=',$this->getKey())
            ->get();

    }
}
