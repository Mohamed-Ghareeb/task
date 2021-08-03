
 @foreach ($courses as $course)
    <div class="col-lg-4 mb-4 mb-lg-4">
        <div class="card shadow border-0 reset-anchor d-block hover-transition">
            <div class="card-body p-4">
                <h3 class="h5">{{ $course->name }}</h3>
                <p class="text-muted text-small mb-3">{{ $course->description }}</p>
                <div class="media align-items-center">
                <div class="media-body d-flex align-items-center"><span class="small text-muted mr-1"><strong>Refered Category</strong></span>
                    <h6 class="mb-0"> <a class="reset-anchor" href="#">{{ $course->category->name }}</a></h6>
                </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
