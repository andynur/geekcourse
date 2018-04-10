@extends('layouts.app') 

@section('title') Courses | Geekcourse Video Tutorial @endsection 

@section('content')
    <div class="container top-padding">
        <h2 class="course-head">Top Courses</h2>
        <div class="row mb-5">
            @include('courses/_course_item', ['courses' => $populars])
        </div>
        <h2 class="course-head">Recomended Courses</h2>
        <div class="row mb-5">
            @include('courses/_course_item', ['courses' => $recomendeds])
        </div>    
        <h2 class="course-head">Trending Courses in <strong>Development</strong></h2>
        <div class="row mb-5">
            @include('courses/_course_item', ['courses' => $trendings])
        </div>        
    </div>
@endsection