<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\BubbleTea;
use App\Models\Popping;
use App\Models\Sugar;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\VarDumper;

class ProductController extends Controller
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
     * @param StoreProductRequest $request
     * @return void
     */
    public function store(StoreProductRequest $request): void
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return void
     */
    public function show(Product $product): void
    {
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Product $product
     * @return void
     */
    public function edit(Product $product): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateProductRequest $request
     * @param Product $product
     * @return void
     */
    public function update(UpdateProductRequest $request, Product $product): void
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return void
     */
    public function destroy(Product $product): void
    {
        return;
    }

    public function list_products()
    {
        $data = BubbleTea::all();
        return view('product', [
            'bubbletea' => $data
        ]);
    }

    public function description($id)
    {
        $bubble =BubbleTea::find($id);
        $popping = Popping::all();
        $sugar = Sugar::all();
     
        return view('basket', [
        'bubbletea' => $bubble,'poppings' => $popping, 'sugars' => $sugar
]);
        
}

public function add_product_bdd(Request $request)
{
   
    $data = $request->validate([
        "bubble_tea_id"=>'required',
        "popping_id"=>'required',
        "sugar_id"=>'required',
    ]); 

    $id =  Product::create($request->bubble_tea_id,$request->sugar_id, $request->popping_id);  

   // return $id; 
   //return $request;
   return back()->with("success", $id);
  //return view('/basket');
  }
}