<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome To Laravel!';
        //return  view ('pages.index', compact('title'));
        return  view ('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'This Is The About Page!';
        return  view ('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Responsive Design', 'Programming', 'SEO']
        );
        return  view ('pages.services')->with($data);
    }
}
