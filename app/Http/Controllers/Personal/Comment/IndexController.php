<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $comments = Auth()->User()->comments;
        return view('personal.comments.index', compact('comments'));
    }
}
