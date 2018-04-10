<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->coursesFilter();

        return view('home.index', $courses);
    }

    /**
     * Listing of course by some conditions.
     *
     * @return array
     */
    public function coursesFilter()
    {
        return [
            'populars' => Course::popular(),
            'recomendeds' => Course::recomended()
        ];
    }      
}
