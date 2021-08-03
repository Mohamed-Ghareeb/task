
@foreach ($categories as $category)
<div class="col-lg-3 px-lg-2">
    <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
      <div class="card-body px-4 py-5">
            <svg class="svg-icon mb-3">
              <use xlink:href="#stack-1"> </use>
            </svg>
        <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">{{ $category->name }}</a></h2>
        <p class="categories-item-number small mb-0">{{ $category->courses->count() }} Courses</p>
      </div>
    </div>
  </div>
@endforeach
