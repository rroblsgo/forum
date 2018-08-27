<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;

class ForumsController extends Controller
{
    public function index() {
        $forums = Forum::latest()->paginate(10);
        return view('forums.index', compact('forums'));
    }
    public function show(Forum $forum) {
        //dd($forum->toArray());      // así no se muestran campos hidden
        //dd($forum);
        $posts = $forum->posts()->with(['owner'])->paginate(10);
        return view('forums.detail', compact('forum', 'posts'));
        //dd($posts);
    }
}
