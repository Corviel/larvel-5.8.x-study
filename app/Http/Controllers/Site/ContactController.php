<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    
    public function index()
    {
        return view('site.contact.index');
    }

    public function form(Request $request)
    {
        dd($request->all());
    }
}
