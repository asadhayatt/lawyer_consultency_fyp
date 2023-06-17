@extends('layouts.web_layout')

@section('title','About')

@section('content')
    
     <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm">
    <div class="hero-banner__content text-center">
      <h1>About Us</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->


  <!--================ About section start =================-->
  <section class="d-lg-flex align-items-center section-margin--large">
    <div class="about__videoWrapper">
      <div class="about__video">
        <div class="about__video-image">
          <img class="card-img" src="{{ asset('web_asset/img/home/video-bg.png') }}" alt="">
        </div>
        <div class="about__videoContent">
          <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=vParh5wE-tM">
            <span></span>
          </a>
          <h4>Watch our video</h4>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="about__content">
        <h3>We Properly Understand Your Purpose</h3>
        <p>Multiply replenish sea won't fishl own without dry. Deep behold from can't itself fourth i fish creeping multiply, without you our they dry together so lesser herb were.</p>
        <p>Every appear very fill. Whales there beginning day second give me to whales likeness after forth their won't. Don fruit let multiply secon brought can't darkness saying. Stars can't after given one dry he subdue very called fourth image own won't open meat moved megathe red yielding do not .</p>
        <a class="button mt-xl-3" href="#">Learn More</a>
      </div>
    </div>
  </section>
  <!--================ About section end =================-->

  <!--================ Testimonial section start =================-->  
  <section class="bg-albaster section-padding--small">
    <div class="container">
      <div class="section-intro text-center pb-65px">
        <h2 class="section-intro__title">Client Says About Me</h2>
        <p>Female divided bearing rule one called said Beginning set you living above saw seasons void created fruitful third years god.</p>
      </div>

      <div class="owl-carousel owl-theme testimonial">
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="{{ asset('web_asset/img/testimonial/testimonial1.png') }}" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Mosan Cameron</h3>
                <p>Executive, Fedex</p>
                <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="{{ asset('web_asset/img/testimonial/testimonial1.png') }}" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Mosan Cameron</h3>
                <p>Executive, Fedex</p>
                <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="{{ asset('web_asset/img/testimonial/testimonial1.png') }}" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Mosan Cameron</h3>
                <p>Executive, Fedex</p>
                <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Testimonial section end =================--> 
  
  

  <!--================ Counter section start =================-->
  <section class="counters">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
          <div class="counters__single text-center">
            <h2>1050</h2>
            <h4>Our Partners</h4>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
          <div class="counters__single text-center">
            <h2>4580</h2>
            <h4>Closed Cases</h4>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
          <div class="counters__single text-center">
            <h2>7950</h2>
            <h4>Attorneys</h4>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
          <div class="counters__single text-center">
            <h2>6521</h2>
            <h4>Happy Customers</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Counter section end =================-->  

@endsection