<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{

    public function newsList()
    {
        return view('news/list', ['name' => 'James']);
    }

    //форма новости
    public function createNews(Request $request)
    {
        return view('news/create');
    }

    public function storeNews(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:2',
            'description' => 'required|min:10',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $new = new News();
        $new->title = $request->title;
        $new->description = $request->description;
        $new->save();

        if (Input::hasFile('file')) {
            $image_extension = $request->file('file')->getClientOriginalExtension();
            $image_new_name = md5(microtime(true));
            $request->file('file')//сохраняем и переносим
            ->move(base_path() . '/public/images/upload/', strtolower($image_new_name . '.' . $image_extension));
            $new->image_name = $image_new_name . '.' . $image_extension;
            $new->save();
        }

    }
}
