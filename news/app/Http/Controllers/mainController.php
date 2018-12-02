<?php

namespace App\Http\Controllers;

use App\mainBlock;
use Illuminate\Http\Request;

class mainController extends Controller
{

    public function index(Request $request)
    {
        $blocks=mainBlock::select([
            'id',
            'title',
            'description',
            'position',
            'created_at',
            'updated_at'])->get();

        return view('main/main')->with(['blocks'=>$blocks]);
    }


    public function create(Request $request)
    {
        return view('main/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:2',
            'description' => 'required|min:10',
        ]);
        $mainBlock = new mainBlock();
        $mainBlock->title = $request->title;
        $mainBlock->description = $request->description;
        $mainBlock->position = $request->optradio;
        $mainBlock->save();
        return redirect()->route('main');
    }
}
