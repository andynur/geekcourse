@extends('layouts.app') 

@section('title') Geekcourse Video Tutorial @endsection 

@push('css')
    <link href="https://getbootstrap.com/docs/4.0/examples/carousel/carousel.css" rel="stylesheet">
@endpush

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        @include('home/_carousel')
    </div>

    <div class="container">
        <h2 class="course-head">Popular Courses</h2>
        <div class="row mb-5">
            @include('courses/_course_item', ['courses' => $populars])
        </div>
        <h2 class="course-head">Recomended Courses</h2>
        <div class="row mb-5">
            @include('courses/_course_item', ['courses' => $recomendeds])
        </div>   
    </div>
@endsection