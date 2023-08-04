@extends('frontend.layouts.master')


@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js">
	</script>
	<style>
	.lightbox-gallery{background-image: linear-gradient(#0E3D4B, #E53935);background-repeat: no-repeat;color: #000;overflow-x: hidden}.lightbox-gallery p{color:#fff}.lightbox-gallery h2{font-weight:bold;margin-bottom:40px;padding-top:40px;color:#fff}@media (max-width:767px){.lightbox-gallery h2{margin-bottom:25px;padding-top:25px;font-size:24px}}.lightbox-gallery .intro{font-size:16px;max-width:500px;margin:0 auto 40px}.lightbox-gallery .intro p{margin-bottom:0}.lightbox-gallery .photos{padding-bottom:20px}.lightbox-gallery .item{padding-bottom:30px}
	.main-posts {
    position: relative;
    z-index: 6;
}

.post-masonry {
    margin-bottom: 30px;
}

.post-masonry .post-thumb {
    border: 10px solid #fff;
    overflow: hidden;
    position: relative;
}

.post-masonry .post-thumb img {
    width: 100%;
    display: block;
}

.post-masonry .post-thumb .title-over {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0,0,0,0.9);
    padding: 15px 20px;
}

.post-masonry .post-thumb .title-over h4 {
    font-size: 16px;
    font-family: 'robotoregular';
}

.post-masonry .post-thumb .title-over a {
    color: #fff;
}

.post-masonry .post-thumb .post-hover {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 70px;
    left: 0;
    visibility: hidden;
    opacity: 0;
    background: rgba(0,0,0,0.9);
    -webkit-transition: all 150ms ease-in-out;
    -moz-transition: all 150ms ease-in-out;
    -ms-transition: all 150ms ease-in-out;
    -o-transition: all 150ms ease-in-out;
    transition: all 150ms ease-in-out;
}

.post-masonry .post-thumb .post-hover .inside {
    position: relative;
    top: 50%;
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
}

.post-masonry .post-thumb .post-hover h4 {
    font-size: 16px;
    font-family: 'robotoregular';
    margin-bottom: 10px;
}

.post-masonry .post-thumb .post-hover a {
    color: #fff !important;
}

.post-masonry .post-thumb .post-hover i {
    display: block;
    margin-bottom: 10px;
}

.post-masonry .post-thumb .post-hover p {
    font-size: 12px;
}

.post-masonry .post-thumb .post-hover span {
    font-size: 12px;
    margin-bottom: 15px;
    display: block;
}

.post-masonry .post-thumb:hover .title-over {
    -webkit-transition: all 150ms ease-in-out;
    -moz-transition: all 150ms ease-in-out;
    -ms-transition: all 150ms ease-in-out;
    -o-transition: all 150ms ease-in-out;
    transition: all 150ms ease-in-out;
    visibility: hidden;
    opacity: 0;
    bottom: -50px;
}

.post-masonry .post-thumb:hover .post-hover {
    top: 0;
    visibility: visible;
    opacity: 1;
}

	</style>

<!-- Start of About section
	============================================= -->
	<section id="clinox-breadcrumb" class="clinox-breadcrumb-section position-relative top-position" data-background="frontend_assets/img/banner/c4.jpg" style="height: 80vh;" >
		<div class="banner-shape position-absolute"><img src="frontend_assets/img/banner/s.png" class="img-fluid" alt=""></div>
	
		<div class="container">
			<div class="breadcrumb-content headline ul-li position-relative">
				<h2>Gallery </h2>
				<ul>
					<li><a href="/">Home</a></li>
					<li>Gallery</li>
				</ul>
			</div>
		</div>
	</section>
	



  
  
	
				
			

	<br>
	<div class="clinox-section-title text-center headline pera-content pr-text-in">
		<h3 class="sub-title d-inline-block">
			<span class="pr-text-in_item1">
				<span class="pr-text-in_item2">
					<span class="pr-text-in_item3">
						Our Gallery
					</span>
				</span>
			</span>
		</h3>
		<h2>
			<span class="pr-text-in_item1">
				<span class="pr-text-in_item2">
					<span class="pr-text-in_item3">
						
						<b> Gallery.</b>
					</span>
				</span>
			</span>
		</h2>
	</div>
	
					
					
	
	
	<!-- Start of About section
		============================================= -->
		
		
		
			
		<br>
		<br>
        <div class="main-posts">
            <div class="container">
                <div class="row">
                    <div class="blog-masonry masonry-true">
						@foreach($galleries as $gallery)
       
                        <div class="post-masonry col-md-4 col-sm-6">
                            <div class="post-thumb">
                                <img src="{{'frontend_assets/jobs/'. $gallery->image}}"class="img-fluid img-thumbnail" width="400px"  alt="" >
                                <div class="title-over">
                                    <h4><a href="{{'frontend_assets/jobs/'. $gallery->image}}" data-rel="lightbox" class="fa fa-expand"></a></h4>
                                </div>
                                <div class="post-hover text-center">
                                    
                                </div>
                            </div>
                        </div>
						@endforeach
					</div>
				</div>
			</div>
		</div>





		
		<div class="lightbox-gallery">
			<div
id="carouselMultiItemExample"
class="carousel slide carousel-dark text-center"
data-mdb-ride="carousel"
>
<!-- Controls -->

<!-- Inner -->
<div class="carousel-inner py-4">
  <!-- Single item -->
  <div class="carousel-item active">
    <div class="container">
      <div class="row">
		@foreach($galleries as $gallery)
       
                           
						<div class="hex col-sm-6  templatemo-hex-top4">
							<div>
							  <div class="hexagon hexagon2 gallery-item">
								<div class="hexagon-in1">
									<img src="{{'frontend_assets/jobs/'. $gallery->image}}"class="img-fluid img-thumbnail" width="400px"  alt="" >
										  <div class="overlay">
											<a href="{{'frontend_assets/jobs/'. $gallery->image}}" data-rel="lightbox" class="fa fa-expand"></a>
										</div>
								  </div>
								</div>
							  </div>
							</div>
					
     @endforeach
      </div>
    </div>
  </div>
</div>

<!-- Inner -->
</div>
		</div>
		<br>		<br>
	
	
	
	
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	  
	  
		
					
				
	
		
	

	
	



@endsection

