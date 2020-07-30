<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

		@if (!empty($seo))
		<!-- SEO -->
		<title>{{ $seo->title }}</title>
		<meta name="keywords" content="{{ $seo->keywords }}" />
		<meta name="description" content="{{ $seo->description }}" />
				

		<meta property="og:url"                content="" />
		<meta property="og:type"               content="" />
		<meta property="og:title"              content="{{ $seo->title }}" />
		<meta property="og:description"        content="{{ $seo->description }}" />
		<meta property="og:image"              content="{{ $restaurant->restaurant_logo_path }}" />
		@endif

		<!-- CSS -->
		<link rel="stylesheet" href="/css/app.css" >
		<link rel="stylesheet" href="/plugins/bootstrap-social/bootstrap-social.min.css" >
		<link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.min.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href='https://fonts.googleapis.com/css?family=Philosoper ' rel='stylesheet' type='text/css'>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Libre Baskerville' rel='stylesheet'>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="screen" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Philosopher">

	
		<!-- Cookie Script -->
		<script src="/js/js.cookie.js"></script>

		<!-- Cookies policy -->

		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
		<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>

		<script>
		window.addEventListener("load", function(){
		window.cookieconsent.initialise({
		  "palette": {
		    "popup": {
		      "background": "#666666"
		    },
		    "button": {
		      "background": "#f1d600"
		    }
		  }
		})});
		</script>
		<!-- End Cookies policy -->

		<!-- Google Analytics -->

		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170097823-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-170097823-1');
</script>


	</head>
	<body>
		
		
			<!-- Nav Container -->
				<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container">

						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-head-collapse">
								<span class="sr-only"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="/"></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-head-collapse">
							
							<ul class="nav navbar-nav">
							
								<li class="home" id="navlist"> <a class="" href="/">Home</a> </li>
								<li class="order-online-nav"  id="navlist"><a href="/order-online">Order Online</a></li>
								{{-- <li class=""><a href="/book-table"  id="navlist">Reservation</a></li> --}}
								<li class=""><a href="/reviews"  id="navlist">Reviews</a></li>
								{{-- <li class="navlogo"> <a href="/">Ginger & Spice</a></li> --}}
								{{-- <li class=""><a href="/news-events">News & Events</a></li> --}}

								
								<li class=""><a href="/contact-us"  id="navlist">Contact</a></li>
								{{-- <li class=""><a href="/private-dining">Private Dining</a></li> --}}
							
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown"  id="navlist">
									@if (Auth::check())
										<a href="/user/profile" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->fullname }} <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="/change-password">Change Password</a></li>
											<li><a href="/logout">Logout</a></li>
										</ul>
									@else
										<a href="/login">
										  Login / Register
										</a>
									@endif
								</li>

								<li><a href="https://www.facebook.com/gingerspicesuk/" target="_blank"><i class="fa fa-facebook" style="font-size:20px"></i></a></li>
								<li> <a href="https://instagram.com/gingerspicesuk/" target="_blank"><i class="fa fa-instagram" style="font-size:20px"></i></a> </li>
							   
							</ul>
						</div><!-- /.navbar-collapse -->
					


					</div>
					
				</nav>

<!-- Header Container -->
	<noscript><div class="container"><div class="nonoscript alert alert-danger">JavaScript has been disabled on this browser. This website cannot function without JavaScript, therefore please enable it inorder to use the website.</div> </div> </noscript>

