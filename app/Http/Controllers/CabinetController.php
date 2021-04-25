<?php


namespace App\Http\Controllers;
use App\Models\Post;


class CabinetController
{
public function Cabinet ()
{
    $posts = Post::query()->with('Tags') -> with('Category')->get();
    return view('account/cabinet/cabinet', ['items'=>$posts]);
}
}
