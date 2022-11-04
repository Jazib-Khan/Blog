<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $wp['title'] = 'Homepage';
        $wp['description'] = "This is homepage";
        $wp['content'] = "This is the content";
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
}
