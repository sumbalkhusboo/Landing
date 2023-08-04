<style type="text/css">
	#img1{
		color: white;
	}
	#parent_div1 {
	  display: inline-block;
	  cursor: pointer;
	}
	#parent_div1:hover #img1 {
	  display: none !important;
	}
	
	#parent_div1:hover #img2 {
	  display: inline-block;
	}
	#img2{
		display:none;
	}
	
	#img3{
		color: white;
	}
	#parent_div2 {
	  display: inline-block;
	  cursor: pointer;
	}
	#parent_div2:hover #img3 {
	  display: none !important;
	}
	
	#parent_div2:hover #img4 {
	  display: inline-block;
	}
	#img4{
		display:none;
	}
	
	#img5{
		color: white;
	}
	#parent_div3 {
	  display: inline-block;
	  cursor: pointer;
	}
	#parent_div3:hover #img5 {
	  display: none !important;
	}
	
	#parent_div3:hover #img6 {
	  display: inline-block;
	}
	#img6{
		display:none;
	}
	
	#img7{
		color: white;
	}
	#parent_div4 {
	  display: inline-block;
	  cursor: pointer;
	}
	#parent_div4:hover #img7 {
	  display: none !important;
	}
	
	#parent_div4:hover #img8 {
	  display: inline-block;
	}
	#img8{
		display:none;
	}
	</style>
@extends('frontend.layouts.master')


@section('content')
<section id="clinox-breadcrumb" class="clinox-breadcrumb-section position-relative top-position" data-background="frontend_assets/img/banner/pp.jpg" style="height: 80vh;" >
	<div class="banner-shape position-absolute"><img src="frontend_assets/img/banner/s.png" class="img-fluid" alt=""></div>
	<div class="container">
		






		<div class="breadcrumb-content headline ul-li position-relative">
			<h2>Projects</h2>
			<ul>
				<li><a href="/">Home</a></li>
				<li>Projects</li>
			</ul>
		</div>
	</div>
</section>
   <!-- Start of Team section
	============================================= -->
	<section id="clinox-service" class="clinox-service-section">
		<div class="container">
			<div class="clinox-section-title text-center headline pera-content pr-text-in">
				
				<h2>
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
                                  Our
								<b> Projects.</b>
							</span>
						</span>
					</span>
				</h2>
			</div>
			<div class="container">
			<div class="clinox-service-feed-content">
				<div class="row">
					<div class="col-lg-3 col-md-6" id='parent_div1'>
						<div class="service__item" style="height: 35rem;" >
							<div class="service__icon">
								
								<div class="icon-container inner-icon d-flex justify-content-center align-items-center">
									
									<img src="frontend_assets/img/icon/econex1.png"  id='img1'>
									<img src="frontend_assets/img/icon/1c.png" id='img2'width="50px" height="45px">
								</div>
							</div>
							<h3 class="service__title"><a href="#">Shop</a></h3>
							<p>An online store is a project by Econex that provides a convenient way to shop
								for items, allows people to find items they may not be able to find in physical
								stores, and helps people save money. The store can also support small
								businesses and create jobs in the community.</p>
								<br>
								
								<a class="read-more d-flex justify-content-center align-items-center"target="-blank" href="https://econex.pk/"style="background-color:#ff0027;color: #fff;">View Details</a>
							<a class="service__link" href="#!" style="background-color: #ff0027;"></a>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-6"id='parent_div2'>
						<div class="service__item" style="height: 35rem;">
							<div class="service__icon">
								<div class="inner-icon d-flex justify-content-center align-items-center">
									<img src="frontend_assets/img/icon/dnex.png"  id='img3'>
									<img src="frontend_assets/img/icon/3c.png" id='img4'width="50px" height="45px">
									
								</div>
							</div>
							<h3 class="service__title"><a href="#">Dnex</a></h3>
							<p>We create various bundles to sell products and services online,
								enabling our community members to utilize the technique of 'direct sale'
							   and earn a handsome commission. This reduces the cost of a middleman,
								and the savings are turned into commission, which is then divided among
							   teams in favor of their selling efforts."
							   </p>
								<a class="read-more d-flex justify-content-center align-items-center" target="-blank" href="https://dnex.pk/"style="background-color:#ff0027;color: #fff;">View Details</a>
								<a class="service__link" href="#!" style="background-color: #ff0027;"></a>
						</div>
					</div>
					<div class="col-lg-3 col-md-6"id='parent_div3'>
						<div class="service__item" style="height: 35rem;">
							<div class="service__icon">
								<div class="inner-icon d-flex justify-content-center align-items-center">
									<img src="frontend_assets/img/icon/pnex.png"  id='img5'>
									<img src="frontend_assets/img/icon/4c.png" id='img6'width="50px" height="45px">
									
								</div>
							</div>
							<h3 class="service__title"><a href="#">Pnex</a></h3>
							<p>The purpose of Pnex is to provide solution to all problems related to real estate along with educating people 
								the new ways they can adapt to outperform in the real estate business in Pakistan.
								We aim to create opportunities for people who wanted to reach the next level in the sector.</p>
								<br>
								<a class="read-more d-flex justify-content-center align-items-center" target="-blank" href="https://pnex.pk/"style="background-color:#ff0027;color: #fff;">View Details</a>
								<a class="service__link" href="#!" style="background-color: #ff0027;"></a>
						</div>
					</div>

                    <div class="col-lg-3 col-md-6"id='parent_div4'>
						<div class="service__item" style="height: 35rem;">
							<div class="service__icon">
								<div class="inner-icon d-flex justify-content-center align-items-center">
									<img src="frontend_assets/img/icon/enex.png"  id='img7'>
									<img src="frontend_assets/img/icon/2c.png" id='img8'width="50px" height="45px">
									
								</div>
							</div>
							<h3 class="service__title"><a href="#">Enex</a></h3>
							<p>We provide online skills development training and educate our community
								members about various skills that they can utilize in the future to earn
								handsome earnings.</p>
								<br>
						<br>
						<br>
						<br>
						<br>
						
						
								<a class="read-more d-flex justify-content-center align-items-center" target="-blank" href="https://enex.pk/"style="background-color:#ff0027;color: #fff;">View Details</a>
								<a class="service__link" href="#!" style="background-color: #ff0027;"></a>
						</div> 
						
					</div>


				</div>
			</div>
		</div>
		</div>
	</section>
	

    @endsection

