<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="google-site-verification" content="j2g3cbR8AaiD_Ob-wmOGlLR1ZdHRdgGf5B4vV10jEEE" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Econex</title>
	<meta name="description" content="clinox - Cleaning Services HTML template">
	<meta name="keywords" content="	cleaner, cleaning, cleaning agency, cleaning business, cleaning company, cleaning service, floor cleaning, house cleaning, housekeeping, janitor, maid service, maintenance, washing, window cleaning">
	<meta name="author" content="Themexriver">
	<link rel="icon" href="assets/favicon.png" type="image/png" />
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
       @include('frontend.layouts.header')
</head>
<style>
	.mobile_menu_content
	{
		left: 0px;
		display: none;
	}
	@media only screen and (max-width: 767px) {
  body {
    font-size: 14px;
  }

  .container {
    width: 100%;
    padding: 10px;
  }

  / Add more CSS rules for mobile devices /
}
	</style>
	

	
<body>

 @include('frontend.layouts.navebar')

	

                  @yield('content')


        @include('frontend.layouts.footer')

</body>
</html>
