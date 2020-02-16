<div class="barra-busca-mapa">
	<form action="#">
		<div class="form-group ul-li clearfix">
			<ul class="clearfix">
				<li>
					<div class="form-item mb-0">
						<input id="location-input" type="search" placeholder="Location">
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
						    <input class="min" name="range_1" type="range" min="1" max="100" value="10" />
						    <input class="max" name="range_1" type="range" min="1" max="100" value="90" />
						    <span class="range_min light left">£ 10.000</span>
						    <span class="range_max light right">£ 90.000</span>
						</div>
					</div>
				</li>
				<li>
					<div class="form-item type-select-form mb-0">
						<select id="type-select">
							<option data-display="From/To">From/To</option>
						</select>
						<label for="type-select" class="form-item-btn"><i class="far fa-calendar-alt"></i></label>
						<a class="toggle-sm"><i class="fas fa-times"></i></a>
					</div>
					<div class="bloco-busca">
						<div class="rangedate">
							<h5>Choice the better period</h5>
							<span>
								<label for="from">
									From 
									<input id="from" name="from" class="datetimepicker" type="text" >
									<img src="{{ asset('public/portal/assets/images/ico').'/calendar.png'}}" alt="roomeo home sharing" class="calendar" />
								</label>														
								<label for="to">
									To 
									<input id="to" name="to" class="datetimepicker" type="text" >
									<img src="{{ asset('public/portal/assets/images/ico').'/calendar.png'}}" alt="roomeo home sharing" class="calendar" />
								</label>
							</span>
						</div>
					</div>
				</li>
				<li>
					<a id="busca-lista" class="custom-btn" href="#property-section"><i class="far fa-search"></i> Find Rooms</a>
				</li>
				<li class="more">
					<div class="form-item type-select-form mb-0">						
						<select id="type-select">
							<option data-display="More Filters"></option>
						</select>
						<label for="type-select" class="form-item-btn"><i class="fas fa-plus"></i></label>
					</div>
				</li>
			</ul>


		</div>			

	</form>

</div>