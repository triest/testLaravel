<?php

namespace App\Http\Controllers;

use App\mainBlock;
use Illuminate\Http\Request;

class mainController extends Controller
{

    public function index(Request $request)
    {

        return view('main/main');
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
