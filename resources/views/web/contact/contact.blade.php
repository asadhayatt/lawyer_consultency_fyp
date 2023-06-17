@extends('layouts.web_layout')

@section('title','Contact')

@section('content')


  <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm">
    <div class="hero-banner__content text-center">
      <h1>Contact Us</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->


  
  <!-- ================ contact section start ================= -->
  <section class="section-margin--large">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Lahore Pakisatan</h3>
              <p>Gulberg 3 Branch</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          @if (Session::has('success'))
              <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{ Session::get('success') }}</h4>
              </div>            
          @endif
          <form action="{{ url('store-contact') }}" class="form-contact contact_form" method="POST">
           @csrf
            <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input class="form-control" name="email" id="email" type="email" placeholder="Enter email address">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input class="form-control" name="phone" id="subject" type="number" placeholder="Enter mumber">
                    </div>
                  </div> 
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 m-0 p-0">
                    <div class="form-group">
                      <textarea class="form-control  w-100" name="message" id=""  placeholder="Enter Message"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button-contactForm">Send Message</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->


 
@endsection
