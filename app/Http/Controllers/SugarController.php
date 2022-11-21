<?php

namespace App\Http\Controllers;

use App\Models\Sugar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SugarController extends Controller
{
    public function index()
    {
        $datasugar = Sugar::all();
        return view('sugar', ['datasugar' => $datasugar]);
    }

    public function CreateSugar()
    {
        $createSugar = Sugar::all();
        return view('createSugar', compact('createSugar'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name"=>'required',
            "price"=>"required",
            "image"=>"required"
        ]);

        Sugar::create($request->all());

        return back()->with("success", "New sugar added !");
    }

    public function editSugar($id)
    {
        $sugar = Sugar::find($id);
        return view('editSugar', compact('sugar'));
    }

    public function update(Request $request, Sugar $Sugar)
    {
        $request->validate([
            "name"=>'required',
            "price"=>"required",
            "image"=>"required"
        ]);

        DB::table('sugars')
            ->where('id', '=', $request->id )
            ->update([
                'name' => $request->name,
                'price' => $request->price,
                'image' => $request->image
            ]);

        return back()->with("success", "Successfully updated");
    }
}
