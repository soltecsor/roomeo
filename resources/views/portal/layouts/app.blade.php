<?php //Topo do Site ?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Roomeo Home Sharing</title>

		<!-- FAVICON -->
		<link rel="shortcut icon" href="{{asset('public/assets/images/favicon.png')}}">

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('public/portal/assets/css/plugins.css')}}">
  		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
		<link rel="stylesheet" type="text/css" href="{{ asset('public/portal/assets/css/style.min.css')}}">

        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>


	</head>


	<body class="home-page-3" >

		<!-- backtotop -->
		<div id="thetop" class="thetop"></div>
		<div id="backtotop" class="backtotop">
			<a href="#" id="scroll" class="scroll">
				<i class="far fa-arrow-up"></i>
			</a>
		</div>

		<!-- preloader -->
		<div id="preloader" class="preloader"></div>

		<!-- header -->
		<header id="header-section" class="header-section auto-hide clearfix">
			<div class="default-header clearfix">

				<!-- header-top -->
				<div class="header-top bg-default-red clearfix">
					<div class="container-fluid">
						<div class="row justify-content-lg-between">

							<div class="col-lg-6">
								<div class="contact-info ul-li clearfix">
									<ul class="text-uppercase clearfix">
										<li><a href="tel:+4402071128062"><i class="far fa-phone"></i> +44 (0) 207 112 8062</a></li>
										<li><a href="mailto:enquiries@roomeo.co.uk"><i class="far fa-envelope"></i> enquiries@roomeo.co.uk</a></li>
									</ul>
								</div>
							</div>


							<div class="col-lg-4">
								{{-- <div class="contact-info ul-li float-left">
									<ul class="text-uppercase clearfix">
										<li><a href="wishlist.php"><i class="far fa-heart"></i> Favourites</a></li>
										<li><a href="#!" data-toggle="modal" data-target="#modalLRForm"><i class="far fa-user"></i> Login / Sign Up</a></li>
                                        @guest
                                            <li><a href="{{ url('/login') }}"><i class="far fa-user"></i> Login</a></li>
                                        @else
                                            <li><a title="Access Painel Control" href="{{ url('/home') }}"><i class="far fa-user"></i> {{ Auth::user()->name }}</a></li>
                                        @endguest
                                            
									</ul>
								</div> --}}
								<div class="social-media ul-li-right float-right">
									<ul class="clearfix">
										<li><a href="https://www.facebook.com/roomeo.london/"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://www.instagram.com/roomeo.london/"><i class="fab fa-instagram"></i></a></li>
										<!-- <li><a href="#!"><i class="fab fa-youtube"></i></a></li> -->
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- header-bottom -->
				<div class="header-bottom bg-white clearfix">
					<div class="container-fluid">
						<div class="row">

							<div class="col-lg-3 col-md-12 col-sm-12">
								<div class="brand-logo">
									<a href="{!! url('/') !!}" class="brand-link text-center">
										<img src="{{asset('public/portal/assets/images').'/logo.png'}}" alt="Welcome to Roomeo Home Sharing!">
									</a>
									<button type="button" id="sidebar-collapse" class="mobile-menu-btn float-right"><i class="fal fa-bars"></i></button>
								</div>
							</div>

							<!-- NAV -->
                            {{-- require_once('inc/nav.php') --}}
                            @include('portal.inc.nav')
							
						</div>
					</div>
				</div>
				<!-- header-bottom - end -->

			</div>
        </header>

        <div id="app">
            @yield('content')
        </div>
        <!-- footer -->
        
        <footer id="footer-section" class="footer-section bg-default-royalblue clearfix">
            <div class="default-footer clearfix">
                <div class="container">

                    <div class="footer-content clearfix">
                        <div class="row">

                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="about-content">
        
                                    <div class="brand-logo">
                                        <a href="index.html" class="brand-link">
                                            <img src="{{ asset('public/portal/assets/images').'/logo_negativo.svg'}}" alt="Roomeo Home Sharing">
                                        </a>
                                    </div>

                                    <p>
                                        Our model was created to help those who entered the Private Rented Sector (PRS), as a result of making an investment in property or simply due to life events, but their busy lifestyle prevent them from achieving their full potential as a successful landlord.
                                    </p>

                                </div>
                            </div>

                            <div class="col-lg-1"></div>

                            <div class="col-lg-3 col-md-4 col-sm-12">
                                <div class="useful-links ul-li-block clearfix">
                                    <ul class="clearfix">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/room-search') }}">Room Search</a></li>
                                        <li><a href="{{ url('/landlord') }}">Landlords</a></li>
                                        <!-- <li><a href="{{ url('/blog') }}">News</a></li> -->
                                        <li><a href="{{ url('/about') }}">About</a></li>
                                        <li><a href="{{ url('/terms') }}">Terms and Conditions</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-12">		

                                <div class="footer-newsletter clearfix">
                                    <div class="social-media ul-li clearfix">
                                        <ul class="clearfix">
                                            <li><a href="https://www.facebook.com/roomeo.london/"><i class="fab fa-facebook-f" target="_parent"></i> Facebook</a></li>
                                            <li><a href="https://www.instagram.com/roomeo.london/"><i class="fab fa-instagram" target="_parent"></i> Instagram</a></li>
                                            <!-- <li><a href="#!"><i class="fab fa-youtube"></i> Youtube</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                    <div class="copyright-text text-center">
                        <p>2019 &copy; Roomeo Limited. Registered in England No. 11483815.</p>
                        <div class="hidden">Icons made by <a href="https://www.flaticon.com/authors/good-ware" title="Good Ware">Good Ware</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                    </div>

                    @include('portal.inc.modal')

            </div>


        </footer>
    <!-- footer-section - end
    ================================================== -->
    
    
    <!-- JS 
    o plugin requer o arquivo map (abaixo) importado via cdn -->
    <script src="public/portal/assets/js/jquery-3.4.1.min.js"></script>
    <script src="public/portal/assets/js/jquery-ui.js"></script>
    <script src="public/portal/assets/js/plugins.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>
    <script src="public/portal/assets/js/scripts.js"></script>
    <script src="{{asset('public/js').'/emailValidate.js'}}"></script>
    <!-- <script src="{{asset('public/js/app.js')}}"></script> -->

    {{-- require_once('inc/svg.php') --}}
    @include('portal.inc.svg')
    
    </body>
    </html>