<div class="header">


	<div class="container">

	@if (isset($restaurant))
		<div class="">

			<div class="col-md-4 col-lg-4">
				<div class="header-sub-section-logo">
					
						<a href="/"><img src="{{ $restaurant->restaurant_logo_path }}" alt="{{ $restaurant->restaurant_logo_path_alt }}" class="image-responsive" ></a>
					
						
						<div class="phone-for-mobile text-right">
							<a href="tel:{{ $restaurant->restaurant_phone_1 }}">{{ $restaurant->restaurant_phone_1 }}</a>

							<br>
							@if (isset($offer))
							{{-- {{ $offer->percentage_discount }}% Off, --}}
							Free Delivery 
							
							<br/> on order over &pound;{{ $offer->minimum_order }}
							@endif
							
							
							
					

							{{-- {{ $offer->percentage_discount }}%  Off | Free  
							<br>
							Delivery Over &pound;{{ $offer->minimum_order }} --}}
						</div>
				</div>
			</div>

			<div class="header-restaurant">

				<div class="col-md-3">
					<div class="header-sub-section">
						<div class="header-sub-section-title">
							{{-- <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i> --}}
							<div class="header-sub-section-heading">Opening Hours</div>
						</div>
						<div class="header-sub-section-content">
							{!! $restaurant->opening_hours !!}
						</div>
					</div>
				</div>


				<div class="col-md-2">
					<div class="header-sub-section">
						<div class="header-sub-section-title">
							{{-- <i class="fa fa-phone fa-2x" aria-hidden="true"></i> --}}
							<div class="header-sub-section-heading">Phone</div>
						</div>
						<div class="header-sub-section-content">
							<a href="tel:{{ $restaurant->restaurant_phone_1 }}">{{ $restaurant->restaurant_phone_1 }}</a> <br/>
							<a href="tel:{{ $restaurant->restaurant_phone_2 }}">{{ $restaurant->restaurant_phone_2 }}</a>
						</div>
					</div>
				</div>


				<div class="col-md-3">
					<div class="header-sub-section">
						<div class="header-sub-section-title">
							{{-- <i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
							<div class="header-sub-section-heading"><a href="checkout">Cart<a></div> --}}
						</div>
						<div class="header-sub-section-content">
							<span class="basket-count">0</span> item/s: &pound;<span class="basket-total">0</span>
							<br/>
							
							@if (isset($offer))
							{{-- {{ $offer->percentage_discount }}% Off,  --}}
							
							Free Delivery 
							
							<br/> on order over &pound;{{ $offer->minimum_order }}
							@endif
						
							{{-- {{ $offer->percentage_discount }}%  Off | Free Delivery 
							<br>
							Over &pound;{{ $offer->minimum_order }} --}}


						</div>
						
					</div>
				</div>
				
				</div>
	         </div>
		
	@endif
	</div>
	</div>

<div class="container">

</div>
<!-- Body Container -->
<div class="body_content">
	@yield('content')

	{{-- <!-- Covid-19 Alert -->

	<script>
		//Pop up an alert
		window.alert("We are now closed until further notice due to Covid-19");
	  </script>	
		<!-- End of Covid-19 Alert --> --}}
</div>






      <div class="footer_widget">
            <div class="container text-center">
                <div class="row">
                    <div class="footer_widget_content text-center">
                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn"  data-wow-duration="2s">
								<div class="footer-logo">
		<a href="/"><img src="/img/whitelogo.png" alt="Ginger & Spices" style="width:70%"></a>
	</div>
				                  <div class="single_widget_info">

                                    <p>Collection via The Thyme <br>
										<span>67 High Street</span> <br>

                                        <span>Chislehurst, Kent</span><br>
										<span> BR7 5AG </span>

                                      </p>
                                </div>





                            </div>
                        </div>

                        <div class="col-md-4" id="">
                            <div class="single_widget wow fadeIn"  data-wow-duration="4s">
                                <h4>Opening Hours</h4>

                                <div class="single_widget_info">
                                    <p>
										
										{!! $restaurant->opening_hours !!} 
										
									
										{{-- <class="date_day">Tuesday To Sunday</br>
                                        <span>3:30pm to 10:00pm</span></br> --}}

																				{{-- <class="date_day">Friday &amp; Saturday</br>
		                                        <span>5:00pm to 11:30pm</span></br>

                                        <class="date_day">Sunday</br>
                                        <span>12:00pm to 11:00pm </span> --}}
                                      </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="single_widget wow fadeIn" id= "single_widget" data-wow-duration="2s">
                                <h4>Contact us</h4>

                                <div class="single_widget_info">
                                    <p>

                                        <a href="tel:02033056587" style="color:white">
                                          <span><i class="fa fa-phone"> </i> 020 3305 6587 </span></a><br>
                                        <a href="mailto:info@gingerspices.co.uk" style="color:white">
                                          <span> <i class="fa fa-envelope"></i>  info@gingerspices.co.uk </span></a>

                                      </p>
                                </div>
                              <div class="footer_socail_icon">
                                  <a href="https://www.facebook.com/gingerspicesuk/" target="_blank"><i class="fa fa-facebook"></i></a>
                                  <a href="https://instagram.com/gingerspicesuk/" target="_blank"><i class="fa fa-instagram"></i></a>
                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<hr>
			<div class="copyright text-center">
                <div class="row">
                    <div class="col-md-12">
							<p class="m-0">Copyright &copy; Ginger&Spices, Chislehurst {{$ldate = date('Y')}} </p>
                    </div>
                </div>
            </div>
		</div>




<!-- JavaScript -->
<script src="https://js.stripe.com/v2/"  ></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"  ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js" ></script>

<script src="/js/all.js"></script>
<script src="/js/basket.js"></script>
<script src="/js/payment.js"></script>
<script src="/js/closenotification.js"></script>
<script src="/js/mondayclose.js"></script>
<script src="/js/linkDisable.js"></script>

<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-92263043-1', 'auto');
  ga('send', 'pageview');
</script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->




	</body>
</html>
