<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Comment;

class BlogController extends Controller
{
    public function home() {
    	$blogs = Blog::latest('updated_at', 'desc')->get();
	    return view('home' , compact('blogs'));
    }
    public function show($id) {
        $blog = Blog::findOrFail($id);
	    return view('show' , compact('blog'));
    }
    public function comment($id) {
                $request = \Request::all();
                        $this->validate($request, [
           'name' =>  'required',
            'text' => 'required'
        ]);
                Comment::create($request);
        return redirect(route('show')); 
    }
}
