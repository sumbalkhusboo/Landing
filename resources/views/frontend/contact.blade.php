@extends('frontend.layouts.master')


@section('content')


   <!-- Start of Contact section
	============================================= -->
	<section id="clinox-breadcrumb" class="clinox-breadcrumb-section position-relative top-position" data-background="frontend_assets/img/banner/vf.jpg" style="height: 80vh;" >
		<div class="banner-shape position-absolute"><img src="frontend_assets/img/banner/s.png" class="img-fluid" alt=""></div>
	
		<div class="container">
			<div class="breadcrumb-content headline ul-li position-relative">
				<h2>Contact Us</h2>
				<ul>
					<li><a href="/">Home</a></li>
					<li>Contact us</li>
				</ul>
			</div>
		</div>
	</section>
	   <!-- Start of Contact section
		============================================= -->
		<section id="clinox-contact" class="clinox-contact-section">
			<div class="container">
				<div class="clinox-contact-content">
					<div class="row">
					
						<div class="col-lg-6">
							<div class="clinox-contact-form-wrap">
								<div class="clinox-section-title headline pera-content pr-text-in">
									<h3 class="sub-title d-inline-block">
										<span class="pr-text-in_item1">
											<span class="pr-text-in_item2">
												<span class="pr-text-in_item3">
													Register Here
												</span>
											</span>
										</span>
									</h3>
									<h2>
										<span class="pr-text-in_item1">
											<span class="pr-text-in_item2">
												<span class="pr-text-in_item3">
													Get In <b>Touch</b>
												</span>
											</span>
										</span>
									</h2>
								</div>
								@if (Session::has('status'))
								<div class="alert alert-{{ Session::get('status') }} border-0 bg-{{ Session::get('status') }} alert-dismissible fade show" id="dismiss">
									<div class="text-white">{{ Session::get('message')}}</div>
									<button type="button" class="btn-close" data-bs-dismiss="alert"
										aria-label="Close"></button>
										{{ Session::forget('status') }}
										{{ Session::forget('message') }}
								</div>
								@endif
								<div class="clinox-contact-form">
	
									<form action="{{route('insert-contact')}}" method="post">
										@csrf
										<div class="row">
											<div class="col-md-6">
												<input type="text" name="name" placeholder="Name" required>
											</div>
											<div class="col-md-6">
												<input type="email" name="email" placeholder="Email"required >
											</div>
	
											<div class="col-md-6">
												<input type="number" name="phone" placeholder="Phone"required maxlength="11",minlength="11">
											</div>
											
											<div class="col-md-6">
												<input type="text" name="city" placeholder="city"required>
											</div>
											<div class="col-md-12">
												<textarea name="your_massge" placeholder="Message"required></textarea>
											</div>
										</div>
										<button type="submit">Submit Now</button>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="clinox-contact-info-wrap headline">
								<h3>Contact Info</h3>
								<div class="clinox-contact-info">
									<div class="row">
										<div class="col-md-6">
											<div class="contact-info-item d-flex">
												<div class="inner-icon">
													<img src="frontend_assets/img/icon/ic15.png" alt="">
												</div>
												<div class="inner-text">
													<h4>Office Address:</h4>
													<span>Triangular Plaza street 14 main bostan khan road scheme 3 Rawalpindi</span>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="contact-info-item d-flex">
												<div class="inner-icon">
													<img src="frontend_assets/img/icon/ic16.png" alt="">
												</div>
												<div class="inner-text">
													<h4>Mail Us </h4>
													<span>info@econex.com.pk</span>
	
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="contact-info-item d-flex">
												<div class="inner-icon">
													<img src="frontend_assets/img/icon/ic17.png" alt="">
												</div>
												<div class="inner-text">
													<h4>Telephone</h4>
													<span>051-8908800</span>
	
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="contact-info-item d-flex">
												<div class="inner-icon">
													<img src="frontend_assets/img/icon/ic18.png" alt="">
												</div>
												<div class="inner-text">
													<h4>Opening Hour </h4>
													<span>09.00pm - 06.00pm
													Sunday Off</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="contact-map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6647.428551463927!2d73.0927684!3d33.586767099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38df95632affa477%3A0x4d9d28d2301330c6!2sEconex%20Sales%20and%20Marketing%20(Pvt.)Ltd!5e0!3m2!1sen!2s!4v1675340649317!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
<!-- End of Contact section
	============================================= -->








    @endsection
