@extends('layouts.app') 

@section('title') {{ $course->title }} | Geekcourse Video Tutorial @endsection 

@section('content')
    <div class="container-fluid bg-danger pt-5 pb-1">
        <div class="container custom-head">
            <h1>{{ $course->title }}</h1>
            <h4 class="mb-1">{{ $course->description }}</h4>
            <div class="rating mb-3">
                {{-- <span class="badge badge-warning mr-2">Best Seller</span> --}}
                @include('courses/_course_rate', ['rating' => $course->rating])
                
                <span class="badge badge-dark">{{ $course->rating / 2 }}</span>
                <span class="badge badge-primary">{{ $course->rating }} ratings</span>
                <span class="badge badge-info">{{ $course->student_enroll }} students enrolled</span>
            </div>
            <div class="info">
                <span class="mr-3">Created by <a href="#" class="creator">{{ $course->creator->name }}</a></span>
                <span class="mr-3">Last updated {{ $course->created_at->format('m/Y') }}</span>
                <span class="mr-3"><i class="fas fa-comment"></i> {{ ucfirst($course->language) }}</span>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-lg-8">
                <h2>Curriculum For This Course</h2>
                <div id="accordion" class="mt-4">
                    <div class="card mb-2">
                        <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <p class="mb-0"><i class="fas fa-chevron-down"></i> Getting Started</p>
                        </div>
                    
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <p class="mb-0"><i class="fas fa-chevron-down"></i> Introduction to React</p>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                    <div class="card mb-2">
                        <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <p class="mb-0"><i class="fas fa-chevron-down"></i> Authentication</p>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 20rem;position: fixed;top: 12em;right: 5em; padding: 3px">
                    <iframe width="100%" src="https://www.youtube.com/embed/AOIvk4beMcc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>                    
                    <div class="card-body">
                        <h1 class="card-title">$ {{ $course->price }}</h1>
                        <div class="mb-2">
                            <button type="button" class="btn btn-success container-fluid">Buy Now</button>
                        </div>
                        <div class="mb-2">
                            <button type="button" class="btn btn-default container-fluid">Add to Cart</button>
                        </div>                        
                        <p class="text-center">
                            <small class="text-muted">30-Day Money-Back Guarantee</small>
                        </p> 
                    </div>
                </div>
            </div>   
        </div>     
    </div>
@endsection

@push('css')
    <!-- jquery bar ratings css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/css-stars.min.css" />

    <style>
        body {
            background: #fff;
        }
        
        .custom-head { 
            margin-top: 3.5em; 
            margin-bottom: 3.5em; 
            color: #fff; 
            padding-right: 23em;
        }

        .custom-head h1 { 
            font-weight: bold;
        }

        .creator {
            color: #fff;
        }

        .creator:hover {
            color: #fff;
            text-decoration: underline;
        }      

        #accordion .card .card-header {
            cursor: pointer;
        }
    </style>
@endpush

@push('script')
    <!-- jquery bar ratings js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('.rate-bar').barrating({
                theme: 'css-stars',
                initialRating: null,
                showSelectedRating: false,
                readonly: true
            });
        });
    </script>
@endpush