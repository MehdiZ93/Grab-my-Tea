<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class Popping extends Model
{
    use HasFactory;

    protected $fillable =["name", "price", "image"];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public function getAll()
    {
        return DB::table('poppings')
            ->get();
    }

    public function getActive()
    {
        return DB::table('poppings')
            ->where('available', '=', '1')
            ->get();
    }

    public function getUnactive()
    {
        return DB::table('poppings')
            ->where('available', '=', '0')
            ->get();
    }
    public static function getElementById($id)
    {
        return DB::table('poppings')
            ->where('id', '=', $id)
            ->get();
    }

    public function disable($id)
    {
        DB::table('poppings')
            ->where('id', '=', $id)
            ->update(['available' => 0]);
    }

    public function activate($id)
    {
        DB::table('poppings')
            ->where('id', '=', $id)
            ->update(['available' => 1]);
    }
}
