<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommandRequest;
use App\Http\Requests\UpdateCommandRequest;
use App\Models\BubbleTea;
use App\Models\Order;
use App\Models\Popping;
use App\Models\Product;
use App\Models\Sugar;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index(): void
    {
        return;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create(): void
    {
        return;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCommandRequest $request
     * @return void
     */
    public function store(StoreCommandRequest $request): void
    {
        return;
    }

    /**
     * Display the specified resource.
     *
     * @param Order $command
     * @return void
     */
    public function show(Order $command): void
    {
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $command
     * @return void
     */
    public function edit(Order $command): void
    {
        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCommandRequest $request
     * @param Order $command
     * @return void
     */
    public function update(UpdateCommandRequest $request, Order $command): void
    {
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $command
     * @return void
     */
    public function destroy(Order $command): void
    {
        //
    }
    public function order_for_order_history()
    {
        $i = 0;
        $orders = Auth::user()->getOrders();
        foreach($orders as $order)
        {
            $products = Product::getByOrder($order->id)->toArray();
            $orders[$i]->products = $products;
            $j = 0;
            foreach($products as $product)
            {
                $orders[$i]->products[$j]->bubbleTea = BubbleTea::getElementById($product->bubble_tea_id);
                $orders[$i]->products[$j]->popping = Popping::getElementById($product->popping_id);
                $orders[$i]->products[$j]->sugar = Sugar::getElementById($product->sugar_id);
                $j++;
            }
            $i++;
        }
        return view('order_history', compact('orders'));
    }
}
