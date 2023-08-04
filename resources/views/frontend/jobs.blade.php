@extends('frontend.layouts.master')


@section('content')
<section id="clinox-breadcrumb" class="clinox-breadcrumb-section position-relative top-position" data-background="frontend_assets/jobs/job1.png" style="height: 80vh;" >
	<div class="banner-shape position-absolute"><img src="frontend_assets/img/banner/s.png" class="img-fluid" alt=""></div>
	<div class="container">
		<div class="breadcrumb-content headline ul-li position-relative">
			<h2>JOBS </h2>
			<ul>
				<li><a href="/">Home</a></li>
				<li>Jobs</li>
			</ul>
		</div>
	</div>
</section>
<section id="clinox-service-3" class="clinox-service-section-3">
    <div class="container">
        <div class="clinox-section-title headline text-center pera-content pr-text-in">
            <h3 class="sub-title d-inline-block">
                <span class="pr-text-in_item1">
                    <span class="pr-text-in_item2">
                        <span class="pr-text-in_item3">
                            OUR JOBS
                        </span>
                    </span>
                </span>
            </h3>

            
            <h2>
                <span class="pr-text-in_item1">
                    <span class="pr-text-in_item2">
                        <span class="pr-text-in_item3">
                            Jobs  <b>Detail.</b>
                        </span>
                    </span>
                </span>
            </h2>
        </div>
        <div class="clinox-service-content-3 position-relative">
            <div class="clinox-service-slider-3">
                @foreach ($jobs as $job)

                <div class="clinox-slider-item-3">
                    <div class="clinox-service-item-3 text-center position-relative">
                        <div class="inner-img-icon-wrap  position-relative">
                            <div class="inner-img  position-relative">
                                <img src="{{'frontend_assets/jobs/' . $job->job_image}}" alt="">
                            </div>
                            <div class="inner-icon d-flex justify-content-center align-items-center position-absolute">
                                <img src="frontend_assets/img/img-5/icon/ic3.png" alt="">
                            </div>
                        </div>
                        <div class="inner-text headline pera-content">
                            <h3><a href="service-single.html">{{$job->job_title}} </a></h3>
                          
                        </div>
						{{-- <a href="Job-Detail?id={{$job->id}}" style="background-color: #ff0027;" class="btn btn-danger" target="_blank">View Detail</a> --}}
                        
                        <a href="{{$job->job_link}}" style="background-color: #ff0027;" class="btn btn-danger" target="_blank">Apply Now</a>
                    </div>
                    
                </div>
              @endforeach     
            </div>
            <div class="carousel_nav">
                <button type="button" class="ser3_left_arrow"><i class="far fa-long-arrow-left"></i></button>
                <button type="button" class="ser3_right_arrow"><i class="far fa-long-arrow-right"></i></button>
            </div>
        </div>
       
    </div>
</section>	
	
@endsection 