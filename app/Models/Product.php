<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    use HasFactory;
    protected $fillable =["bubble_tea_id", "popping_id", "sugar_id"];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class)
            ->withPivot('sugar_quantity');
    }

    public function popping(): HasOne
    {
        return $this->hasOne(Popping::class);
    }

    public function bubbleTea(): HasOne
    {
        return $this->hasOne(BubbleTea::class);
    }

    public function sugar(): HasOne
    {
        return $this->hasOne(Sugar::class);
    }

    public function getAll()
    {
        return DB::table('products')
            ->get();
    }

    public function getById($id)
    {
        return DB::table('products')
            ->where('id', '=', $id)
            ->get();
    }

    public static function getByOrder($orderId)
    {
        return DB::table('products')
            ->join('order_product', 'products.id', '=', 'order_product.product_id')
            ->where('order_product.order_id', '=', $orderId)
            ->get();
    }

    public static function getByRecipe($bubbleTeaId, $sugarId, $poppingId)
    {
        return DB::table('products')
            ->where(
               'sugar_id', '=', $sugarId
            )
            ->where('bubble_tea_id', '=', $bubbleTeaId)
            ->where( 'popping_id', '=', $poppingId)
            ->get();
    }

    public static function create($bubbleTeaId, $sugarId, $poppingId)
    {
        if (Product::getByRecipe($bubbleTeaId, $sugarId, $poppingId)->isEmpty()) {
            DB::table('products')
                ->insert([
                    'bubble_tea_id' => $bubbleTeaId,
                    'popping_id' => $poppingId,
                    'sugar_id' => $sugarId]);
        }
        return Product::getByRecipe($bubbleTeaId, $sugarId, $poppingId);
    }
}
