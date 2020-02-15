@extends('portal.layouts.app')

@section('content')
		@foreach($terms as $term)		
		<section id="about-section" class="about-section about-terms sec-ptb-120 clearfix">
			<div class="container">

				<div class="section-title mb-70 text-center">
					<span class="small-title"></span>
					<h2 class="big-title mb-0">{{ $term->terms_title }}</h2>
				</div>

				<div class="row justify-content-lg-between justify-content-md-center mt-70">

					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="about-content">
							<p>{!! $term->terms_description !!}</p>
						</div>
					</div>
					
				</div>

			</div>
		</section>
		<!-- about-section - end
		================================================== -->
		@endforeach

@endsection