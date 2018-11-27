<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function newsList(){

        return view('news/list', ['name' => 'James']);
    }
}
