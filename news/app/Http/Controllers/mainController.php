<?php

namespace App\Http\Controllers;

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
        dump($request);
        die();
    }
}
