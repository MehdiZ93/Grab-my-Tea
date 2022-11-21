<?php

namespace App\Http\Controllers;

use App\Models\BubbleTea;
use App\Models\Popping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoppingController extends Controller
{
    public function index()
    {
        $datapopping = Popping::all();
        return view('popping', ['datapopping' => $datapopping]);
    }

    public function CreatePopping()
    {
        $createPopping = Popping::all();
        return view('createPopping', compact('createPopping'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=>'required',
            "price"=>"required",
            "image"=>"required"
        ]);

        Popping::create($request->all());

        return back()->with("success", "New popping added !");
    }

    public function editPopping($id)
    {
        $popping = Popping::find($id);
        return view('editPopping', compact('popping'));
    }

    public function update(Request $request, Popping $Popping)
    {
        $request->validate([
            "name"=>'required',
            "price"=>"required",
            "image"=>"required"
        ]);

        DB::table('poppings')
            ->where('id', '=', $request->id )
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $request->image
            ]);

        return back()->with("success", "Successfully upated");
    }
}
