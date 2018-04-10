@extends('layouts.app') 

@section('title') My Courses | Geekcourse Video Tutorial @endsection 

@section('content')
    <div class="container-fluid bg-danger pt-5">
        <div class="container custom-head">
            <h1>My Courses</h1>
            <ul class="nav nav-tabs mt-3">
                <li class="nav-item active">
                    <a class="nav-link" href="#">All Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Collections</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Whislist</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Archived</a>
                </li>
            </ul>            
        </div>     
    </div>

    <div class="container mt-5">
        <div class="row pr-2 pl-2">
            <div class="col-md-3">
                <p class="mb-2">Sort By</p>
                <div class="btn-group">
                    <button class="btn bg-white btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recently Accesses
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>                    
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <p class="mb-2">Filter By</p>
                <div class="btn-group mr-3">
                    <button class="btn bg-white btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </div>

                <div class="btn-group mr-3">
                    <button class="btn bg-white btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Progress
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </div>
                    
                <div class="btn-group mr-3">
                    <button class="btn bg-white btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Instructor
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                    </div>
                </div>                    
            </div>
            <div class="col-md-3">
                <p class="mb-2">&nbsp;</p>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search My Courses">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>
                </div>                
            </div>
        </div>       
        <div class="row mt-5">
            @include('courses/_course_item', ['courses' => $courses])
        </div>     
    </div>    
@endsection

@push('css')
    <!-- jquery bar ratings css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/css-stars.min.css" />

    <style>
        .custom-head { 
            margin-top: 3.5em; 
            margin-bottom: 0; 
            color: #fff; 
            padding-right: 23em;
        }

        .custom-head ul.nav-tabs {
            border-bottom: 0;

        }
        
        .custom-head ul.nav-tabs .nav-item {
            border-bottom: 5px solid transparent;
        }

        .custom-head ul.nav-tabs .nav-item a {
            color: #fff;
        }

        .custom-head ul.nav-tabs .nav-item:hover {
            border-bottom: 5px solid #f7f8fa;
        }        

        .custom-head ul.nav-tabs .nav-item a {
            border: 0;
        }     

        .custom-head ul.nav-tabs .nav-item a:hover {
            border: 0;
        }                

        .custom-head ul.nav-tabs .nav-item.active {
            border-bottom: 5px solid #f7f8fa;
        }
    </style>
@endpush        