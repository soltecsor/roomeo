@extends('portal.layouts.app')

@section('content')
		
		<!-- about-section - start
		================================================== -->
		@foreach($institutionals as $institutional)
		<section id="about-section" class="about-section sec-ptb-120 clearfix">
			<div class="container">

				<div class="section-title mb-70 text-center">
					<span class="small-title"></span>
					<h2 class="big-title mb-0">{{ $institutional->inst_title }}</h2>
				</div>

				<div class="row justify-content-lg-between justify-content-md-center mt-70">

					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="about-image mt-70">
							<img src="{{ asset('public/portal/assets/images/about').'/'.$institutional->inst_title_img }}" alt="roomeo home sharing">
							<span class="decoration-image">
								<img src="{{ asset('public/portal/assets/images/about').'/'.$institutional->inst_title_img }}"  alt="roomeo home sharing">
							</span>
						</div>
					</div>

					<div class="col-lg-6 col-md-9 col-sm-12">
						<div class="about-content">
							<div class="section-title mb-0">
								<span class="small-title"></span>
								<h2 class="big-title mb-2">{{ $institutional->inst_subtitle }}</h2>
							</div>
							{!! $institutional->inst_description !!}
						</div>
					</div>
					
				</div>

			</div>
		</section>
		@endforeach
		<!-- about-section - end
		================================================== -->



		<!-- counter-section (secondary-counter) - start
		================================================== -->
		<section id="counter-section" class="counter-section sec-ptb-120 clearfix">
			<div class="secondary-counter">
				<div class="container">

					<div class="section-title mb-70 text-center">
						<span class="small-title"></span>
						<h2 class="big-title mb-0">Our values</h2>
						<br/>
						<p>Our core values are at the heart of everything we do at Roomeo</p>
					</div>

					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="counter-item text-center">
								<span class="item-icon"><i class="flaticon-home"></i></span>
								<h2 class="counter-text">Integrity</h2>
								<small class="item-title">We are honest and ethic.</small>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="counter-item text-center">
								<span class="item-icon"><i class="flaticon-building-1"></i></span>
								<h2 class="counter-text">Commitment</h2>
								<small class="item-title">We guarantee excellence and professionalism in the delivery of our services.</small>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="counter-item text-center">
								<span class="item-icon"><i class="flaticon-home-3"></i></span>
								<h2 class="counter-text">Relatability</h2>
								<small class="item-title">We understand your needs and expectations and work hard to meet them.</small>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-12">
							<div class="counter-item text-center">
								<span class="item-icon"><i class="flaticon-city-hall"></i></span>
								<h2 class="counter-text">Simplicity</h2>
								<small class="item-title">Life is already complicated, so we help to make it simpler whenever we can.</small>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- counter-section (secondary-counter) - end
		================================================== -->
		

		<!-- team-section - start
		================================================== -->
		<section id="team-section" class="team-section sec-ptb-120 bg-light-gray clearfix">
			@foreach($teams as $team)
				<div class="container">
				<div class="section-title text-center mb-70">
					<span class="small-title">{{ $team->team_title }}</span>
					<h2 class="big-title mb-0">{{ $team->team_subtitle }}</h2>
				</div>

				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="team-member-item">
							<div class="image-container">
								<img src="{{ asset('public/portal/assets/images/team').'/'.$team->team_member_one_img }}" alt="Thiago Muffo">
							</div>
							<div class="member-info">
								<h3 class="member-name">{{ $team->team_member_one_name }}</h3>
								<span class="member-title">{{ $team->team_member_one_function }}</span>
								<br/>
								<p>{{ $team->team_member_one_description }}</p>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="team-member-item">
							<div class="image-container">
								<img src="http://roomeouk.com/roomeo/public/portal/assets/images/team/{{ $team->team_member_two_img }}" alt="Juliano de Conto">		
							</div>
							<div class="member-info">
								<h3 class="member-name">{{ $team->team_member_two_name }}</h3>
								<span class="member-title">{{ $team->team_member_two_function }}</span>
								<br/>
								<p>{{ $team->team_member_two_description }}</p>
							</div>
						</div>
					</div>
				</div>

			</div>
			@endforeach
			
		</section>
		<!-- team-section - end
		================================================== -->


@endsection