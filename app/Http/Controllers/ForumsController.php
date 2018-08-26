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
}
