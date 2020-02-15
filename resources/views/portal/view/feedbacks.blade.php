<!-- testimonial -->
<section id="testimonial-section" class="testimonial-section sec-ptb-120 clearfix">
	<div class="container">

		<div class="section-title mb-60">
			<span class="small-title">Reviews</span>
			<h2 class="big-title mb-0">What our clients are saying</h2>
		</div>

		<div id="testimonial-carousel" class="testimonial-carousel owl-carousel owl-theme">
		@foreach($feedbacks as $feedback)
			<div class="item">
				<div class="rating-star ul-li clearfix">
					<ul class="clearfix">
						@if( $feedback->feedbacks_stars == 1)
							<li class="rated"><i class="fas fa-star"></i></li>
						@elseif( $feedback->feedbacks_stars == 2)
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
						@elseif( $feedback->feedbacks_stars == 3)
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
						@elseif( $feedback->feedbacks_stars == 4)
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
						@elseif( $feedback->feedbacks_stars == 5)
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
							<li class="rated"><i class="fas fa-star"></i></li>
						@endif
					</ul>
					<span class="review-text">“{{ $feedback->feedbacks_comment_title}}“</span>
				</div>
				<p>
					{{ $feedback->feedbacks_comment_description }}
				</p>
				<div class="admin-info clearfix">
					<div class="admin-content">
						<h3 class="admin-name">{{ $feedback->feedbacks_client_name }}</h3>
						<span class="admin-title">{{ $feedback->feedbacks_client_function }}</span>
					</div>
				</div>
			</div>
			@endforeach
			
		</div>			
	</div>
</section>