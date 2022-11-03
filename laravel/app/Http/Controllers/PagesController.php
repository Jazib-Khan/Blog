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
        return view('pages.welcome', compact('wp'));
    }
    public function testingId($id)
    {
        return $id;
    }
}
