@extends('portal.layouts.app')

@section('content')
		<!--
		================================================== -->
		<section id="plans-section" class="about-section bg-white sec-ptb-120 pt-0 mt-70 clearfix">
			<div class="container">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="section-title text-center">
						<span class="small-title">Hello</span>
						<h4 class="big-title mb-0">What you need?</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						@include('portal.inc.busca') 
					</div>
				</div>

			</div>
		</section>
		@include('portal.view.partners')


		<!-- property-section - start
		================================================== -->
		<section id="property-section" class="property-section sec-ptb-35 bg-light-gray clearfix hidden">
			<div class="container-fluid property-1">
				<div class="row justify-content-lg-start justify-content-md-center">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="filter-bar">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<h3 class="result-text">10 listings found</h3>
								</div>
								<div class="col-lg-6 col-md-6 hidden-sm">
									<div class="layout-btns-group ul-li-right clearfix">
										<ul class="nav" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#layout-list"><i class="far fa-bars"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#layout-grid"><i class="fas fa-th"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="tab-content grid-property property" id="property">
							<div id="layout-grid" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="property-grid-item">

											<div class="property-image image-container">
												<div class="post-admin">
													<a class="admin-link" href="#!">
														Available Now
													</a>
												</div>
												<div class="item-label ul-li-right clearfix">
													<ul class="clearfix">
														<li class="bg-default-checked"><a href="#!">checked</a></li>
														<!-- se necessário outros moldes
														<li class="bg-default-lightblue"><a href="#!">featured</a></li>
														<li class="bg-default-leafgreen"><a href="#!">trending</a></li>
														<li class="bg-default-purered"><a href="#!">sale</a></li> -->
													</ul>
												</div>
												<div class="image-carousel-container">
													<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
														<div class="item">
															<a href="/portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="/portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="/portal/uploads/slider/slide01.jpg" data-toggle="lightbox"data-gallery="property"><img src="/portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="/portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="/portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
													</div>
												</div>
												<div class="action-btns-group ul-li-right clearfix mt-30">
													<ul class="clearfix">
														<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
														<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
													</ul>
												</div>
											</div>

											<div class="property-content" onclick="window.location.href='room-details.php';">
												<span class="disponivel">Available from <strong>07 November</strong></span>
												<h2 class="item-title">
													<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
												</h2>
												<div class="price-and-location ul-li clearfix">
													<div class="post-meta ul-li clearfix">
														<ul class="clearfix">
															<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
															<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
														</ul>
													</div>
													<ul class="clearfix">
														<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
														<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="property-grid-item">

											<div class="property-image image-container">
												<div class="post-admin">
													<a class="admin-link" href="#!">
														Available Now
													</a>
												</div>
												<div class="item-label ul-li-right clearfix">
													<ul class="clearfix">
														<li class="bg-default-checked"><a href="#!">checked</a></li>
													</ul>
												</div>
												<div class="image-carousel-container">
													<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
													</div>
												</div>
												<div class="action-btns-group ul-li-right clearfix">
													<ul class="clearfix">
														<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
														<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
													</ul>
												</div>
											</div>

											<div class="property-content" onclick="window.location.href='room-details.php';">
												<span class="disponivel">Available from <strong>07 November</strong></span>
												<h2 class="item-title">
													<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
												</h2>
												<div class="price-and-location ul-li clearfix">
													<div class="post-meta ul-li clearfix">
														<ul class="clearfix">
															<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
															<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
														</ul>
													</div>
													<ul class="clearfix">
														<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
														<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="property-grid-item">

											<div class="property-image image-container">
												<div class="post-admin">
													<a class="admin-link" href="#!">
														Available Now
													</a>
												</div>
												<div class="item-label ul-li-right clearfix">
													<ul class="clearfix">
														<li class="bg-default-checked"><a href="#!">checked</a></li>
													</ul>
												</div>
												<div class="image-carousel-container">
													<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox"data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
													</div>
												</div>
												<div class="action-btns-group ul-li-right clearfix">
													<ul class="clearfix">
														<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
														<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
													</ul>
												</div>
											</div>

											<div class="property-content" onclick="window.location.href='room-details.php';">
												<span class="disponivel">Available from <strong>07 November</strong></span>
												<h2 class="item-title">
													<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
												</h2>
												<div class="price-and-location ul-li clearfix">
													<div class="post-meta ul-li clearfix">
														<ul class="clearfix">
															<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
															<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
														</ul>
													</div>
													<ul class="clearfix">
														<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
														<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="property-grid-item">

											<div class="property-image image-container">
												<div class="post-admin">
													<a class="admin-link" href="#!">
														Available Now
													</a>
												</div>
												<div class="item-label ul-li-right clearfix">
													<ul class="clearfix">
														<li class="bg-default-checked"><a href="#!">checked</a></li>
													</ul>
												</div>
												<div class="image-carousel-container">
													<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
													</div>
												</div>
												<div class="action-btns-group ul-li-right clearfix">
													<ul class="clearfix">
														<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
														<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
													</ul>
												</div>
											</div>

											<div class="property-content" onclick="window.location.href='room-details.php';">
												<span class="disponivel">Available from <strong>07 November</strong></span>
												<h2 class="item-title">
													<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
												</h2>
												<div class="price-and-location ul-li clearfix">
													<div class="post-meta ul-li clearfix">
														<ul class="clearfix">
															<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
															<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
														</ul>
													</div>
													<ul class="clearfix">
														<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
														<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="property-grid-item">

											<div class="property-image image-container">
												<div class="post-admin">
													<a class="admin-link" href="#!">
														Available Now
													</a>
												</div>
												<div class="item-label ul-li-right clearfix">
													<ul class="clearfix">
														<li class="bg-default-checked"><a href="#!">checked</a></li>
													</ul>
												</div>
												<div class="image-carousel-container">
													<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox"data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
													</div>
												</div>
												<div class="action-btns-group ul-li-right clearfix">
													<ul class="clearfix">
														<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
														<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
													</ul>
												</div>
											</div>

											<div class="property-content" onclick="window.location.href='room-details.php';">
												<span class="disponivel">Available from <strong>07 November</strong></span>
												<h2 class="item-title">
													<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
												</h2>
												<div class="price-and-location ul-li clearfix">
													<div class="post-meta ul-li clearfix">
														<ul class="clearfix">
															<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
															<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
														</ul>
													</div>
													<ul class="clearfix">
														<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
														<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="property-grid-item">

											<div class="property-image image-container">
												<div class="post-admin">
													<a class="admin-link" href="#!">
														Available Now
													</a>
												</div>
												<div class="item-label ul-li-right clearfix">
													<ul class="clearfix">
														<li class="bg-default-checked"><a href="#!">checked</a></li>
													</ul>
												</div>
												<div class="image-carousel-container">
													<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
													</div>
												</div>
												<div class="action-btns-group ul-li-right clearfix">
													<ul class="clearfix">
														<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
														<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
													</ul>
												</div>
											</div>

											<div class="property-content" onclick="window.location.href='room-details.php';">
												<span class="disponivel">Available from <strong>07 November</strong></span>
												<h2 class="item-title">
													<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
												</h2>
												<div class="price-and-location ul-li clearfix">
													<div class="post-meta ul-li clearfix">
														<ul class="clearfix">
															<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
															<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
														</ul>
													</div>
													<ul class="clearfix">
														<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
														<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="property-grid-item">

											<div class="property-image image-container">
												<div class="post-admin">
													<a class="admin-link" href="#!">
														Available Now
													</a>
												</div>
												<div class="item-label ul-li-right clearfix">
													<ul class="clearfix">
														<li class="bg-default-checked"><a href="#!">checked</a></li>
													</ul>
												</div>
												<div class="image-carousel-container">
													<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox"data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
													</div>
												</div>
												<div class="action-btns-group ul-li-right clearfix">
													<ul class="clearfix">
														<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
														<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
													</ul>
												</div>
											</div>

											<div class="property-content" onclick="window.location.href='room-details.php';">
												<span class="disponivel">Available from <strong>07 November</strong></span>
												<h2 class="item-title">
													<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
												</h2>
												<div class="price-and-location ul-li clearfix">
													<div class="post-meta ul-li clearfix">
														<ul class="clearfix">
															<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
															<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
														</ul>
													</div>
													<ul class="clearfix">
														<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
														<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
									<div class="col-lg-4 col-md-6 col-sm-12">
										<div class="property-grid-item">

											<div class="property-image image-container">
												<div class="post-admin">
													<a class="admin-link" href="#!">
														Available Now
													</a>
												</div>
												<div class="item-label ul-li-right clearfix">
													<ul class="clearfix">
														<li class="bg-default-checked"><a href="#!">checked</a></li>
													</ul>
												</div>
												<div class="image-carousel-container">
													<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
														<div class="item">
															<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="uploads/slider/slide01.jpg" data-toggle="lightbox"data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
														<div class="item">
															<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
														</div>
													</div>
												</div>
												<div class="action-btns-group ul-li-right clearfix">
													<ul class="clearfix">
														<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
														<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
													</ul>
												</div>
											</div>

											<div class="property-content" onclick="window.location.href='room-details.php';">
												<span class="disponivel">Available from <strong>07 November</strong></span>
												<h2 class="item-title">
													<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
												</h2>
												<div class="price-and-location ul-li clearfix">
													<div class="post-meta ul-li clearfix">
														<ul class="clearfix">
															<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
															<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
														</ul>
													</div>
													<ul class="clearfix">
														<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
														<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
													</ul>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
							<div id="layout-list" class="tab-pane active limita-propriedades">
								<div class="row">
									<div class="col-lg-7 col-md-7 col-sm-12">
										<div class="row cria-scroll">
											<div class="col-lg-6 col-sm-12">
												<div class="property-list-item clearfix">
													<div class="property-image image-container">
														<div class="post-admin">
															<a class="admin-link" href="#!">
																Available Now
															</a>
														</div>
														<div class="item-label ul-li-right clearfix">
															<ul class="clearfix">
																<li class="bg-default-checked"><a href="#!">checked</a></li>
															</ul>
														</div>
														<div class="image-carousel-container">
															<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox"data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
															</div>
														</div>
														<div class="action-btns-group ul-li-right clearfix">
															<ul class="clearfix">
																<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
																<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
															</ul>
														</div>
													</div>

													<div class="property-content" onclick="window.location.href='room-details.php';">
														<span class="disponivel">Available from <strong>07 November</strong></span>
														<h2 class="item-title">
															<a href="room-details.php" class="title-link">Renovated apartment at floor in bathroom.</a>
														</h2>
														<div class="price-and-location ul-li clearfix">
															<div class="post-meta ul-li clearfix">
																<ul class="clearfix">
																	<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
																	<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
																</ul>
															</div>
															<ul class="clearfix">
																<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
																<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-sm-12">
												<div class="property-list-item clearfix">
													<div class="property-image image-container">
														<div class="post-admin">
															<a class="admin-link" href="#!">
																Available Now
															</a>
														</div>
														<div class="item-label ul-li-right clearfix">
															<ul class="clearfix">
																<li class="bg-default-checked"><a href="#!">checked</a></li>
															</ul>
														</div>
														<div class="image-carousel-container">
															<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
															</div>
														</div>
														<div class="action-btns-group ul-li-right clearfix">
															<ul class="clearfix">
																<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
																<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
															</ul>
														</div>
													</div>

													<div class="property-content" onclick="window.location.href='room-details.php';">
														<span class="disponivel">Available from <strong>07 November</strong></span>
														<h2 class="item-title">
															<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
														</h2>
														<div class="price-and-location ul-li clearfix">
															<div class="post-meta ul-li clearfix">
																<ul class="clearfix">
																	<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
																	<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
																</ul>
															</div>
															<ul class="clearfix">
																<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
																<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-sm-12">
												<div class="property-list-item clearfix">
													<div class="property-image image-container">
														<div class="post-admin">
															<a class="admin-link" href="#!">
																Available Now
															</a>
														</div>
														<div class="item-label ul-li-right clearfix">
															<ul class="clearfix">
																<li class="bg-default-checked"><a href="#!">checked</a></li>
															</ul>
														</div>
														<div class="image-carousel-container">
															<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="portal/uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
															</div>
														</div>
														<div class="action-btns-group ul-li-right clearfix">
															<ul class="clearfix">
																<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
																<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
															</ul>
														</div>
													</div>

													<div class="property-content" onclick="window.location.href='room-details.php';">
														<span class="disponivel">Available from <strong>07 November</strong></span>
														<h2 class="item-title">
															<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
														</h2>
														<div class="price-and-location ul-li clearfix">
															<div class="post-meta ul-li clearfix">
																<ul class="clearfix">
																	<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
																	<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
																</ul>
															</div>
															<ul class="clearfix">
																<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
																<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-sm-12">
												<div class="property-list-item clearfix">
													<div class="property-image image-container">
														<div class="post-admin">
															<a class="admin-link" href="#!">
																Available Now
															</a>
														</div>
														<div class="item-label ul-li-right clearfix">
															<ul class="clearfix">
																<li class="bg-default-checked"><a href="#!">checked</a></li>
															</ul>
														</div>
														<div class="image-carousel-container">
															<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox"data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
															</div>
														</div>
														<div class="action-btns-group ul-li-right clearfix">
															<ul class="clearfix">
																<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
																<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
															</ul>
														</div>
													</div>

													<div class="property-content" onclick="window.location.href='room-details.php';">
														<span class="disponivel">Available from <strong>07 November</strong></span>
														<h2 class="item-title">
															<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
														</h2>
														<div class="price-and-location ul-li clearfix">
															<div class="post-meta ul-li clearfix">
																<ul class="clearfix">
																	<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
																	<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
																</ul>
															</div>
															<ul class="clearfix">
																<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
																<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-sm-12">
												<div class="property-list-item clearfix">
													<div class="property-image image-container">
														<div class="post-admin">
															<a class="admin-link" href="#!">
																Available Now
															</a>
														</div>
														<div class="item-label ul-li-right clearfix">
															<ul class="clearfix">
																<li class="bg-default-checked"><a href="#!">checked</a></li>
															</ul>
														</div>
														<div class="image-carousel-container">
															<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox"data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
															</div>
														</div>
														<div class="action-btns-group ul-li-right clearfix">
															<ul class="clearfix">
																<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
																<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
															</ul>
														</div>
													</div>

													<div class="property-content" onclick="window.location.href='room-details.php';">
														<span class="disponivel">Available from <strong>07 November</strong></span>
														<h2 class="item-title">
															<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
														</h2>
														<div class="price-and-location ul-li clearfix">
															<div class="post-meta ul-li clearfix">
																<ul class="clearfix">
																	<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
																	<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
																</ul>
															</div>
															<ul class="clearfix">
																<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
																<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-sm-12">
												<div class="property-list-item clearfix">
													<div class="property-image image-container">
														<div class="post-admin">
															<a class="admin-link" href="#!">
																Available Now
															</a>
														</div>
														<div class="item-label ul-li-right clearfix">
															<ul class="clearfix">
																<li class="bg-default-checked"><a href="#!">checked</a></li>
															</ul>
														</div>
														<div class="image-carousel-container">
															<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
															</div>
														</div>
														<div class="action-btns-group ul-li-right clearfix">
															<ul class="clearfix">
																<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
																<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
															</ul>
														</div>
													</div>

													<div class="property-content" onclick="window.location.href='room-details.php';">
														<span class="disponivel">Available from <strong>07 November</strong></span>
														<h2 class="item-title">
															<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
														</h2>
														<div class="price-and-location ul-li clearfix">
															<div class="post-meta ul-li clearfix">
																<ul class="clearfix">
																	<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
																	<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
																</ul>
															</div>
															<ul class="clearfix">
																<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
																<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-sm-12">
												<div class="property-list-item clearfix">
													<div class="property-image image-container">
														<div class="post-admin">
															<a class="admin-link" href="#!">
																Available Now
															</a>
														</div>
														<div class="item-label ul-li-right clearfix">
															<ul class="clearfix">
																<li class="bg-default-checked"><a href="#!">checked</a></li>
															</ul>
														</div>
														<div class="image-carousel-container">
															<div id="details-image-carousel" class="owl-carousel owl-theme owl-property">
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox"data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
																<div class="item">
																	<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="portal/uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
																</div>
															</div>
														</div>
														<div class="action-btns-group ul-li-right clearfix">
															<ul class="clearfix">
																<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
																<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
															</ul>
														</div>
													</div>

													<div class="property-content" onclick="window.location.href='room-details.php';">
														<span class="disponivel">Available from <strong>07 November</strong></span>
														<h2 class="item-title">
															<a href="room-details.php"class="title-link">Renovated apartment at floor in bathroom.</a>
														</h2>
														<div class="price-and-location ul-li clearfix">
															<div class="post-meta ul-li clearfix">
																<ul class="clearfix">
																	<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
																	<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
																</ul>
															</div>
															<ul class="clearfix">
																<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
																<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-lg-5 col-md-5 col-sm-12">
										<div class="property-location clearfix">
											<div id="google-map" class="google-map map-area-full">
												<div id="googleMaps"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>

				<!--<div class="pagination-list ul-li-center clearfix">
					<ul class="clearfix">
						<li class="prev-btn"><a href="#!"><i class="fas fa-arrow-left"></i></a></li>
						<li class="active"><a href="#">01</a></li>
						<li><a href="#">02</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">04</a></li>
						<li class="next-btn"><a href="#!"><i class="fas fa-arrow-right"></i></a></li>
					</ul>
				</div>-->
			</div>
		</section>
		<!-- property-section - end
		================================================== -->
	
@endsection