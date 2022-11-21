<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\BubbleTea;
use App\Models\Order;
use App\Models\Popping;
use App\Models\Product;
use App\Models\Sugar;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()
            ->count(10)
            ->has(
                Order::factory()
                ->count(3)
                ->hasAttached(
                    Product::factory()
                    ->count(15)
                )
            )->create();
    }
}
