<div class="barra-busca-mapa">
<form action="#">
								<div class="form-group ul-li clearfix">
									<ul class="nav-busca clearfix">
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
											</div>
										</li>
										<li>
											<a class="custom-btn" onClick="filter()"><i class="far fa-search"></i> Find Rooms</a>
										</li>
									</ul>
								</div>
							</form>

</div>