<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('site.blog.index');
    }
}
