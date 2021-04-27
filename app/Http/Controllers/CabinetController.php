<?php


namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\DB;


class CabinetController
{
public function Cabinet ()
{
    $posts = DB::select('SELECT * FROM `posts` ORDER BY `posts`.`id` DESC');
    return view('account/cabinet/cabinet', ['items'=>$posts]);
}
}
