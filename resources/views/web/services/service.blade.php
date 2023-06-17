@extends('layouts.web_layout')

@section('title','Services')

@section('content')
    
    <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm">
    <div class="hero-banner__content text-center">
      <h1>Our Services</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Our Services</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->


  <section class="section-margin">
    <div class="container">
      <div class="section-intro text-center pb-65px">
        <h2 class="section-intro__title">Our Practice Area</h2>
        <p>Female divided bearing rule one called said Beginning set you living above saw seasons void created fruitful third years god.</p>
      </div>
      <div class="row mb-60px">
        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
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

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
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

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
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

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
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

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
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

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
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

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
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

        <div class="col-sm-6 col-lg-4 col-xl-3 mb-5">
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
    </div>
  </section>


@endsection