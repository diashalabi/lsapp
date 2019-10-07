<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel!';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About us';
        return view('pages.about')->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => [
                'SEO SERVICES',
                'DIGITAL MARKETING SERVICES',
                'SOCIAL MEDIA MARKETING',
                'WEB DEVELOPMENT SERVICES',
                'WEB DESIGNING',
                'APP DEVELOPMENT',
                'IOS APP DEVELOPMENT',
                'ANDROID APP DEVELOPMENT'
            ]
        );
        return view('pages.services')->with($data);
    }
}
