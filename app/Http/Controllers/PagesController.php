<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
class PagesController extends Controller //extends the main controller
{
    public function index() { //anytime there is a function in a class then it becomes a method.
        return 'Index';
    }
}
*/
class PagesController extends Controller //extends the main controller
{
    public function index() {//anytime there is a function in a class then it becomes a method.
        $title = 'Welcome to Laravel';
        
       // return view('pages.index', compact('title')); // first method to pass values to a page using compact function
       return view('pages.index')-> with('title', $title); //Second method to pass values using with, its better to pass mutiple values as arrays
    }

    
        public function about() { 
           
            $title = 'About Us';
            // return view('pages.about');
            return view('pages.about')-> with('title', $title);
        }
        
            public function services() { 
                $data = array(
                    'title'=> 'Services',
                    'services'=>['Web Design', 'Programming', 'SEO' ]
                );
                return view('pages.services') -> with($data);
            }
}
