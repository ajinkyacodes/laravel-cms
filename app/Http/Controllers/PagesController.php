<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title='Laravel CMS';
        // return view('pages.index', compact('title')); //Method 1 of passing single value parameter
        return view('pages.index')->with('title',$title); //Method 2 of passing single or multiple value parameters (as array)
    }

    public function about() {
        $title='About Us';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Website Design', 'Programming', 'SEO']                
        );
        return view('pages.services')->with($data);
    }
}
