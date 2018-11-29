<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::select('id',
            'title',
            'image_name',
            'created_at',
            'updated_at')
            ->orderBy('created_at', 'DESC')
            ->simplePaginate(30);
        return view('galeray/index', ['images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required'
        ]);

        if (Input::hasFile('file')) {
            $image_extension = $request->file('file')->getClientOriginalExtension();
            $image_new_name = md5(microtime(true));
            $temp_file = base_path() . '/public/images/upload/' . strtolower($image_new_name . '.' . $image_extension);// кладем файл с новыс именем
            $request->file('file')
                ->move(base_path() . '/public/images/upload/', strtolower($image_new_name . '.' . $image_extension));
            $image = new Image();
            $image->image_name = $image_new_name . '.' . $image_extension;
            $image->title = $request->title;
            $image->save();
            return $this->index();
        }

        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id == null) {
            return abort(404);
        }
        $image = Image::select([
            'id',
            'title',
            'image_name',
            'created_at',
            'updated_at'
        ])
            ->where('id', $id)->first();

        return view('galeray/detail', ['image' => $image]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }

    public function delete($id)
    {
        $image = Image::find($id);

        $path = base_path() . '/public/images/upload/' . $image->image_name;
        dump($path);
        try {
            File::Delete($path);
        } catch (\Exception $e) {
        }
        $image->delete();
        return $this->index();

    }
}
