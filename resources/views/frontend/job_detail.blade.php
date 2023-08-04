@extends('frontend.layouts.master')


@section('content')
<section id="clinox-breadcrumb" class="clinox-breadcrumb-section position-relative top-position" data-background="frontend_assets/jobs/0.png" style="height: 80vh;" >
	{{-- <div class="banner-shape position-absolute"><img src="frontend_assets/img/banner/s.png" class="img-fluid" alt=""></div> --}}
	{{-- <div class="container">
		<div class="breadcrumb-content headline ul-li position-relative">
			<h2>Jobs-Detail </h2>
			<ul>
				<li><a href="/">Jobs</a></li>
				<li>Jobs_Detail	</li>
			</ul>
		</div>
	</div> --}}
</section>
<section id="clinox-blog-details" class="clinox-blog-details-content page-section-padding">
    <div class="container">
        <div class="clinox-blog-details-content">
            <div class="row">
                <div class="col-lg-8">
                    <div class="clinox-blog-details-wrap">
                        <div class="clinox-blog-details-area  headline pera-content ul-li-block">
                            <div class="inner-img">
                                <img src="{{'frontend_assets/jobs/' . $job->job_image}}" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h3>{{ $job->job_title }}</h3>
                              
                                <div class="inner-meta-category d-flex align-items-center">
                                    <div class="inner-meta">
                                        <a href="#"><i class="fal fa-calendar-check"></i> {{$job->created_at}}</a>
                                        <a href="#"><i class="fal fa-user"></i> Admin</a>
                                    </div>
                                </div>
                                <p class="long-text">{{$job->job_description}} </p>
                                {{-- <p> {{$job->job_description}}</p> --}}
                                <a href="{{$job->job_link}}" style="background-color: #ff0027;" class="btn btn-danger" target="_blank">Apply Now</a>
                            </div>
                        </div>
                        {{-- <div class="clinox-blog-author d-flex">
                            <div class="inner-img">
                                <img src="{{ asset(imagePathServer().'new-assets/img/blog/ba1.jpg') }}" alt="">
                            </div>
                            <div class="inner-text headline pera-content">
                                <h4>About Admin</h4>
                                <p>Neque porro quisquam est, qui is dolor emr ipsum quia dolor sit amet  the consec tetur is adipisci velit,sed the quam. </p>
                            </div>
                        </div>
                        <div class="blog_comment_box headline">
                            <h3>03 Comments</h3>
                            <div class="comment_box_area ul-li-block">
                                <ul class="comment_itemlist">
                                    <li>
                                        <div class="comment_element d-flex position-relative">
                                            <div class="comment_img">
                                                <img src="{{ asset(imagePathServer().'new-assets/img/blog/ca1.jpg') }}" alt="">
                                            </div>
                                            <div class="comment_content pera-content">
                                                <h4><a href="#">Hurram Hatun</a></h4>
                                                <span>19th May 2018</span>
                                                <p>Neque porro quisquam est, qui is dolor emr ipsum quia dolor sit amet  the consec tetur is adipisci velit, sed Neque porro.</p>
                                            </div>
                                            <div class="reply-btn position-absolute"><a href="#"> Reply</a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="comment_element d-flex position-relative">
                                            <div class="comment_img">
                                                <img src="{{ asset(imagePathServer().'new-assets/img/blog/ca1.jpg') }}" alt="">
                                            </div>
                                            <div class="comment_content pera-content">
                                                <h4><a href="#">Hurram Hatun</a></h4>
                                                <span>19th May 2018</span>
                                                <p>Neque porro quisquam est, qui is dolor emr ipsum quia dolor sit amet  the consec tetur is adipisci velit, sed Neque porro.</p>
                                            </div>
                                            <div class="reply-btn position-absolute"><a href="#"> Reply</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <h3>Leave A Reaply</h3>
                            <div class="comment_formfield">
                                <div class="clinox-contact-form">
                                    <form action="#" method="get">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" name="name" placeholder="Name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                            <div class="col-md-12">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <button type="submit">Submit Now</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="clinox-blog-sidebar  top-sticky-sidebar">
                        <div class="clinox-side-bar-widget headline">
                            <div class="recent-post-widget">
                                <h3 class="widget-title">Latest jobs</h3>
                                <div class="recent-post-wrap">
                                    @foreach($jobs as $job)
                                        <div class="recent-blog-img-text d-flex  align-items-center">
                                            <div class="recent-blog-img">
                                                <a href="Job-Detail?id={{$job->id}}">
                                                    <img src="{{'frontend_assets/jobs/' . $job->job_image}}" alt="">
                                                </a>
                                            </div>
                                            <div class="recent-blog-text headline">
                                                <h3><a href="Job-Detail?id={{$job->id}}">{{ $job->job_title }}</a></h3>
                                                <span><i class="far fa-calendar-alt"></i> {{ $job->created_at }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 