<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class BubbleTea extends Model
{
    use HasFactory;

    protected $fillable =["name", "description", "price", "image"];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    public static function getAllBubble()
    {
        return DB::table('bubble_teas')
            ->get();
    }

    public function getActive()
    {
        return DB::table('bubble_teas')
            ->where('available', '=', '1')
            ->get();
    }

    public function getUnactive()
    {
        return DB::table('bubble_teas')
            ->where('available', '=', '0')
            ->get();
    }

    public static function getElementById($id)
    {
        return DB::table('bubble_teas')
            ->where('id', '=', $id)
            ->get();
    }

    public function disable($id)
    {
        DB::table('bubble_teas')
            ->where('id', '=', $id)
            ->update(['available' => 0]);
    }

    public function activate($id)
    {
        DB::table('bubble_teas')
            ->where('id', '=', $id)
            ->update(['available' => 1]);
    }
}
