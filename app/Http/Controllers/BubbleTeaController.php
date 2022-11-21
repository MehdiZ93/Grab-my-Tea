<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\BubbleTea;

class BubbleTeaController extends Controller
{
    public function index()
    {
        $databubble = BubbleTea::all();
        return view('admin', ['databubble' => $databubble]);
    }

    public function CreateBubbleTea()
    {
        $createBubble = BubbleTea::all();
        return view('createBubble', compact('createBubble'));
      
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=>'required',
            "description"=>'required',
            "price"=>"required",
            "image"=>"required"
        ]);
      
        BubbleTea::create($request->all());

        return back()->with("success", "Congratulation Bubble add !");
    }

    public function editBubble($id)
    {
        $bubbletea = BubbleTea::find($id);
        return view('editBubble', compact('bubbletea'));
    }

    public function update(Request $request, BubbleTea $BubbleTea)
    {
        $request->validate([
            "name"=>'required',
            "description"=>'required',
            "price"=>"required",
            "image"=>"required"
        ]);
      
        DB::table('bubble_teas')
        ->where('id', '=', $request->id )
        ->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $request->image
        ]);
        
        return back()->with("success", "Successfully updated");
        // return $request;
    }
}
