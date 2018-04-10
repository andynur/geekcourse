@foreach ($courses as $course)             
    <div class="col-lg-3">
        <a href="courses/{{ $course->id }}" class="card-custom-link">
            <div class="card-custom">
                <div class="image"><img src="{{ $course->thumbnail }}"></div>
                <div class="details">
                    <p class="course-title">{{ str_limit($course->title, 40, '...') }}</p>
                    <p class="course-author">{{ $course->creator->name }}</p>
                    <div class="course-rate">
                        @include('courses/_course_rate', ['rating' => $course->rating])
                        <span class="score">{{ $course->rating }}</span>
                        <span class="enroll">({{ $course->student_enroll }})</span>
                    </div>
                    <div class="price mt-3 text-right">
                        <span class="real">${{ number_format($course->price, 2) }}</span>
                        <span class="discount">${{ number_format($course->discount, 2) }}</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
@endforeach

@push('css')
    <!-- jquery bar ratings css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/css-stars.min.css" />
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