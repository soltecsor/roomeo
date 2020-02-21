<div class="col-lg-6 col-md-12 col-sm-12">
	<div class="main-menubar ul-li-center clearfix">
		<ul class="clearfix">
			<!-- este menu está comentado, pois seria um exemplo de menu com submenu, ok? 
			<li class="< ?php if($temp[3] == 'index.php'){ echo 'active'; } ?> menu-item-has-child">
				<a href="index.php"><span data-hover="Submenu">Submenu</span></a>
				<ul class="sub-menu">
					<li><a href="room-details.php">Room Details</a></li>
					<li><a href="terms.php">Terms</a></li>
					<li><a href="blog-details.php">Blog Details</a></li>
				</ul>
			</li>-->			

			<li class="">
				<a href="{!! url('/') !!}"><span data-hover="Home">Home</span></a>
			</li>

			<li class="">
				<a href="{{ url('/room-search') }}"><span data-hover="Room Search">Room Search</span></a>
			</li>

			{{-- <li class="">
				<a href="#"><span data-hover="News">News</span></a>
			</li> --}}

			<li class="">
				<a href="{{ url('/about') }}"><span data-hover="About">About</span></a>
			</li>

			<li class="">
				<a href="{{ url('/contact') }}"><span data-hover="Contact">Contact</span></a>
			</li>
		</ul>
	</div>
</div>

<div class="col-lg-3 col-md-12 col-sm-12">
	<div class="btns-group ul-li-right clearfix">
		<ul class="clearfix">
			<li>
				<a href="{{ url('/landlord') }}" class="custom-btn-bordered">I'm a Landlord</a>
			</li>
		</ul>
	</div>
</div>

<!-- Menu Mobile -->
<div class="sidebar-menu-wrapper">
	<div id="sidebar-menu" class="sidebar-menu">

		<div class="dismiss text-right btn-fecha clearfix">
			<span class="close-btn"><i class="fal fa-times"></i></span>
		</div>

		<div class="sidebar-main-menu mb-60 clearfix">
			<h2 class="sidebar-title">Main Menu</h2>
			<ul id="menu-list" class="menu-list list-unstyled components clearfix">
				<!-- Modelo de Submenu
				<li class="menu-item-has-child active">
					<a href="#home-submenu" data-toggle="collapse" aria-expanded="false">Submenu</a>
					<ul class="sub-menu collapse list-unstyled" id="home-submenu" data-parent="#menu-list">
						<li class="active"><a href="#!">Submenu v.1</a></li>
						<li><a href="#!">Submenu v.2</a></li>
						<li><a href="#!">Submenu v.3</a></li>
					</ul>
				</li> -->

				<li class="">
					<a href="{{ url('/') }}"><span data-hover="Home">Home</span></a>
				</li>

				<li class="">
					<a href="{{ url('/room-search') }}"><span data-hover="Room Search">Room Search</span></a>
				</li>

				<!-- <li class="">
					<a href="blog.php"><span data-hover="News">News</span></a>
				</li> -->

				<li class="">
					<a href="{{ url('/about') }}"><span data-hover="About">About</span></a>
				</li>

				<li class="">
					<a href="{{ url('/contact') }}"><span data-hover="Contact">Contact</span></a>
				</li>
			</ul>
		</div>

		<div class="contact-info ul-li-block clearfix mb-60">
			<ul class="clearfix">
				<li><a href="landlord.php" class="custom-btn-bordered">I'm a Landlord</a></li>
			</ul>
		</div>

		<div class="contact-info ul-li-block clearfix">
			<h2 class="sidebar-title">contact info</h2>
			<ul class="clearfix">
				<li>Chiswick Park, Building 7<br/>566 Chiswick High Road<br/>London W4 5YG</li>
				<li><a href="mailto:enquiries@roomeo.co.uk">enquiries@roomeo.co.uk</a></li>
				<li><a href="tel:+4402071128062">+44 (0) 207 112 8062</a><br/><b>Mon-Sat</b> from <b>9am</b> to <b>6pm</b></li>
			</ul>
		</div>

		<div class="social-links mb-60 ul-li clearfix">
			<ul class="text-uppercase clearfix">
				<li><a href="https://www.facebook.com/roomeo.london/"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://www.instagram.com/roomeo.london/"><i class="fab fa-instagram"></i></a></li>
				<!-- <li><a href="#!"><i class="fab fa-youtube"></i></a></li> -->
			</ul>
		</div>

		<div class="li-login mb-60 ul-li clearfix">
			<ul class="text-uppercase clearfix">
				<li><a href="wishlist.php"><i class="far fa-heart"></i> Favourites</a></li>
				<li><a href="#!" data-toggle="modal" data-target="#modalLRForm"><i class="far fa-user"></i> Login / Sign Up</a></li>
				<!--<li><a href="login.php"><i class="far fa-sign-out"></i> Logout / Sign Out</a></li>-->
			</ul>
		</div>

	</div>
	<div class="overlay"></div>
</div>