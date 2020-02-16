@extends('portal.layouts.app')

@section('content')

		<!-- about-section - start
		================================================== -->
		<section id="landlord-section" class="about-section bg-white sec-ptb-120 pt-0 clearfix">
			<div class="container">

				<div class="row justify-content-lg-between justify-content-md-center mt-70">

					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="about-image mt-70">
							<img src="{{asset('/public/portal/assets/images/about').'/novo_eps.jpg'}}" alt="roomeo home sharing">
							<span class="decoration-image">
								<img src="{{asset('/public/portal/assets/images/about').'/novo_eps.jpg'}}" alt="roomeo home sharing">
							</span>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12 v-center">
						<div class="about-content mt-70">
							<div class="section-title mb-0">
								<span class="small-title">You Only Pay Us if We Find You a Tenant.</span>
								<h2 class="big-title mb-5">Let us take care of your tenant finding process and boost your business efficiency.</h2>
							</div>
						</div>
					</div>

				</div>

			</div>
		</section>
		<!-- about-section - end
		================================================== -->


		<section id="counter-section" class="counter-section counter-landlord sec-ptb-120 pt-0 clearfix">
			<div class="secondary-counter">
				<div class="container">

					<div class="section-title mb-70 text-center">
						<span class="small-title"></span>
						<h2 class="big-title mb-0">Why Roomeo?</h2>
					</div>

					<div class="row">
						@foreach ($reasons as $reason)
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="counter-item text-center">
								<h3 class="counter-text">{{ $reason->reasons_title }}</h3>
								<small class="item-title">{{$reason->reasons_description}}</small>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</div>
		</section>
		<!-- counter-section (secondary-counter) - end
		================================================== -->

		<!--
		================================================== -->
		<section id="plans-section" class="about-section bg-white sec-ptb-120 pt-0 clearfix">
			<div class="container">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="section-title text-center texto-destaque">
						<span class="small-title"></span>
						<h2 class="big-title mb-0">We have the right package for your needs and a selection of add-ons that will make your life much easier. Pick yours and start enjoying the benefits today!</h2>
					</div>
				</div>

			</div>
		</section>



		<!-- feature-section - start
		================================================== -->
		<section id="prices" class="feature-section prices sec-ptb-120 bg-light-gray clearfix" style="background-image: url(public/portal/assets/images/background/bg_green.jpg);">
			<div class="container">
				<div class="section-title text-center mb-30 texto-destaque">
					<span class="small-title">Our Plans</span>
					<h2 class="big-title mb-0">We have the right package for your needs and a selection of add-ons that will make your life much easier. Pick yours and start enjoying the benefits today!</h2>
				</div>
				<div class="row">
				@foreach ($prices as $price)
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="feature-grid-item text-center" id="accordionLite">

							<h3 class="feature-title">{{$price->prices_title}}</h3>

							<span class="price text-center">
								<h2><small>£</small>{{$price->prices_value}}</h2>
							</span>

							<p>
								{{$price->prices_description}}
							</p>

							<div class="item-label ul-li-right">
								<ul class="clearfix">
									<li class="bg-default-lightblue"><a href="#!">{{$price->prices_button}}</a></li>
								</ul>
							</div>
						</div>
					</div>
				@endforeach	
		</section>
		<!-- feature-section - end
		================================================== -->


		<!--
		================================================== -->
		<section id="about-section" class="about-section sec-ptb-120 pb-0 clearfix">
			<div class="container">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="section-title text-center">
						<span class="small-title">Question</span>
						<h2 class="big-title mb-0">Compare are the plans</h2>
					</div>
				</div>

				<div class="row justify-content-lg-between justify-content-md-center mt-70">

					<div class="col-lg-12 col-md-12 col-sm-12">

						<div class="availability-table table-responsive">
							<table class="table text-center">
								<thead>
									<tr>
										<th scope="col" width="50%"><small></small></th>
										<th scope="col" width="25%"><b>Tenant Finder</b></th>
										<th scope="col" width="25%"><b>Tenant Finder Plus</b></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="name">Tenant profiling <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="a survey of the your ideal tenant profile"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-check"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Professionalquality photography & videos <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="production of quality photos and videos attracting high visibility and interest"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-check"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Floorplan <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="illustrative floorplan drawn up"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-check"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Room advertising <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="well-crafted adverts published in main channels allowing for high visibility. Your room may be featured on spareroom, idealflatmate, badoo, rightmove and others, as well as on our website and social media"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-check"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Tenant pre-screening <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="enquiries vetting according to your specification, so that only qualifying ones are forwarded"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-check"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Enquiries management with SMS and email notification <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="get notified of qualifying enquiries via SMS and email"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-check"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Viewings bookings <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="we can organise viewings according to your availability"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-check"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Tenancy Compliance Service <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="information on relevant documentation necessary for a legally compliant tenancy creation"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-check"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Property viewings <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="accompanied viewings where your property will be thoroughly presented to prospective tenants"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-minus"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr> 
									<tr>
										<td class="name">Hold deposit collection <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="we collect a hold deposit from the applicant, according to current legislation, to reserve the room"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-minus"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Tenancy sign-up <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="upon provision by the client, we will send relevant documents to the tenant in order for tenancy to be compliant with current regulations and legalisation"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-minus"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Deposit collection and protection <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="deposit collected and registered with a government-approved scheme on client’s behalf"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-minus"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">Online signing of Arla-approved AST contract <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="we can organise for the tenancy agreement to be signed online by both parties"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-minus"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tr>
										<td class="name">First month’s rent collection <span class="help" data-placement="right" data-toggle="tooltip" data-html="true" title="collection of first month’s rent, paid into our account, and passed on to client"><i class="fa fa-question"></i></span></td>
										<td><i class="fa fa-minus"></i></td>
										<td><i class="fa fa-check"></i></td>
									</tr>
									<tfoot>
									<tr>
										<td></td>
										<td colspan="2"><a href="{{ url('/terms') }}" class="btn-link">See a Terms of Business</a></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>

				</div>

			</div>
		</section>

		<section id="addons-section" class="counter-section sec-ptb-120 clearfix">
			<div class="secondary-counter">
				<div class="container">

					<div class="section-title mb-70 text-center">
						<span class="small-title">Roomeo add-ons allow you to pick and choose the features that you want in your package.<br/>Only pay for the ones you need.</span>
						<h2 class="big-title mb-0">Add-ons</h2>
					</div>

					<div class="add-ons">
						<div class="addon-item text-center">
								<small class="help" data-placement="top" data-toggle="tooltip" data-html="true" title="collection of first month’s rent, paid into our account, and passed on to client">?</small>
								<h5 class="counter-text">First month’s rent collection</h5>
							</div>					
							<div class="addon-item text-center">
								<small class="help" data-placement="top" data-toggle="tooltip" data-html="true" title="we will welcome your tenant, explain your house rules, and carry out a full photographic inventory to besigned off by the new tenant">?</small>
								<h5 class="counter-text">Check-in & Inventory</h5>
							</div>			
						<div class="addon-item text-center">
								<small class="help" data-placement="top" data-toggle="tooltip" data-html="true" title="we will carry out routine inspections on your behalf, providing you with a full report of the visit">?</small>
								<h5 class="counter-text">Routine inspection</h5>
							</div>			
						<div class="addon-item text-center">
								<small class="help" data-placement="top" data-toggle="tooltip" data-html="true" title="a full reference check complete with credit checks will carried out by one of our specialist partners">?</small>
								<h5 class="counter-text">Comprehensive tenant referencing</h5>
							</div>				
						<div class="addon-item text-center">
								<small class="help" data-placement="top" data-toggle="tooltip" data-html="true" title="this rent guarantee insurance will cover payment defaults and legal costs">?</small>
								<h5 class="counter-text">Rent guarantee</h5>
							</div>			
					</div>
				</div>
			</div>
		</section>


		<!-- este bloco deve permitir mostrar e esconder de acordo com o painel administrativo. Por ora fica oculto, mas deve permitir ser exibido a qulquer momento 
		<section id="calltoaction-section" class="calltoaction-section clearfix hidden" style="background-image: url(assets/images/bckgroun/bg_dark.jpg);">
			<div class="default-calltoaction">
				<div class="container">
					<div class="row justify-content-lg-between justify-content-md-center">

						<div class="col-lg-9 col-md-12 col-sm-12">
							<div class="section-title">
								<span class="small-title">Tired of managing your properties?</span>
								<h2 class="big-title mb-0">Learn about our Guaranteed Rent model here.</h2>
							</div>
						</div>

						<div class="col-lg-3 col-md-12 col-sm-12">
							<div class="quote-btn-area text-right clearfix">
								<a href="#!" class="custom-btn inverte"><i class="fa fa-plus"></i> learn more</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>-->


		<!-- services -->
		<section id="steps-section" class="service-section sec-ptb-120 pt-0 clearfix">
			<div class="container">

				<div class="section-title text-center mb-70">
					<span class="small-title">Steps</span>
					<h2 class="big-title mb-0">Process</h2>
				</div>

				<div class="row meio">
				@foreach ($processes as $process)
					<div class="col-lg-3 col-md-4 col-sm-6">
						<div class="service-grid-item-1">
							<span class="service-icon">
								<img src="{{asset('public/portal/assets/images/ico').'/'.$process->process_img}}" alt="roomeo home sharing">
							</span>
							<h2 class="service-title">{{$process->process_title}}</h2>
							<p>
							{{$process->process_description}}
							</p>
						</div>
					</div> 
				@endforeach
					

				</div>
			</div>
		</section>
		@include('portal.view.partners')	
@endsection
