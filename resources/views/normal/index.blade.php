<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Workshop Management System</title>

  <!-- Font Awesome Icons -->
  <link href="{{asset('asset/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="{{asset('asset/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="{{asset('asset/css/creative.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}">Workshop Management System</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{route('register')}}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5"><i>"Accessibility and Managment of Hardware product is our number one goal"</i></p> 
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">About us!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">Now you can request and get track of your request via this system!, so now we can manipulate all Computer Operation department activities easly </p>
         
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Service</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-database text-primary mb-4"></i>
            <h3 class="h4 mb-2">Hardware Managment</h3>
            <p class="text-muted mb-0">All Hardware products are managed easy with our system</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-cogs text-primary mb-4"></i>
            <h3 class="h4 mb-2">Trobleshoot & Maintenance</h3>
            <p class="text-muted mb-0">We Troubleshoot and Maintain all kind of hardware and software problems that may acounter in workplace.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">Networking</h3>
            <p class="text-muted mb-0">Configuration of switch and router with network installation is our work</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-table text-primary mb-4"></i>
            <h3 class="h4 mb-2">Assets Management</h3>
            <p class="text-muted mb-0">We manage all kind of hardware asset that we assign in our system</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('asset/img/portfolio/fullsize/1.jpg')}}">
            <img class="img-fluid" src="{{asset('asset/img/portfolio/thumbnails/1.jpg')}}">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('asset/img/portfolio/fullsize/2.jpg')}}">
            <img class="img-fluid" src="{{asset('asset/img/portfolio/thumbnails/2.jpg')}}" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('asset/img/portfolio/fullsize/3.jpg')}}">
            <img class="img-fluid" src="{{asset('asset/img/portfolio/thumbnails/3.jpg')}}" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('asset/img/portfolio/fullsize/4.jpg')}}">
            <img class="img-fluid" src="{{asset('asset/img/portfolio/thumbnails/4.jpg')}}" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('asset/img/portfolio/fullsize/5.jpg')}}">
            <img class="img-fluid" src="{{asset('asset/img/portfolio/thumbnails/5.jpg')}}" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="{{asset('asset/img/portfolio/fullsize/6.jpg')}}">
            <img class="img-fluid" src="{{asset('asset/img/portfolio/thumbnails/6.jpg')}}" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Register now for easy access of maintenance service!</h2>
      <a class="btn btn-light btn-xl" href="{{route('register')}}">Register Now!</a>

      <a class="btn btn-light btn-xl" href="{{route('login')}}">Login Now!</a>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Reach us by</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1212</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">info@nssfhq.com</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; Blacknative Inc. {{date('M Y')}}</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('asset/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('asset/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('asset/js/creative.min.js')}}"></script>

</body>

</html>
