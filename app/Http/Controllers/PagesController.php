<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title  = 'Welcome to laravel';
        // return view('pages.index', compact('title'));

        // --Another way that ois very efficient--
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title = "About us page";
        // return view('pages.about');
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array (
            'title' => 'Welcome to Services',
            'services' => ['web design', 'programming', 'SEO']
        );
        return view('pages.services')->with ($data);
    }
}
