<?php

namespace App\Http\Controllers;

use App\mainBlock;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class mainController extends Controller
{

    public function index(Request $request)
    {
        $blocks = mainBlock::select([
            'id',
            'title',
            'description',
            'position',
            'created_at',
            'updated_at'
        ])->get();

        return view('main/main')->with(['blocks' => $blocks]);
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

    public function dataforAjax(Request $request)
    {
        $blocks = mainBlock::select([
            'id',
            'title',
            'description',
            'position',
            'created_at',
            'updated_at'
        ])->get();
        return Response::json($blocks);
    }

    public function delete($id)
    {
        $block = mainBlock::find($id);
        if ($block != null) {
            $block->delete();
        }
        return redirect()->route('main');
    }

    public function edit($id)
    {
        $block = mainBlock::find($id);
        return view('main/edit')->with(['block' => $block]);
    }

    public function saveedit(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:2',
            'description' => 'required|min:10',
        ]);
        $block = mainBlock::find($request->id);
        $block->title = $request->title;
        $block->description = $request->description;
        $block->position = $request->optradio;
        $block->save();
        return redirect()->route('main');
    }

}
