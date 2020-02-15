
<!-- services -->
@foreach($services as $service)
<section id="service-section" class="service-section sec-ptb-120 clearfix">
	<div class="container">

		<div class="section-title text-center">
			<span class="small-title"></span>
			<h2 class="big-title mb-0">{{ $service->title }}</h2>
		</div>

		<div class="row meio">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="service-grid-item-1">
					<span class="service-icon">
						<img src="{{ asset('public/portal/assets/images/ico').'/'.$service->icon_one }}" alt="Search & Choose">
					</span>
					<h2 class="service-title">{{ $service->service_one_title }}</h2>
					<p>
						{{ $service->service_one_description }} 
					</p>
				</div>
			</div> 

			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="service-grid-item-1">
					<span class="service-icon">
						<img src="{{ asset('public/portal/assets/images/ico').'/'.$service->icon_two }}" alt="Book a viewing or make an enquiry">
					</span> 
					<h2 class="service-title">{{ $service->service_two_title }}</h2>
					<p>
						{{ $service->service_two_description }} 
					</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="service-grid-item-1">
					<span class="service-icon">
						<img src="{{ asset('public/portal/assets/images/ico').'/'.$service->icon_three }}" alt="View or reserve your room">
					</span>
					<h2 class="service-title">{{ $service->service_three_title }}</h2>
					<p>
						{{ $service->service_three_description }}  
					</p>
				</div>
			</div>	

			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="service-grid-item-1">
					<span class="service-icon">
						<img src="{{ asset('public/portal/assets/images/ico').'/'.$service->icon_four }}" alt="Welcome to your new home">
					</span>
					<h2 class="service-title">{{ $service->service_four_title }}</h2>
					<p>
						{{ $service->service_four_description }}
					</p>
				</div>
			</div>		

		</div>

	</div>
</section>
@endforeach