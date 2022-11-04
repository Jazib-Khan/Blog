<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Session;

class PagesController extends Controller
{
    public function index()
    {
        $wp['title'] = 'Homepage';
        $wp['description'] = "This is homepage";
        $wp['content'] = "This is the content";
        $wp['blogData'] = Blog::all();
        return view('blog.content', compact('wp'));
    }

    public function aboutus() 
    {
        $wp['title'] = 'About Us';
        $wp['description'] = "This is about page";
        $wp['content'] = "This is the content of about page";
        return view('blog.about', compact('wp'));
    }

    public function testingId($id)
    {
        return $id;
    }

    public function addblog(Request $request) 
    {
        $title = $request->input('title');
        $text = $request->input('text');

        $blog = new Blog();
        $blog->title = $title;
        $blog->text = $text;
        $blog->save();

        Session::flash('message', 'Your blog has been added successfully');
        return redirect()->back();
        
    }
    public function showblog($id)
    {
        $wp['data'] = Blog::find($id);

        return view('blog.show', compact('wp'));
    }

    public function deleteblog($id)
    {
        $data = Blog::find($id)->delete();
        return redirect()->route('homepage');
    }
}
