<?php

namespace App\Http\Controllers;

use App\News;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    //
    public function index()
    {
        $tag = Tag::all();
        return view('tag/index', ['tags' => $tag]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:2|max:255|unique:tags|regex:/^[a-zA-Z]+$/u',
        ]);

        $tag = new Tag();
        $tag->title = $request->title;
        $tag->save();
        return $this->index();

    }
}
