@extends('layouts.web_layout')

@section('title','Blog Detail')

@section('content')

    <!--================ Hero sm Banner start =================-->      
  <section class="hero-banner hero-banner--sm">
    <div class="hero-banner__content text-center">
      <h1>Blog Details</h1>
      <nav aria-label="breadcrumb" class="banner-breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
        </ol>
      </nav>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->


  <!--================Blog Area =================-->
	<section class="blog_area single-post-area section-margin">
			<div class="container">
					<div class="row">
							<div class="col-lg-12 posts-list">
									<div class="single-post row">
											<div class="col-lg-12">
													<div class="feature-img text-center">
															<img class="img-fluid" src="{{ asset('web_asset/img/blog/feature-img1.jpg') }}" alt="">
													</div>
											</div>
											<div class="col-lg-12 col-md-12 blog_details">
													<h2>Astronomy Binoculars A Great Alternative</h2>
													<p class="excert">
															MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
															on boot camp when you can get the MCSE study materials yourself at a fraction.
													</p>
													<p>
															Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
															camp when you can get the MCSE study materials yourself at a fraction of the camp price.
															However, who has the willpower to actually sit through a self-imposed MCSE training. who
															has the willpower to actually sit through a self-imposed
													</p>
													<p>
															Boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot
															camp when you can get the MCSE study materials yourself at a fraction of the camp price.
															However, who has the willpower to actually sit through a self-imposed MCSE training. who
															has the willpower to actually sit through a self-imposed
													</p>
											</div>
											<div class="col-lg-12">
													<div class="quotes">
															MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
															on boot camp when you can get the MCSE study materials yourself at a fraction of the camp
															price. However, who has the willpower to actually sit through a self-imposed MCSE training.
													</div>
													<div class="row">
                                                        <div class="row w-100 justify-content-center">
                                                            <div class="m-3">
                                                                    <img class="img-fluid" src="{{ asset('web_asset/img/blog/post-img1.jpg') }}" alt="">
                                                            </div w-100>
                                                            <div class="m-3">
                                                                    <img class="img-fluid" src="{{ asset('web_asset/img/blog/post-img2.jpg') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 mt-4">
                                                                <p>
                                                                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
                                                                        on boot camp when you can get the MCSE study materials yourself at a fraction of
                                                                        the camp price. However, who has the willpower.
                                                                </p>
                                                                <p>
                                                                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
                                                                        on boot camp when you can get the MCSE study materials yourself at a fraction of
                                                                        the camp price. However, who has the willpower.
                                                                </p>
                                                        </div>
													</div>
											</div>
									</div>
							</div>
													<p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should
															have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits
															detractors.
													</p>
													<div class="br"></div>
											</aside>
									</div>
							</div>
					</div>
			</div>
	</section>
	<!--================Blog Area =================-->



@endsection