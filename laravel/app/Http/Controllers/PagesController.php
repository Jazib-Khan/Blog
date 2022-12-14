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

    public function editblog($id)
    {
        $wp['data'] = Blog::findorfail($id);
        return view('blog.showBlog', compact('wp'));
    }

    public function editBlogPost($id, Request $request)
    {
    
        $title = $request->input('title');
        $text = $request->input('text');

        $data = Blog::findorfail($id);
        $data->text = $text;
        $data->title = $title;
        $data->save();

        Session::flash('message', 'Your blog has been edited successfully');

        return redirect()->route('homepage');
    }

}
