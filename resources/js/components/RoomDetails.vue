<template>
    <div>
        <!-- property-details-section - start
		================================================== -->
		<section id="property-details-section" class="property-details-section sec-ptb-120 clearfix">
			<div class="container">
				<div class="row justify-content-lg-start justify-content-md-center">

					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="property-title">
							<div class="row justify-content-lg-between justify-content-md-center">

								<div class="col-lg-8 col-md-9 col-sm-12">
									<div class="section-title">
										<span class="small-title">{{ unit.unit_type }}</span>
										<h2 class="big-title mb-30">{{ unit.full_address }}</h2>
										<div class="post-meta ul-li clearfix">
											<ul class="clearfix">
												<li><i class="fal fa-map-marker-alt"></i> {{ unit.city }}, {{unit.country}}</li>
												<li><a href="#!"><i class="far fa-bed"></i> {{ unit.bedrooms }} BD</a></li>
												<li><a href="#!"><i class="fas fa-bath"></i> {{ unit.bathrooms }} BA</a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="info-list ul-li-right clearfix">
										<ul class="clearfix">
											<li><strong class="price-text">£ {{ unit.market_rent }}</strong></li>
											<!-- neste caso, manter um ou outro, dependendo da disponibilidade -->
											<li>per month</li>
											<!-- <li><span class="item-badge bg-default-lightblue">PW</span></li>
											PCM or PW -->
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>

					<div class="col-lg-8 col-md-10 col-sm-12">
						<agile :autoplay-speed="6000" :speed="2500" autoplay="autoplay">
							<span v-for="n in unit.image_urls" :key="n">
								<img v-bind:src="n" alt="image_not_found" class="slide_full" />
							</span>
							<template slot="prevButton">
								<i class="fas fa-chevron-left"></i>
							</template>
							<template slot="nextButton">
								<i class="fas fa-chevron-right"></i>
							</template>
						</agile>
						<br>
						<div class="mb-30">
							<p>{{ unit.description }}</p>
						</div>
						<div class="ul-li-block mb-70 clearfix">
							<h4>General Information</h4>
							<ul class="clearfix mt-4">
								<li>
									<strong>Property Id:</strong>
									Double bed
								</li>									
								<li>
									<strong>Bedrooms:</strong>
									Double bed
								</li>									
								<li>
									<strong>Bathrooms:</strong>
									Double bed
								</li>									
								<li>
									<strong>Living room</strong>
									Double bed
								</li>	
							</ul>
						</div>
						<div class="more-features ul-li-block mb-70 clearfix">
							<h3 class="area-title">Bills included:</h3>
							<ul class="clearfix">
								<li>
									<svg class="icon">
									   <use xlink:href="#router" />
									</svg>
									Internet
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#telephone" />
									</svg>
									Telephone
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#hotel" />
									</svg>
									Contents Insurance
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#electronics" />
									</svg>
									Electricity
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#satellite" />
									</svg>
									Cable/Satellite
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#television-1" />
									</svg>
									TV Licence
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#tap" />
									</svg>
									Water
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#water-heater" />
									</svg>
									Gas
								</li>
							</ul>
						</div>
						<div class="more-features ul-li-block mb-70 clearfix">
							<h3 class="area-title">Property Features</h3>
							<ul class="clearfix">
								<li v-for="feature in unit.features" :key="feature">
									{{ feature }}
								</li>
								
								<!-- <li>
									<svg class="icon">
									   <use xlink:href="#bedroom" />
									</svg>
									Double bed
								</li>								
								<li> 
									<svg class="icon">
									   <use xlink:href="#chest" />
									</svg>
									Chest of drawers
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#armchair" />
									</svg>
									Armchair
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#curtain" />
									</svg>
									Double Glazing
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#desk-lamp" />
									</svg>
									Desk Lamp
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#key" />
									</svg>
									Lockable Bedroom
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#ironing-board" />
									</svg>
									Ironing Board
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#rug" />
									</svg>
									Rug
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window" />
									</svg>
									Window
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#television" />
									</svg>
									TV Licence
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#washing-machine" />
									</svg>
									Washing Machine
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#television-1" />
									</svg>
									TV Licence
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#phone" />
									</svg>
									Telephone
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#fridge" />
									</svg>
									Fridge
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#router" />
									</svg>
									Internet
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#tap" />
									</svg>
									Water
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#desk" />
									</svg>
									Desk
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#livingroom" />
									</svg>
									Shared living room
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#air-conditioner" />
									</svg>
									Air Conditioner
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#closet" />
									</svg>
									Fitted Wardrobe
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#dishwasher" />
									</svg>
									Dishwasher
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#cupboard" />
									</svg>
									Standalone Wardrobe
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#coffee-maker" />
									</svg>
									Coffee Maker
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#router-1" />
									</svg>
									Internet
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#oven" />
									</svg>
									Cooker
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#toilet-paper" />
									</svg>
									Consumables included
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#vacuum-cleaner" />
									</svg>
									Vacuum Cleaner
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bicycle" />
									</svg>
									Bike Storage
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#canvas" />
									</svg>
									Contemporary décor
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#add-user" />
									</svg>
									Add User
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#restaurant" />
									</svg>
									Restaurant
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#restaurant" />
									</svg>
									Amenities nearby
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#reservation" />
									</svg>
									Dine-in kitchen
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#stove" />
									</svg>
									Stove
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#fridge-1" />
									</svg>
									Fridge
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#cutlery" />
									</svg>
									Cutlery
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#dog" />
									</svg>
									Dog
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#home-insurance" />
									</svg>
									Home Insurance
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#life-insurance" />
									</svg>
									Life Insurance
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#cleaner" />
									</svg>
									Cleaner
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#dishwasher-1" />
									</svg>
									Dishwasher
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#dryer" />
									</svg>
									Tumble Dryer
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#microwave-oven" />
									</svg>
									Microwave
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#telephone" />
									</svg>
									Telephone
								</li>								
								<li>
									<svg class="icon">
									   <use xlink:href="#agent" />
									</svg>
									Porterage
								</li>							
								<li>
									<svg class="icon">
									   <use xlink:href="#agent" />
									</svg>
									Concierge
								</li>				
								<li>
									<svg class="icon">
									   <use xlink:href="#box" />
									</svg>
									Safety Deposit Box 
								</li>								
								<li>
									<svg class="icon">
									   <use xlink:href="#calendar" />
									</svg>
									Calendar
								</li>								
								<li>
									<svg class="icon">
									   <use xlink:href="#lamp" />
									</svg>
									Lamp
								</li>						
								<li>
									<svg class="icon">
									   <use xlink:href="#fridge-2" />
									</svg>
									Minifridge
								</li>		
								<li>
									<svg class="icon">
									   <use xlink:href="#house" />
									</svg>
									House
								</li>								
								<li>
									<svg class="icon">
									   <use xlink:href="#kitchen" />
									</svg>
									Cooking facilities
								</li>				
								<li>
									<svg class="icon">
									   <use xlink:href="#picture" />
									</svg>
									Picture
								</li>	
								<li>
									<svg class="icon">
									   <use xlink:href="#work-table" />
									</svg>
									Work Table
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#armchair-1" />
									</svg>
									Armchair
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#sink" />
									</svg>
									Sink
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#wardrobe" />
									</svg>
									Wardrobe
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#television-2" />
									</svg>
									TV in room
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#television-2" />
									</svg>
									Communal tv
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#wc" />
									</svg>
									Separate WC
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#stairs" />
									</svg>
									Stairs
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#library" />
									</svg>
									Library
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bus" />
									</svg>
									Bus stop nearby
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#train" />
									</svg>
									Close to station
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#guide" />
									</svg>
									Guide
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#tree" />
									</svg>
									Tree
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#trees" />
									</svg>
									Trees
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#appartment" />
									</svg>
									Appartment
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#residence" />
									</svg>
									Residence
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bed" />
									</svg>
									&frac34; bed
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#hotel" />
									</svg>
									Contents Insurance
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#electronics" />
									</svg>
									Electricity
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bed" />
									</svg>
									Single bed
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bed" />
									</svg>
									Twin bed
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#cabinet" />
									</svg>
									Cabinet
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bath" />
									</svg>
									Ensuite
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bath" />
									</svg>
									Bathroom
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bathroom" />
									</svg>
									Shower room
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#leaf" />
									</svg>
									Back Garden
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#leaf" />
									</svg>
									Communal Garden
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#leaf" />
									</svg>
									Enclosed Garden
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#leaf" />
									</svg>
									Front Garden
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#leaf" />
									</svg>
									Private Garden
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#leaf" />
									</svg>
									Rear Garden
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#terrace" />
									</svg>
									Roof Terrace
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#terrace" />
									</svg>
									Terrace
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window-2" />
									</svg>
									Private Balcony
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#satellite" />
									</svg>
									Cable/Satellite
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#heater" />
									</svg>
									Heater
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#fireplace" />
									</svg>
									Fireplace
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#temperature" />
									</svg>
									Central Heating
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#dumbbell" />
									</svg>
									Gym
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#home" />
									</svg>
									New Home
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#swimming-pool" />
									</svg>
									Swimming Pool
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#waves" />
									</svg>
									Waterfront
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#wood" />
									</svg>
									Wooden Floors
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#cat" />
									</svg>
									Pets Allowed
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#cigarette" />
									</svg>
									Smoking Allowed
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#no-smoking" />
									</svg>
									No Smoking
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#siren" />
									</svg>
									Burglar Alarm
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#disable" />
									</svg>
									Disabled Access
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#maid" />
									</svg>
									Serviced
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#pound" />
									</svg>
									DSS Eligible
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#clerk" />
									</svg>
									Trainees Eligible
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Allocated
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Communal
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Covered
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Garage
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Driveway
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Gated
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Off Street
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									On Street
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Rear
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Permit
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Private
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Residents
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#decorating" />
									</svg>
									Decorating
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#nightstand" />
									</svg>
									Bedside table
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bench" />
									</svg>
									Park in the proximity
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bar" />
									</svg>
									Bar
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bicycle-1" />
									</svg>
									Bike Storage
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#water-heater" />
									</svg>
									Gas
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window-1" />
									</svg>
									Window
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window" />
									</svg>
									Window Street View
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window" />
									</svg>
									Window Yard View
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#suitcase" />
									</svg>
									Suitcase
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#student" />
									</svg>
									Postgrad Eligible
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#student-1" />
									</svg>
									Professional Eligible
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#desk-1" />
									</svg>
									Desk & Chair
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#reading" />
									</svg>
									Undergraduate Eligible
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#student-2" />
									</svg>
									Student
								</li>
								<li>
									<svg class="icon" style="background-image: url(assets/images/ico/sign.svg);"></svg>
									Boys only
								</li>
								<li>
									<svg class="icon" style="background-image: url(assets/images/ico/homosexual.svg);"></svg>
									Boys and Girls
								</li>
								<li>
									<svg class="icon" style="background-image: url(assets/images/ico/femenine.svg);"></svg>
									Girls only
								</li> -->
							</ul>
						</div>
						<div class="more-features ul-li-block mb-70 clearfix">
							<h3 class="area-title">Your Bedroom</h3>
							<ul class="clearfix">
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Gated
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Off Street
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									On Street
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Rear
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Permit
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Private
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car" />
									</svg>
									Residents
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#decorating" />
									</svg>
									Decorating
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#nightstand" />
									</svg>
									Bedside table
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bench" />
									</svg>
									Park in the proximity
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bar" />
									</svg>
									Bar
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bicycle-1" />
									</svg>
									Bike Storage
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#water-heater" />
									</svg>
									Gas
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window-1" />
									</svg>
									Window
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window" />
									</svg>
									Window Street View
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window" />
									</svg>
									Window Yard View
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#suitcase" />
									</svg>
									Suitcase
								</li>
							</ul>
						</div>

						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="custom-btn-bordered active" id="floorplan-tab" data-toggle="tab" href="#floorplan" role="tab" aria-controls="floorplan" aria-selected="true">Floor Plan</a>
						  </li>
						  <li class="nav-item">
						    <a class="custom-btn-bordered " id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="floorplan" role="tabpanel" aria-labelledby="floorplan-tab">
						  	<img src="uploads/property/plan.png" alt="planta temporária" class="img-planta"/>
						  </div>
						  <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
						  	<iframe width="560" height="520" class="video" src="https://www.youtube.com/embed/9KMwsXD0vj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						  </div>
						</div>
						
					</div>

					<div class="col-lg-4 col-md-10 col-sm-12">
						<aside id="sidebar-section" class="sidebar-section clearfix">

							<div class="widget widget_categories ul-li-block clearfix">
								<h2 class="widget_title mb-30 text-center">£275 per week</h2>
								<hr/>
								<ul class="clearfix">
									<li><a href="#!">Monthly Rent <span><strong>£ {{ unit.market_rent }}</strong></span></a></li>
									<li><a href="#!">Deposit Amount <span><strong>£ {{ unit.deposit_amount }}</strong></span></a></li>
									<li><a href="#!"><b>Total </b><span><strong>£ {{ unit.market_rent + unit.deposit_amount }}</strong></span></a></li>
									<li><a href="#!">Hold Deposit <span><strong>£ 75.00</strong></span></a></li>
								</ul>
								<hr/>
								<p><small>*This is what you pay if you wish to reserve this room. This amount will be deducted from your first month’s rent our refunded if the landlord decides not to rent to you.</small></p>

								<br/>

								<div id="accordion" class="lista-forms">


								<div class="card">
								    <div class="card-header" id="headingTwo">
								    	<a href="#!" class="tab-marrom show" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><i class="far fa-eye"></i> book a viewing</a>
								    </div>
								    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
								      <div class="card-body">
										<div class="form-item">
											<input id="bv-input-name" type="text" placeholder="First Name">
											<label for="bv-input-name" class="form-item-btn"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="bv-input-lastname" type="text" placeholder="Last Name">
											<label for="bv-input-lastname" class="form-item-btn"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="bv-input-email" type="email" placeholder="E-mail">
											<label for="bv-input-email" class="form-item-btn"><i class="far fa-envelope"></i></label>
										</div>
										<div class="form-item">
											<input id="bv-input-phone" type="tel" placeholder="Phone">
											<label for="bv-input-phone" class="form-item-btn"><i class="far fa-phone"></i></label>
										</div>
										<div class="form-item rangedate">
											<input type='text' class="form-control visite" id='visite' placeholder="Date" name="visite" />
											<label for="visite" class="form-item-btn"><i class="far fa-calendar"></i></label>
										</div>
										<div class="form-textarea">
											<textarea id="bv-textarea" placeholder="Tell us a bit about yourself and your requirements"></textarea>
											<label for="bv-textarea" class="form-item-btn"><i class="far fa-edit"></i></label>
										</div>
										<div class="text-center">
											<a href="#!" class="custom-btn">booking now</a>
										</div>
									   </div>

									</div>
								</div>		
									
								<div class="card">
								    <div class="card-header" id="headingOne">
								    	<a href="#!" class="tab-vermelha collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="far fa-edit"></i> send an enquiry</a>
								    </div>

								    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								      <div class="card-body">
										<div class="form-item">
											<input id="se-input-name" type="text" placeholder="First Name">
											<label for="se-input-name" class="form-item-btn"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="se-input-lastname" type="text" placeholder="Last Name">
											<label for="se-input-lastname" class="form-item-btn"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="se-input-email" type="email" placeholder="E-mail">
											<label for="se-input-email" class="form-item-btn"><i class="far fa-envelope"></i></label>
										</div>
										<div class="form-item">
											<input id="se-input-phone" type="tel" placeholder="Phone">
											<label for="se-input-phone" class="form-item-btn"><i class="far fa-phone"></i></label>
										</div>
										<div class="form-textarea">
											<textarea id="se-textarea" placeholder="Tell us a bit about yourself and your requirements"></textarea>
											<label for="se-textarea" class="form-item-btn"><i class="far fa-edit"></i></label>
										</div>
										<div class="text-center">
											<a href="#!" class="custom-btn">enquire now</a>
										</div>
									   </div>

									</div>
								</div>	

								<div class="card">
								    <div class="card-header" id="headingThree">
								      <a href="#!" class="tab-verde collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="far fa-check-square"></i> reserve now</a>
								    </div>
								    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								      <div class="card-body">
										<div class="form-item">
											<input id="rn-input-name" type="text" placeholder="First Name">
											<label for="rn-input-name" class="form-item-btn"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="rn-input-lastname" type="text" placeholder="Last Name">
											<label for="rn-input-lastname" class="form-item-btn"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="rn-input-email" type="email" placeholder="E-mail">
											<label for="rn-input-email" class="form-item-btn"><i class="far fa-envelope"></i></label>
										</div>
										<div class="form-item">
											<input id="rn-input-phone" type="tel" placeholder="Phone">
											<label for="rn-input-phone" class="form-item-btn"><i class="far fa-phone"></i></label>
										</div>
										<div class="form-textarea">
											<textarea id="rn-textarea" placeholder="Tell us a bit about yourself and your requirements"></textarea>
											<label for="rn-textarea" class="form-item-btn"><i class="far fa-edit"></i></label>
										</div>
										<div class="text-center">
											<a href="#!" class="custom-btn">reserve now</a>
										</div>
									   </div>

									</div>
								</div>

							</div>

							</div>

						</aside>

					</div>
					
				</div>
			</div>
		</section>
		<!-- property-details-section - end
		================================================== -->



		<!-- ====================== end about -->
		<!-- <section id="about-section" class="about-section-sub sec-ptb-120 pt-0 clearfix">
			<div class="container">
				<div class="row justify-content-lg-between justify-content-md-center">

					<div class="col-lg-6 col-md-8 col-sm-12">
						<div class="property-location clearfix">
							<div id="google-map" class="google-map map-area">
								<div id="googleMaps"></div>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-9 col-sm-12">
						<div class="about-content">

							<div class="section-title">
								<span class="small-title">location</span>
								<h2 class="big-title mb-0">About the area</h2>
							</div>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in volupt
								ate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<a href="#!" class="custom-btn">Call To Action</a>

						</div>
					</div>
					
				</div>
			</div>
		</section> -->
		<!-- ====================== end about -->


		<!-- property-section - start
		================================================== -->
		<!-- <section id="property-section" class="property-section sec-ptb-120 bg-light-gray clearfix">
			<div class="container">
				<div class="row justify-content-center property-destaques">

					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="section-title text-center mb-30">
							<span class="small-title">Available Now</span>
							<h2 class="big-title mb-0">Other rooms in this property</h2>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12">
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
											<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
										</div>
										<div class="item">
											<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
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
								<h2 class="item-title">
									<a href="room-details.php" class="title-link">Renovated apartment at floor in bathroom.</a>
								</h2>
								<div class="price-and-location ul-li clearfix">
									<ul class="clearfix">
										<li class="text-left"><strong class="price-text">£ 2,200.00</strong></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
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
											<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
										</div>
										<div class="item">
											<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
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
								<h2 class="item-title">
									<a href="room-details.php" class="title-link">Renovated apartment at floor in bathroom.</a>
								</h2>
								<div class="price-and-location ul-li clearfix">
									<ul class="clearfix">
										<li class="text-left"><strong class="price-text">£ 2,200.00</strong></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
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
											<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
										</div>
										<div class="item">
											<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
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
								<h2 class="item-title">
									<a href="room-details.php" class="title-link">Renovated apartment at floor in bathroom.</a>
								</h2>
								<div class="price-and-location ul-li clearfix">
									<ul class="clearfix">
										<li class="text-left"><strong class="price-text">£ 2,200.00</strong></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
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
											<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
										</div>
										<div class="item">
											<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="uploads/slider/slide01.jpg" alt="image_not_found" class="img-fluid"></a>
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
								<h2 class="item-title">
									<a href="room-details.php" class="title-link">Renovated apartment at floor in bathroom.</a>
								</h2>
								<div class="price-and-location ul-li clearfix">
									<ul class="clearfix">
										<li class="text-left"><strong class="price-text">£ 2,200.00</strong></li>
									</ul>
								</div>
							</div>

						</div>
					</div>


					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="pagination-list text-center clearfix">
							<a href="room-search.php" class="custom-btn">view more <i class="fal fa-plus"></i></a>
						</div>
					</div>
					
				</div>
			</div>
		</section> -->
		<!-- property-section - end
		================================================== -->
    </div>
</template>
<<script>
import { mapState, mapActions, mapGetters } from "vuex";
import { VueAgile } from "vue-agile";

export default {
	components: {
		agile: VueAgile
	},
	data() {
		return {};
	},
	props:{
		item:{
			required: true
		}
	},
	computed: {
		...mapState("property", ["id_unit"]),
		...mapState("unit", ["unit"]),
	},
	created() {
		this.getUnit(this.item)
	},
	mounted() {
		
	},  
	methods: {
		...mapActions("unit", ["getUnit", "getId"]),
	},
};
</script>