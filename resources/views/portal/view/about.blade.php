<!-- about-section -->
@foreach($abouts as $about)
<section id="about-section" class="about-section clearfix">
	<div class="overlay-white sec-ptb-120 clearfix">
		<div class="container">
			<div class="row justify-content-lg-start justify-content-md-center">

				<div class="col-lg-5 col-md-10 col-sm-12">
					<div class="about-content">
						<div class="section-title">
							<span class="small-title">{{ $about->about_title_one }}</b></span>
							<h2 class="big-title">{{ $about->about_title_two }}</h2>
							<a href="#!" class="custom-btn">{{ $about->about_button }}</a>
						</div>
					</div>
				</div>

				<div class="col-lg-7 col-md-8 col-sm-12">
					<div class="about-content">
						<p>
							{!! $about->about_description !!}
						</p> 
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
@endforeach
