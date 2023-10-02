
  <!--================ Header Top Area Start =================-->
  <section class="header-top d-none d-sm-block">
    <div class="container">
      <div class="d-sm-flex justify-content-between">
        <ul class="header-top__info mb-2 mb-sm-0">
          <li><a href="tel:+01432152323"><span class="align-middle"><i class="ti-mobile"></i></span>+014 321 523 23</a></li>
          <li><a href="mailto:info@example.com"><span class="align-middle"><i class="ti-email"></i></span>Info@example.com</a></li>
        </ul>
        <ul class="header-top__social">
          <li><a href="#"><i class="ti-facebook"></i></a></li>
          <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
          <li><a href="#"><i class="ti-instagram"></i></a></li>
          <li><a href="#"><i class="ti-skype"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <!--================ Header Top Area end =================-->

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="{{ url('/') }}"><img src="{{ asset('web_asset/img/logo.png') }}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About</a></li> 
              <li class="nav-item"><a class="nav-link" href="{{ url('services') }}">Services</a>
              <li class="nav-item"><a class="nav-link" href="{{ url('blog') }}">Blog</a>
              <li class="nav-item"><a class="nav-link" href="{{ url('contact') }}">Contact</a></li>
              <li class="nav-item" style="background-color: #de6320"><a class="nav-link" style="color:white" href="{{ url('sign-up') }}">Become Our Client</a></li>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->
