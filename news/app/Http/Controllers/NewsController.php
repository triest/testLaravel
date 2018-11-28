<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\Filesystem\Exception\IOException;
use File;

class NewsController extends Controller
{

    public function newsList()
    {
        $news = News::select([
            'id',
            'title',
            'description',
            'image_name',
            'created_at',
            'updated_at'
        ])
            ->orderBy('created_at', 'DESC')->simplePaginate(10);

        return view('news/list', ['news' => $news]);
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

        return $this->newsList();
    }

    public function detail($id)
    {
        if ($id == null) {
            return abort(404);
        }
        $new = News::select([
            'id',
            'title',
            'description',
            'image_name',
            'created_at',
            'updated_at'
        ])
            ->where('id', $id)->first();
        if ($new == null) {
            return abort(404);
        }

        return view('news/detail', ['new' => $new]);
    }

    public function edit($id)
    {
        if ($id == null) {
            return abort(404);
        }
        $new = News::select([
            'id',
            'title',
            'description',
            'image_name',
            'created_at',
            'updated_at'
        ])
            ->where('id', $id)->first();
        if ($new == null) {
            return abort(404);
        }
        return view('news/edit', ['new' => $new]);
    }

    public function saveEdit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:2',
            'description' => 'required|min:10',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $new = News::select([
            'id',
            'title',
            'description',
            'image_name',
            'created_at',
            'updated_at'
        ])
            ->where('id', $id)->first();
        if ($new == null) {
            return abort(404);
        }

        $new->title = $request->title;
        $new->description = $request->description;
        $new->save();
        if (Input::hasFile('file')) {
            $old_image_name = $new['image_name'];
            $path = base_path() . '/public/images/upload/' . $old_image_name;
            try {
                File::Delete($path);
            } catch (\Exception $e) {

            }
            $image_extension = $request->file('file')->getClientOriginalExtension();
            $image_new_name = md5(microtime(true));
            $request->file('file')//сохраняем и переносим
            ->move(base_path() . '/public/images/upload/', strtolower($image_new_name . '.' . $image_extension));
            $new->image_name = $image_new_name . '.' . $image_extension;
            $new->save();
            $this->detail($id);
        }
        $this->detail($id);
    }
}
