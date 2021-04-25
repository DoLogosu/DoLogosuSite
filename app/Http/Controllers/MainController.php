<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function Index(Request $request)
    {
        $posts = Post::query()->with('Tags') -> with('Category')->get();
        return view('index', ['items'=>$posts]);
    }
    public function Posts(Request $request)
    {
        $posts = Post::query()->with('Tags') -> with('Category')->get();
        return view('posts.index', ['items'=>$posts]);
    }
    public function BibleEveryDay(Request $request)
    {
        $posts = Post::query()->with('Tags') -> with('Category')->get();
        return view('bibleEveryDay.index', ['items'=>$posts]);
    }
    public function Homiletics(Request $request)
    {
        $posts = Post::query()->with('Tags') -> with('Category')->get();
        return view('homiletics.index', ['items'=>$posts]);
    }
    public function Literature(Request $request)
    {
        $posts = Post::query()->with('Tags') -> with('Category')->get();
        return view('literature.index', ['items'=>$posts]);
    }
    public function Music(Request $request)
    {
        $posts = Post::query()->with('Tags') -> with('Category')->get();
        return view('music.index', ['items'=>$posts]);
    }
    public function Apologetics(Request $request)
    {
        $posts = Post::query()->with('Tags') -> with('Category')->get();
        return view('apologetics.index', ['items'=>$posts]);
    }
    public function Questions(Request $request)
    {
        return view('questions.index');
    }
    public function Create(Request $request)
    {
        $categories = Category::query()->get();
        return view('posts.create', ['category' => $categories, 'title' => 'Додати пост']);
    }
    public  function  Edit(Request $request)
    {
        $posts = Post::query()->with('Tags') -> with('Category')->get();
        $categories = Category::query()->get();

       return View('posts.edit',['id'=>$request->id,
           'items'=>$posts,
           'categories' => $categories,
           'title' => 'Додати пост']);
        //return dd($request);
    }
    public  function  View($post_id)
    {
        $posts = Post::query()->with('Tags') -> with('Category')->get();
        return View('posts.view',['items'=>$posts,'post_id'=>$post_id]);
    }
    public function Store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'description_short' => 'required',
            'id_category' => 'required'
        ]);

        $url='';
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $extension = $request->image->extension();
                $name = sha1(microtime()) . "." . $extension;
                $request->image->storeAs('/public', $name);
                $url = Storage::url($name);
            }
        }

        Post::create([
            'title'=> $request->title,
            'description'=> $request->description,
            'description_short' => $request->description_short,
            'url' => $url,
            'id_category' => $request->id_category,
            'id_user' => auth()->id(),
            'is_published'=>1
        ]);

        return redirect()->route('post.list')
            ->with('success', 'Post created successfully.');
    }

    public function UploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            //  Let's do everything here
            if ($request->file('file')->isValid()) {
                $extension = $request->file->extension();
                $name = sha1(microtime()) . "." . $extension;
                $request->file('file')->storeAs('/public', $name);

                $url = Storage::url($name);
                return response()->json(['link' => $url]);
            }
        }
    }


    public function Storage_files(Request $request)
    {

        $files = Storage::files('/public');

        //dd($files);

        return view('storage_files.index', ['items'=>$files]);

    }

    public function Upload(Request $request)
    {
        $request->validate([
            'image'=>'required'
        ]);
        $extension = $request->image->extension();
        $name = sha1(microtime()) . "." . $extension;
        $image=$request->file('image')->storeAs('/public',$name);

        return redirect()->route("../storage_files")
            ->with('success', 'Post created successfully.');


    }


}
