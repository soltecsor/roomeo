<!-- banner -->
@foreach($banners as $banner)
<section id="banner-section" class="banner-section clearfix">
	<div class="parallax-window" data-parallax="scroll" data-image-src="{{ asset('public/portal/uploads/slider').'/slide01.jpg' }}">
		<div class="overlay-blue clearfix">
			<div class="container">
				<div class="row justify-content-lg-start justify-content-md-center">

					<div class="col-lg-8 col-md-9 col-sm-12 v-center">
						<div class="banner-content">
							<span class="sub-title">{{ $banner->home_title_one }}</span>
							<h2 class="title-text">{{ $banner->home_title_two }}</h2>
							<div class="text">

							</div>
							<form action="#">
								<div class="form-group ul-li clearfix">
									<ul class="nav-busca clearfix">
										<li>
											<div class="form-item mb-0">
												<select id="location-input">
													<option>Location</option>
												</select>
												<!-- <input id="location-input" type="search" placeholder="Location"> -->
												<label for="location-input" class="form-item-btn"><i class="fal fa-location"></i></label>
											</div>
										</li>
										<li>
											<div class="form-item type-select-form mb-0">						
												<select id="type-select">
													<option data-display="Budget Range"></option>
												</select>
												<label for="type-select" class="form-item-btn"><i class="fas fa-pound-sign"></i></label>
												<a class="toggle-sm"><i class="fas fa-times"></i></a>
											</div>
											<div class="bloco-busca">
												<div class="rangeslider">
													<h5>Enter budget range below</h5>	
												    <input class="min" name="range_1" type="range" min="0" max="1200" value="0" />
												    <input class="max" name="range_1" type="range" min="0" max="1200" value="1200" />
												    <span class="range_min light left">£ 0 pcm</span>
												    <span class="range_max light right">£ 1,200 + pcm</span>
												</div>
											</div>
										</li>
										<li>
											<div class="form-item type-select-form mb-0">
												<select id="type-select">
													<option data-display="Move-in Date">Move-in Date</option>
												</select>
												<label for="type-select" class="form-item-btn"><i class="far fa-calendar-alt"></i></label>
												<a class="toggle-sm"><i class="fas fa-times"></i></a>
											</div>
											<div class="bloco-busca">
												<div class="rangedate">
													<h5>Choose your check-in date</h5>
													<span>
														<label for="from">
															From 
															<input id="from" name="from" class="datetimepicker" type="text" >
															<img src="{{ asset('public/portal/assets/images/ico').'/calendar.png'}}" alt="roomeo home sharing" class="calendar" />
														</label>														
														<!-- <label for="to">
															To 
															<input id="to" name="to" class="datetimepicker" type="text" >
															<img src="{{ asset('public/portal/assets/images/ico').'/calendar.png'}}" alt="roomeo home sharing" class="calendar" />
														</label> -->
													</span>
												</div>
												<button class="form-control"  id="btAnytime" style="width:50%;position:relative;margin:auto;background:#05b59d;color: #352026">Anytime</button>

											</div>
										</li>
										<li>
											<a class="custom-btn" onClick="filter()"><i class="far fa-search"></i> Find Rooms</a>
										</li>
									</ul>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 v-center">
						<div class="bloco">
							<h3>{{ $banner->home_boxtitle }}</h3>
							<h4>{{ $banner->home_boxsubtitle }}</h4>
							<a href="{{ url('/landlord') }}" class="details-btn">{{ $banner->home_boxphone }}</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<script type="application/javascript">

	$('.min').on('change', function(){
		localStorage.setItem('rangeMin',$(this).val())
	})
	$('.max').on('change', function(){
		localStorage.setItem('rangeMax',$(this).val())
	})

	$('#to').on('click', function(){
		$(this).datepicker({
			dateFormat: 'yy-mm-dd',
			onSelect: function(dateText, inst) { 
				localStorage.setItem('dateTo',dateText)
			}
		});
	})
	$('#from').on('click', function(){
		$(this).datepicker({
			dateFormat: 'yy-mm-dd',
			onSelect: function(dateText, inst) { 
				localStorage.setItem('dateFrom',dateText)
			}
		});
	})

	function filter(){
		window.location.reload(false);
	}
	$(function(){	
		$('.form-item').css('height','50px')
		$('.nice-select').css('border','none')
		$('.nice-select').css('line-height','50px')
		$('.custom-btn').css('height','50px')
		$('.custom-btn').css('line-height','50px')
		$('.list:first').addClass('combolist')
		$('.combolist').css('margin-top','-10px')
		$('.combolist').append('<li class="optionSelected">All London</li>')
		let filterArea = JSON.parse(localStorage.getItem('filterArea'))
		for(let i=0;i<=filterArea.length;i++){
			if(filterArea[i] !== undefined){
				$('.list:first').append('<li class="optionSelected">'+filterArea[i]+'</li>')
			}
		}
		$('.optionSelected').on('click', function(){
			if($(this).text() === 'All London'){
				window.location.reload()
			}else{
				localStorage.setItem('location',$(this).text())
				window.location.reload()
			}
			
		})

		$('.current').on('click',function(){
			let link = $(this).html()

			if(link === 'Location'){
				$('.combolist').css('visibility','')
				$('.show').css('visibility','hidden')
			}else{
				$('.show').css('visibility','')
			}
		})

		$('#btAnytime').on('click',function(e){
			e.preventDefault();
			window.location.href="<?php url('/room-search') ?>"
		})	
	})

</script>
@endforeach