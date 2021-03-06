<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700&amp;display=swap">
    <!-- Owl carousel2-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel2/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/vendor/owl.carousel2/assets/owl.theme.default.min.css') }}">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/bootstrap-select/css/bootstrap-select.min.css') }}">
    <!-- Lightbox-->
    <link rel="stylesheet" href="{{ asset('frontend/vendor/lightbox2/css/lightbox.min.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 py-lg-2">
        <div class="container"><a class="navbar-brand py-3 d-flex align-items-center" href="index.html"><img src="img/logo.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-dark ml-2 mb-0">Home Page</span></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link active" href="/">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Hero section-->
    <section class="hero-home py-5">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <p class="h6 text-uppercase text-primary mb-3">Listings</p>
            <h1 class="mb-5">A curated directory of tools and resources to build your startup.</h1>
            <form class="p-2 rounded shadow-sm bg-white" action="#">
              <div class="input-group">
                <input class="form-control border-0 mr-2" id="search" type="search" placeholder="Search tools and resources...">
                <div class="input-group-append rounded">
                  <button class="btn btn-primary rounded" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Categories section-->
    <section class="pb-5">
      <div class="container pb-5">
        <header class="text-center mb-5">
          <h2 class="mb-1">Explore our categories</h2>
          <p class="text-muted text-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        </header>
        <div class="row text-center custom-class-cat">
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
        </div>
        <div class="col-lg-12 text-center pt-4"><a class="btn btn-primary show-more" href="#">Show more categories</a></div>
      </div>
    </section>
    <!-- Resources section-->
    <section class="pb-5">
      <div class="container pb-5">
        <header class="text-center mb-5">
          <h2 class="mb-1">Our Courses Collection</h2>
          <p class="text-muted text-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        </header>
        <div class="row custom-class-course">
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
        </div>
        <div class="col-lg-12 text-center pt-4"><a class="btn btn-primary" href="#">Show more courses</a></div>
      </div>
    </section>

    <footer style="background: #111;">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
            <div class="d-flex align-items-center mb-3"><img src="img/logo-footer.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-white ml-2">Listings</span></div>
            <p class="text-muted text-small font-weight-light mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <ul class="list-inline mb-0 text-white">
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-pinterest"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
            <h6 class="pt-2 text-white">Useful links</h6>
            <div class="d-flex flex-wrap">
              <ul class="list-unstyled text-muted mb-0 mb-3 mr-4">
                <li><a class="reset-anchor text-small" href="#">Tools</a></li>
                <li><a class="reset-anchor text-small" href="#">Resources</a></li>
                <li><a class="reset-anchor text-small" href="#">About us</a></li>
                <li><a class="reset-anchor text-small" href="#">Write to us</a></li>
              </ul>
              <ul class="list-unstyled text-muted mb-0">
                <li><a class="reset-anchor text-small" href="#">Privacy Policy </a></li>
                <li><a class="reset-anchor text-small" href="#">Cookie Policy</a></li>
                <li><a class="reset-anchor text-small" href="#">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
            <h6 class="pt-2 text-white">Newsletter</h6>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <form action="">
              <div class="input-group">
                <input class="form-control bg-none border-dark text-white" type="email" placeholder="Type your email address">
                <div class="input-group-append">
                  <button class="btn btn-light" type="submit"><i class="fas fa-paper-plane"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="copyrights py-4" style="background: #0e0e0e">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-6 text-lg-left mb-2 mb-md-0">
              <p class="mb-0 text-muted mb-0 text-small">&copy; 2020 All rights reserved.</p>
            </div>
            <div class="col-md-6 col-sm-6 text-md-right">
              <p class="mb-0 text-muted mb-0 text-small">Template designed by <a class="reset-anchor text-primary" href="https://bootstraptemple.com/p/listings">Bootstrap Temple</a>.</p>
              <!-- If you want to remove the backlink, please purchase the Attribution-Free License.-->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="{{ asset('frontend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/owl.carousel2/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/lightbox2/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('frontend/js/front.js') }}"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite -
      //   see more here
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {

          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');


$('#search').on('keyup',function(){
    var value=$(this).val();
    $.ajax({
        type : 'get',
        url : '{{ route('search.courses') }}',
        data:{'search':value},
        success:function(data){
            $('.custom-class-course').html(data);
        }
    });

    $.ajax({
        type : 'get',
        url : '{{ route('search.categories') }}',
        data:{'search':value},
        success:function(data){
            $('.custom-class-cat').html(data);
        }
    });
})




    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
