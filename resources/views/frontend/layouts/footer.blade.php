<!-- Start of Footer section
	============================================= -->
	<style>
		
element.style {
    color: #ff0027;
}
</style>
	<footer id="clinox-footer-1" class="clinox-footer-section-1" data-background="frontend_assets/img/banner/h.png" style='background-image:url("frontend_assets/img/banner/s.png");'>
		
		<div class="container">
		   
		   
		   <div>
		   <div class="clinox-footer-widget-wrapper">
			   <div class="row">
		   <div class="logo-widget">
		   
			   
		   </div>
		   
		   <div class="col-lg-3 col-md-6 footer__col mt-30">
			   
			   <div class="footer__widget">
				   <h3>About Us</h3>
				   <p class="text-white">Econex, being the trusted online shop worldwide, aims to provide a
					trouble-free shopping experience for people all over the world. Moreover, 
					it offers an opportunity for international online shopping from Econex.</p>
				   
						   
						   <h4 class="f-text mt-35">
							   <img src="assets/img/icon/fire.png" alt="">
							   <span class="text-white">We provide fast <span>ECONEX</span> Services.</span>
						   </h4>
					   
			   </div>
		   </div>
		   <div class="col-lg-3 col-md-6 footer__col mt-30">
			   <div class="footer__widget">
				   <h3>Important Links</h3>
				   <ul class="footer__links list-unstyled">
					   <li><a href="#" class="text-white">Home</a></li>
					   <li><a href="{{ route('about-us') }}" class="text-white">About Us</a></li>
					   <li><a href="{{ route('projects') }}" class="text-white">Projects</a></li>
					   <li><a href="{{ route('team') }}" class="text-white">Team</a></li>
					   <li><a href="{{ route('faq') }}" class="text-white">F.A.Q</a></li>
					   <li><a href="{{ route('gallery') }}" class="text-white">Gallery</a></li>
				   </ul>
			   </div>
		   </div>
		   <div class="col-lg-3 col-md-6 footer__col mt-30">
			   <div class="footer__widget" >
				   <h3>We’d like to Talk</h3>
				   <p class="text-white">Get All The Latest Information On, Events Sales And Offers </p>
			   </div>
		   </div>
		   <div class="col-lg-3 col-md-6 footer__col mt-30">
			   <div class="footer__widget" >
				   <h3>Our Information</h3>
				  
				   <ul class="footer__info list-unstyled mt-35"  class="text-white">
					   <li  class="text-white"  style="color:white;"><i class="far fa-map-marker-alt"></i>1st Floor, Triangular Plaza, Street No 14, Bostan khan Road Scheme 3, Rawalpindi</li>
					   <li class="text-white">
						<a href="tel:051-8908800">
							<i class="fa fa-phone"></i> 051-8908800
						</a>
					   </li>
					<li class="text-white">
						<a href="mailto:info@econex.com.pk">
							<i class="fa fa-envelope"></i>  info@econex.com.pk
						</a>
						{{-- <i class="far fa-envelope-open-text"></i> --}}
						
					  </li>
				   </ul>
				   
			   </div>
		   </div>
	   </div>
	   
   </div>
   <div class="clinox-copyright-wrap text-center" style="background-color: #ff0027;">
	   Copyright © 2023 Econex. All rights reserved.
   </div>
</footer>
<!-- End of Footer section
	============================================= -->

	<!-- For Js Library -->
	<script src="{{asset('frontend_assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('frontend_assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend_assets/js/popper.min.js')}}"></script>
	<script src="{{asset('frontend_assets/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('frontend_assets/js/appear.js')}}"></script>
	<script src="{{asset('frontend_assets/js/slick.js')}}"></script>
	<script src="{{asset('frontend_assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{asset('frontend_assets/js/waypoints.min.js')}}"></script>
	<script src="{{asset('frontend_assets/js/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('frontend_assets/js/jquery.filterizr.js')}}"></script>
	<script src="{{asset('frontend_assets/js/wow.min.js')}}"></script>
	<script src="{{asset('frontend_assets/js/gmap3.min.js')}}"></script>
	<script src='http://maps.google.com/maps/api/js?key=AIzaSyB6w8j2weabWNNnmQbh4Vsi2-sd7Sqv5zM&#038;ver=5.3.2'></script>
	<script src="{{asset('frontend_assets/js/script.js')}}"></script>
	<script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

<script >
	function openmeny()
	{
		$('.mobile_menu_overlay').css("visibility", "visible");
		
		$('.mobile_menu_content').show();
	}

	function closemeny()
	{
		$('.mobile_menu_overlay').css("visibility", "hidden");
		
		$('.mobile_menu_content').hide();
	}

	

</script>


<script type="text/javascript">
// Hide the extra content initially, using JS so that if JS is disabled, no problemo:
            $('.read-more-content').addClass('hide_content')
            $('.read-more-show, .read-more-hide').removeClass('hide_content')

            // Set up the toggle effect:
            $('.read-more-show').on('click', function(e) {
              $(this).next('.read-more-content').removeClass('hide_content');
              $(this).addClass('hide_content');
              e.preventDefault();
            });

            // Changes contributed by @diego-rzg
            $('.read-more-hide').on('click', function(e) {
              var p = $(this).parent('.read-more-content');
              p.addClass('hide_content');
              p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
              e.preventDefault();
            });
</script>
<script>
    function toggleContent() {
      var content = document.querySelector('.content');
      var additionalContent = document.querySelector('.additional-content');
      var btn = document.querySelector('.read-more-btn');
      
      if (content.classList.contains('expanded')) {
        content.classList.remove('expanded');
        additionalContent.style.display = 'none';
        btn.textContent = 'Read More';
      } else {
        content.classList.add('expanded');
        additionalContent.style.display = 'block';
        btn.textContent = 'Read Less';
      }
    }
  </script>










