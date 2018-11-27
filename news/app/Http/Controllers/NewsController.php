<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function newsList(){
        return view('news/list', ['name' => 'James']);
    }

    //форма новости
    public function createNews(Request $request){
        return view('news/create');
    }

    public function storeNews(Request $request){
       // dump($request);
        $validatedData = $request->validate([
            'title' => 'required|min:2',
            'description'=>'required|min:10',
            'file'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $new=new News();
        $new->title=$request->title;
        $new->description=$request->description;
        $new->save();

        die();
    }
}
