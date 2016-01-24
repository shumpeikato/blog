<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct() {
    }
    public function home() {
        $blogs = Blog::all();
	return view('admin.home', compact('blogs'));
    }
    public function create() {
	    return view('admin.create'); 
    }
    public function store() {
        $request = \Request::all();
        $this->validate($request, [
           'name' =>  'required',
            'contents' => 'required'
        ]);
        Blog::create($request);
        $blogs = Blog::orderBy('created_at', 'desc')->get();
	    return view('admin.home', compact('blogs'));
    }
    public function edit($id) {
        $blog = Blog::findOrFail($id);
	return view('admin.edit', compact('blog'));
    }
    public function update(Request $request, $id) {
                        $blog = Blog::find($id);
                        $blog->name = $request->name;
                        $blog->contents = $request->contents;
                        $blog->save();
                $blogs = Blog::all();
	    return view('admin.home', compact('blogs'));
    }
    public function destroy($id) {
                        $blog = Blog::find($id);
                        $blog->delete();
	    return redirect(route('admin.home'));
    }
}
