@extends('frontend.layouts.master')


@section('content')
<section id="clinox-breadcrumb" class="clinox-breadcrumb-section position-relative top-position" data-background="frontend_assets/img/banner/team.jpg" style="height: 80vh;" >
	<div class="banner-shape position-absolute"><img src="frontend_assets/img/banner/s.png" class="img-fluid" alt=""></div>

	<div class="container">
		<div class="breadcrumb-content headline ul-li position-relative">
			<h2>TEAM</h2>
			<ul>
				<li><a href="/">Home</a></li>
				<li>Team</li>
			</ul>
		</div>
	</div>
</section>
   <!-- Start of Team section
	============================================= -->
	<section id="clinox-team" class="clinox-team-section">
		<div class="container">
			<div class="clinox-section-title headline text-center pera-content pr-text-in">
				<h3 class="sub-title d-inline-block">
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
								Our Team Members
							</span>
						</span>
					</span>
				</h3>
				<h2>
					<span class="pr-text-in_item1">
						<span class="pr-text-in_item2">
							<span class="pr-text-in_item3">
								Expert  <b>Staff.</b>
							</span>
						</span>
					</span>
				</h2>
			</div>
			<div class="clinox-team-content position-relative">
				<div class="clinox-team-slider-wrap">
					<div class="slider-inner-item">
						<div class="clinox-team-inner-item position-relative">
							<div class="inner-img">
								<img src="frontend_assets/img/banner/tes13.jpg" alt="">
							</div>
							<div class="inner-text-social position-absolute headline text-center" style="background-color: #0E3D4B;">
								<h3><a href="team-single.html">Ibrahim Khilji</a></h3>
								<span>Chief Executive Officer</span>

								
							</div>
						</div>
					</div>
					<div class="slider-inner-item">
						<div class="clinox-team-inner-item position-relative">
							<div class="inner-img">
								<img src="frontend_assets/img/banner/tes11.jpg" alt="">

							</div>
							<div class="inner-text-social position-absolute headline text-center" style="background-color: #0E3D4B;">
								<h3><a href="team-single.html">Naveed Ahmed</a></h3>
								<span>General Manager</span>
								
							</div>
						</div>
					</div>
					<div class="slider-inner-item">
						<div class="clinox-team-inner-item position-relative">
							<div class="inner-img">
								<img src="frontend_assets/img/banner/tes12.jpg" alt="">
							</div>
							<div class="inner-text-social position-absolute headline text-center" style="background-color: #0E3D4B;">
								<h3><a href="team-single.html">Ghufran Balghari</a></h3>
								<span>Director</span>
							
							</div>
						</div>
					</div>
				
				
				
				</div>
				<div class="carousel_nav">
					<button type="button" class="team_left_arrow"><i class="far fa-long-arrow-left"></i></button>
					<button type="button" class="team_right_arrow"><i class="far fa-long-arrow-right"></i></button>
				</div>
			</div>
		</div>
	</section>
    @endsection

  
