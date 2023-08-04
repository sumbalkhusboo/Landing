@extends('frontend.layouts.master')


@section('content')
<section id="clinox-breadcrumb" class="clinox-breadcrumb-section position-relative top-position" data-background="frontend_assets/img/banner/d.png" style="height: 80vh;" >
	<div class="banner-shape position-absolute"><img src="frontend_assets/img/banner/s.png" class="img-fluid" alt=""></div>
	<div class="container">
		<div class="breadcrumb-content headline ul-li position-relative">
			<h2>FAQ </h2>
			<ul>
				<li><a href="/">Home</a></li>
				<li>FAQ	</li>
			</ul>
		</div>
	</div>
</section>
<!-- Start of faq section
	============================================= -->
	<section id="clinox-faq" class="clinox-faq-section">
		<div class="container">
			<div class="clearfix-faq-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="clinox-faq-img-wrap position-relative">
							<span class="bg-shape position-absolute"></span>
							<div class="faq-img1 bg-img-area">
								<img src="frontend_assets/img/about/22.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="clinox-faq-text-wrapper">
							<div class="clinox-section-title headline pera-content pr-text-in">
								<h3 class="sub-title d-inline-block">
									<span class="pr-text-in_item1">
										<span class="pr-text-in_item2">
											<span class="pr-text-in_item3">
												Any Question
											</span>
										</span>
									</span>
								</h3>
								<h2>
									<span class="pr-text-in_item1">
										<span class="pr-text-in_item2">
											<span class="pr-text-in_item3">
												Do You Have Any  <b>Question?</b>
											</span>
										</span>
									</span>
								</h2>
							</div>
							<div class="clinox-faq-accordion">
								<div class="accordion" id="accordionExample2">
									<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
										<h2 class="accordion-header" id="headingOne2">
											<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true">
												What is Econex?
											</button>
										</h2>
										<div id="collapseOne2" class="accordion-collapse collapse show" aria-labelledby="headingOne2" data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												ECONEX is a sales and marketing company. We mainly deal in ECONEX
online store, discover, branding, ECONEX Pro and Learning Management
System, founded by Ibrahim Khilji in July 2019. ECONEX endeavor to
promote E-commerce and drop shipping in Pakistan by providing a platform
that works both ways. People who are looking to expand their business
opportunities or work part-time and consumers can connect through
ECONEX-The Economy of Next Generation.
											</div>
										</div>
									</div>
									<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
										<h2 class="accordion-header" id="headingTwo2">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo2" aria-expanded="false">
												Econex Ka kitna Projects hain our konsy hain?
											</button>
										</h2>
										<div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2" data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												<a href="https://www.youtube.com/watch?v=r4XzQBNjKuM" target="_blank" class="btn btn-dark" style="color:white ; background-color:#0E3D4B;
												border-color:#ff0027">Click Here To Watch Video</a>
											</div>
										</div>
									</div>
									<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
										<h2 class="accordion-header" id="headingThree2">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" >
												Econex main Kam Kaisa Karna hai?
											</button>
										</h2>
										<div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												<a href="https://www.youtube.com/watch?v=quskxAfD8xc" target="_blank" class="btn btn-dark"style="color:white ; background-color:#0E3D4B;
												border-color:#ff0027">Click Here To Watch Video</a>
											</div>
										</div>
									</div>
									<div class="accordion-item headline-2 pera-content wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms">
										<h2 class="accordion-header" id="headingFour">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false">
												Econex MLM aur Referal Marketing Nahi Hai to Kiya Hai?
											</button>
										</h2>
										<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample2">
											<div class="accordion-body">
												<a href="https://www.youtube.com/watch?v=cq8CsWZnKmc" target="_blank" class="btn btn-dark"style="color: white ; background-color:#0E3D4B;
												border-color:#ff0027">Click Here To Watch Video</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	

    <!-- Start of Fun Fact section data-background="frontend_assets/img/bg/fun-bg.jpg"
	============================================= -->
	<section id="clinox-fun-fact" class="clinox-fun-fact-section position-relative">
		<div class="banner-shape position-absolute"><img src="frontend_assets/img/banner/2.png" alt=""></div>
		<div class="container">
			<div class="clinox-fun-fact-content position-relative">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="clinox-fun-fact-item headline pera-content d-flex justify-content-center">
							<div class="inner-text-counter">
								<h3><span>{{ $history->project}}</span></h3>
								<p>Projects</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="clinox-fun-fact-item headline pera-content d-flex justify-content-center">
							<div class="inner-text-counter">
								<h3><span>{{ $history->happy_client}}</span>+</h3>
								<p>Happy Clients</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="clinox-fun-fact-item headline pera-content d-flex justify-content-center">
							<div class="inner-text-counter">
								<h3><span>{{ $history->hour_of_support}}/7</h3>
								<p>Hours Of Support</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="clinox-fun-fact-item headline pera-content d-flex justify-content-center">
							<div class="inner-text-counter">
								<h3><span></span>{{ $history->hard_worker}}+</h3>
								<p>Econex Family</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<!-- End of Fun Fact section
	============================================= -->

    <div class="row">
					<div class="col-lg-3 col-md-6">

					</div>
					<div class="col-lg-3 col-md-6">

					</div>
					<div class="col-lg-3 col-md-6">

					</div>
					<div class="col-lg-3 col-md-6">

					</div>
                    <hr>
				</div>



    @endsection
