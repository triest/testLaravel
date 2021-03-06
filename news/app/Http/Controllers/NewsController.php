<?php

namespace App\Http\Controllers;

use App\News;
use App\Tag;
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
        $tags = Tag::all();
        return view('news/create', ['tags' => $tags]);
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
        $tags_request = $request->input('tags');
        $tags = Tag::find($tags_request);


        foreach ($tags as $tag) {
            $new->tags()->attach($tag);
        }


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
        ])->where('id', $id)->first();

        if ($new == null) {
            return abort(404);
        }
        $tags = $new->tags()->get();
        return view('news/detail', ['new' => $new, 'tags' => $tags]);
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

        $tags = Tag::get()->all();
        $newsTag = $new->tags()->get();
        foreach ($tags as $tag) {
            if (in_array($tag, $newsTag->toArray())) {
                echo $tag->title;
            }
        }
        $articleTag = [];
        foreach ($newsTag as $tag) {
            array_push($articleTag, $tag->title);
        }
        $allTag = [];
        foreach ($tags as $tag) {
            array_push($allTag, $tag->title);
        }


        if ($new == null) {
            return abort(404);
        }
        return view('news/edit', ['new' => $new, 'tags' => $allTag, 'newsTag' => $articleTag]);
    }


    function in_multi_array($needle, $haystack, $strict = false)
    {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && $this->in_multi_array($needle,
                        $item, $strict))) {
                return true;
            }
        }
        return false;
    }

    public function saveEdit(Request $request)
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
        }

        $new->tags()->detach();
        $tags_request = $request->input('tags');

        $tags = Tag::select('id',
            'title',
            'created_at',
            'updated_at')->whereIn('title', $tags_request)->get();


        foreach ($tags as $tag) {
            $new->tags()->attach($tag);
        }

        return redirect()->route('detail', ['id' => $id]);
    }

    public function delete($id)
    {
        $new = News::find($id);
        $new->delete();
        return $this->newsList();
    }

    public function seachByTag($id)
    {
        $tag = Tag::find($id);
        $news = $tag->news()->orderBy('created_at', 'DESC')->simplePaginate(10);
        return view('news/list', ['news' => $news]);
    }

    public static function getTags()
    {
        $news = $new = News::select([
            'id',
            'title',
            'description',
            'image_name',
            'created_at',
            'updated_at'
        ])->get();
        //  dump($news);
        $tags = Tag::all();

        // $tags=Tag::has('news','=',1)->get();
        return $tags;
    }
}
