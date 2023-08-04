

<!-- Start of header section
	============================================= -->
	<header id="clinox-header" class="clinox-header-section  header-style-one">
		
		<div class="clinox-header-logo-cta">
			<div class="container">
				<div class="clinox-header-logo-cta-content d-flex">
					<div class="brand-logo">
						<a href="http://localhost/landing/public/"><img src="frontend_assets/img/logo/dark-logo.png" alt="" style="width: 166px;"></a>
					</div>
					<div class="header-cta-wrapper d-flex justify-content-between">
						<div class="header-info-item d-flex align-items-center position-relative">
							
						</div>
						<div class="header-info-item d-flex align-items-center position-relative">
							
							<div class="hd-item-icon">
								<img src="frontend_assets/img/icon/mail.png" alt="">
							</div>
							<div class="hd-item-meta">
								<label>Email us</label>
								<span><a href="mailto:info@econex.com.pk">
									<i class="fa fa-envelope"></i>  info@econex.com.pk
								</a></span>
							</div>
						</div>
						<div class="header-info-item d-flex align-items-center position-relative">
							<div class="hd-item-icon">
								<img src="frontend_assets/img/icon/call.png" alt="">
							</div>
							<div class="hd-item-meta">
								<label>Contact us</label>
								<span><a href="tel:051-8908800">
									<i class="fa fa-phone"></i> 051-8908800
								</a></span>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-navigation-content-wrapper" >
			<div class="container">
				<div class="header-navigation-content align-items-center d-flex justify-content-between" style="background-color: #ff0027;">
					<div class="sticky-brand-logo">
						<a href="#"><img src="frontend_assets/img/logo/" alt=""></a>
					</div>
					<nav class="main-navigation clearfix ul-li" >
						<ul id="main-nav" class="nav navbar-nav clearfix">

                            <li><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('about-us') }}">About Us</a></li>

                            <li><a href="{{ route('projects') }}">Projects</a></li>
							<li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                             <li><a href="{{ route('faq') }}">F.A.Qs</a></li>
							 <li><a href="{{ route('job') }}">Jobs</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
							<li><a href="{{ route('login') }}">login</a></li>

						</ul>
					</nav>
					{{-- <div class="header-cart-btn-search align-items-center d-flex">
						<div class="h-search">
							<button class="search-box-outer"><i class="far fa-search"></i></button>
						</div>
						<div class="h-cart-btn d-flex justify-content-center align-items-center">
							<button class="or-canvas-cart-trigger"><i class="fas fa-shopping-bag"></i></button>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
		<div class="mobile_menu">
			<div class="mobile_menu_button open_mobile_menu" onclick="openmeny()">
				<i class="fal fa-bars"></i>
			</div>
			<div class="mobile_menu_wrap">
				<div class="mobile_menu_overlay open_mobile_menu"></div>
				<div class="mobile_menu_content">
					<div class="mobile_menu_close open_mobile_menu"  onclick="closemeny()">
						<i class="fal fa-times"></i>
					</div>
					<div class="m-brand-logo">
						<a  href="!#"><img src="frontend_assets/img/logo/dark-logo.png" alt=""></a>
					</div>
					<nav class="mobile-main-navigation  clearfix ul-li">
						<ul id="m-main-nav" class="nav navbar-nav clearfix">
							<li><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('about-us') }}">About Us</a></li>

                            <li><a href="{{ route('projects') }}">Projects</a></li>
							<li><a href="{{ route('gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('team') }}">Team</a></li>
                             <li><a href="{{ route('faq') }}">F.A.Q</a></li>
							 <li><a href="{{ route('job') }}">Jobs</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        
						</ul>
					</nav>
				</div>
			</div>
			<!-- /Mobile-Menu -->
		</div>
	</header>
	<!-- Search PopUp -->
	<div class="search-popup">
		<button class="close-search style-two"><span class="fal fa-times"></span></button>
		<button class="close-search"><span class="fa fa-arrow-up"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
		</form>
	</div>
	<!-- Off canvas Cart -->
	<div class="or-ofcanvas-cart-wrapper">
		<div class="or-ofcanvas-cart-content">
			<div class="title-area d-flex justify-content-between align-items-center">
				<div class="cart-title">
					<span>Cart</span>
				</div>
				<div class="cart-close">
					<button class="or-canvas-cart-trigger"><i class="fal fa-times"></i></button>
				</div>
			</div>
			<div class="or-ofcart-product-wrapper">
				<div class="or-ofcart-product-item d-flex align-items-center position-relative">
					<div class="pro-remove position-absolute"><i class="fal fa-times"></i></div>
					<div class="or-ofcart-product-img">
						<img src="frontend_assets/img/shop/pro1.jpg" alt="">
					</div>
					<div class="or-ofcart-product-text headline">
						<h3><a href="#">Biovert Cleaner</a></h3>
						<span>1 x $4.00</span>
					</div>
				</div>
				<div class="or-ofcart-product-item d-flex align-items-center position-relative">
					<div class="pro-remove position-absolute"><i class="fal fa-times"></i></div>
					<div class="or-ofcart-product-img">
						<img src="frontend_assets/img/shop/pro2.jpg" alt="">
					</div>
					<div class="or-ofcart-product-text headline">
						<h3><a href="#">Cillit Bang</a></h3>
						<span>1 x $4.00</span>
					</div>
				</div>
				<div class="or-ofcart-product-item d-flex align-items-center position-relative">
					<div class="pro-remove position-absolute"><i class="fal fa-times"></i></div>
					<div class="or-ofcart-product-img">
						<img src="frontend_assets/img/shop/pro3.jpg" alt="">
					</div>
					<div class="or-ofcart-product-text headline">
						<h3><a href="#">Clarke CFP Floor</a></h3>
						<span>1 x $4.00</span>
					</div>
				</div>
			</div>
			<div class="or-ofcart-total text-center">
				<span>Subtotal: $4.00</span>
			</div>
		</div>
	</div>
<!-- End of header section
	============================================= -->
</body>