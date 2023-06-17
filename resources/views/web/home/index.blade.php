@extends('layouts.web_layout')

@section('title','Home')

@section('content')
    

    <!--================ Hero Banner start =================-->      
  <section class="hero-banner">
    <div class="hero-banner__content text-center">
      <h1>We Well Understand Your Intention</h1>
      <a class="button" href="{{ url('contact') }}">Make an Appoinment</a>
    </div>
  </section>
  <!--================ Hero Banner end =================-->


  <!--================ Work Statics section start =================-->
  <section>
    <div class="container static__single-position">
      <div class="row">
        <div class="col-md-6 col-xl-3 mb-4 mb-xl-0">
          <div class="card static__single">
            <h3>35</h3>
            <h4>Dedicated Lawyer</h4>
          </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4 mb-xl-0">
          <div class="card static__single">
            <h3>1526</h3>
            <h4>Sucessful Cases</h4>
          </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4 mb-xl-0">
          <div class="card static__single">
            <h3>720</h3>
            <h4>Satisfied Client</h4>
          </div>
        </div>
        <div class="col-md-6 col-xl-3 mb-4 mb-xl-0">
          <div class="card static__single">
            <h3>680</h3>
            <h4>Personal Cases</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Work Statics section end =================-->        

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


  <!--================ Subject section start =================-->
  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-65px">
        <h2 class="section-intro__title">Our Practice Area</h2>
        <p>Female divided bearing rule one called said Beginning set you living above saw seasons void created fruitful third years god.</p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
          <div class="card card-subject">
            <div class="card-subject__img">
              <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/subject-1.png') }}" alt="">
              <div class="card-subject__imgOverlay">
                <img src="{{ asset('web_asset/img/home/hover-icon.png') }}" alt="">
              </div>
            </div>
            <div class="card-subject__body">
              <h3><a href="#">Employment Law</a></h3>
              <p>Dominion there fifth fowl eving heaven in life you're over us moved creepeth morn make</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
          <div class="card card-subject">
            <div class="card-subject__img">
              <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/subject-2.png') }}" alt="">
              <div class="card-subject__imgOverlay">
                <img src="{{ asset('web_asset/img/home/hover-icon.png') }}" alt="">
              </div>
            </div>
            <div class="card-subject__body">
              <h3><a href="#">Personal Injury</a></h3>
              <p>Dominion there fifth fowl eving heaven in life you're over us moved creepeth morn make</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
          <div class="card card-subject">
            <div class="card-subject__img">
              <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/subject-3.png') }}" alt="">
              <div class="card-subject__imgOverlay">
                <img src="{{ asset('web_asset/img/home/hover-icon.png') }}" alt="">
              </div>
            </div>
            <div class="card-subject__body">
              <h3><a href="#">Family Law</a></h3>
              <p>Dominion there fifth fowl eving heaven in life you're over us moved creepeth morn make</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
          <div class="card card-subject">
            <div class="card-subject__img">
              <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/subject-4.png') }}" alt="">
              <div class="card-subject__imgOverlay">
                <img src="{{ asset('web_asset/img/home/hover-icon.png') }}" alt="">
              </div>
            </div>
            <div class="card-subject__body">
              <h3><a href="#">Bank & Financial</a></h3>
              <p>Dominion there fifth fowl eving heaven in life you're over us moved creepeth morn make</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 text-center mt-5 pt-xl-4">
        <a class="button" href="#">View All Practices <span class="align-middle"><i class="ti-arrow-right"></i></span></a>
      </div>
    </div>
  </section>
  <!--================ Subject section end =================-->

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

  <!--================ Team section start =================-->  
  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-65px">
        <h2 class="section-intro__title">Meet Our Attorneys</h2>
        <p>Female divided bearing rule one called said Beginning set you living above saw seasons void created fruitful third years god.</p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
          <div class="card card-team">
            <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/team1.png') }}" alt="">
            <div class="card-team__body text-center">
              <h3><a href="#">James Barrel</a></h3>
              <p>Personal Lawyer</p>
              <ul class="card-team__social">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-instagram"></i></a></li>
                <li><a href="#"><i class="ti-skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
          <div class="card card-team">
            <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/team2.png') }}" alt="">
            <div class="card-team__body text-center">
              <h3><a href="#">Stephen Red</a></h3>
              <p>Personal Lawyer</p>
              <ul class="card-team__social">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-instagram"></i></a></li>
                <li><a href="#"><i class="ti-skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
          <div class="card card-team">
            <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/team3.png') }}" alt="">
            <div class="card-team__body text-center">
              <h3><a href="#">Matmex Sogan</a></h3>
              <p>Personal Lawyer</p>
              <ul class="card-team__social">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-instagram"></i></a></li>
                <li><a href="#"><i class="ti-skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-4 mb-xl-0">
          <div class="card card-team">
            <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/team4.png') }}" alt="">
            <div class="card-team__body text-center">
              <h3><a href="#">Richar Male</a></h3>
              <p>Personal Lawyer</p>
              <ul class="card-team__social">
                <li><a href="#"><i class="ti-facebook"></i></a></li>
                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                <li><a href="#"><i class="ti-instagram"></i></a></li>
                <li><a href="#"><i class="ti-skype"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Team section end =================-->  


  <!--================ Cta section start =================-->  
  <section class="section-padding--smaller cta-wrapper">
    <div class="container">
      <div class="cta__content text-center">
        <h2>Free Case Evaluation</h2>
        <p>Female divided bearing rule one called said Beginning set you living above saw seasons void created fruitful third years god.</p>
        <button class="button button-cta">Contact us Now</button>
      </div>
    </div>
  </section>
  <!--================ Cta section end =================-->  


  <!--================ Blog section start =================-->  
  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-65px">
        <h2 class="section-intro__title">Latest From Blog</h2>
        <p>Female divided bearing rule one called said Beginning set you living above saw seasons void created fruitful third years god.</p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-blog">
            <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/blog1.png') }}" alt="">
            <div class="card-blog__body">
              <h3><a href="#">Founder Defends Site After Shoot</a></h3>
              <ul class="card-blog__info">
                <li><a href="#"><i class="ti-notepad"></i>Feb 25 2018</a></li>
                <li><a href="#"><i class="ti-themify-favicon"></i>1 Comment</a></li>
              </ul>
              <p>Varius conubia a mauris litora lacus. Cubilia proin on  ornare et nunc dapibus vel rutrum augue facilisis malesuada et porta impe.</p>
            </div>
            <div class="card-blog__footer">
              <a href="#">Read More<i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-blog">
            <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/blog2.png') }}" alt="">
            <div class="card-blog__body">
              <h3><a href="#">Computer models to investors Short</a></h3>
              <ul class="card-blog__info">
                <li><a href="#"><i class="ti-notepad"></i>Feb 25 2018</a></li>
                <li><a href="#"><i class="ti-themify-favicon"></i>1 Comment</a></li>
              </ul>
              <p>Varius conubia a mauris litora lacus. Cubilia proin on  ornare et nunc dapibus vel rutrum augue facilisis malesuada et porta impe.</p>
            </div>
            <div class="card-blog__footer">
              <a href="#">Read More<i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card card-blog">
            <img class="card-img rounded-0" src="{{ asset('web_asset/img/home/blog3.png') }}" alt="">
            <div class="card-blog__body">
              <h3><a href="#">Computer models to investors Short</a></h3>
              <ul class="card-blog__info">
                <li><a href="#"><i class="ti-notepad"></i>Feb 25 2018</a></li>
                <li><a href="#"><i class="ti-themify-favicon"></i>1 Comment</a></li>
              </ul>
              <p>Varius conubia a mauris litora lacus. Cubilia proin on  ornare et nunc dapibus vel rutrum augue facilisis malesuada et porta impe.</p>
            </div>
            <div class="card-blog__footer">
              <a href="#">Read More<i class="ti-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ Blog section end =================-->  




@endsection