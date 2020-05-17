@extends('portal.layouts.app')

@section('content')
<section id="property-details-section" class="property-details-section sec-ptb-120 clearfix">
			<div class="container" id="arthur">
				<div class="row justify-content-lg-start justify-content-md-center">

					<div class="col-lg-12 col-md-12 col-sm-12" v-if="units != null">
						<div class="property-title">
							<div class="row justify-content-lg-between justify-content-md-center">

								<div class="col-lg-8 col-md-9 col-sm-12">
									<div class="section-title">
										<span class="small-title">([units.unit_ref])</span>
										<h2 class="big-title mb-30">([units.short_description])</h2>
										<div class="post-meta ul-li clearfix">
											<ul class="clearfix">
												<li><i class="fal fa-map-marker-alt"></i> ([units.address_line_1]), ([units.address_line_2]) - ([units.city]) </li>
												<li v-if="units.max_occupancy > 0"><a href="#!"><i class="fas fa-male"></i> ([units.max_occupancy])</a></li>
												<li v-if="units.furnished != ''"><a href="#!"><i class="fas fa-chair"></i> ([units.furnished])</a></li>
												<li v-if="units.floors != ''"><a href="#!"><i class="fas fa-building"></i> ([units.floors])</a></li>
												<li v-if="units.bathrooms != 'N/A'"><a href="#!"><i class="fas fa-bath"></i> ([units.bathrooms])</a></li>
												<li v-if="units.receptions != 'N/A'"><a href="#!"><i class="fas fa-user-shield"></i> ([units.receptions])</a></li>
												<li v-if="units.bedrooms != 'N/A'"><a href="#!"><i class="far fa-bed"></i> ([units.bedrooms])</a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12">
									<div class="info-list ul-li-right clearfix">
										<ul class="clearfix">
											<li><strong class="price-text">£ ([units.portal_market_rent]).00</strong></li>
											<li>([units.portal_market_rent_frequency])</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>

					<div class="col-lg-8 col-md-10 col-sm-12">
					<div class="image-carousel-container" v-if="units !== null"> 
							<div id="details-image-carousel" class="owl-carousel owl-theme owl-property owl-loaded owl-drag">
								<div class="owl-stage-outer" v-if="units.image_urls.length > 0">	
								<div class="owl-stage" style="transform: translate3d(-739px, 0px, 0px); transition: all 0.25s ease 0s; width: 2590px;">
										<div :class="i === 0 ? 'owl-item active' : 'owl-item'" style="width: 370px;" v-for="(image,i) of units.image_urls.concat(property[0].image_urls)" :key="i">
											<div class="item">
												<a :href="image.replace('download','view')" data-toggle="lightbox" data-gallery="property">
													<img v-show="image != ''" :src="image.replace('download','view')" alt="roomeo home sharing" class="img-fluid">
												</a>
											</div>
										</div>
									</div>

								</div>
								<div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
								<div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
							</div>
						</div> 
						<div class="mb-30" v-if="units != null">
							<p>([units.description]) </p>
						</div>
						<div class="ul-li-block mb-70 clearfix">
						</div>
						<div class="more-features ul-li-block mb-70 clearfix">
							<h3 class="area-title">Bills included:</h3>
							<ul class="clearfix" v-if="property.length > 0">
								<li v-for="(bill,i) in bills[0]" :key="i">
									<svg class="icon">
									<use :xlink:href="'#'+bill.toLowerCase()"></use>
									</svg>
									([bill])
								</li>
							</ul>
						</div>
						<div class="more-features ul-li-block mb-70 clearfix" v-if="units != null">
							<h3 class="area-title">Property Features</h3>
							<ul class="clearfix" v-if="property.length > 0">
								<li v-for="(feature,i) in features[0]" :key="i">
									<svg class="icon">
									   <use :xlink:href="'#'+feature.toLowerCase()"></use>
									</svg>
									([feature])
								</li>
							</ul>
						</div>
						<div class="more-features ul-li-block mb-70 clearfix" v-if="units != null">
							<h3 class="area-title">Your Bedroom</h3>
							<ul class="clearfix">
								<li v-for="(feature,i) in units.features" :key="i">
									<svg class="icon">
									   <use :xlink:href="'#'+feature.toLowerCase()"></use>
									</svg>
									([feature])
								</li>
							</ul>
						</div>

						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item waves-effect waves-light">
						    <a class="custom-btn-bordered active" id="floorplan-tab" data-toggle="tab" href="#floorplan" role="tab" aria-controls="floorplan" aria-selected="true">Floor Plan</a>
						  </li>
						  <li class="nav-item waves-effect waves-light">
						    <a class="custom-btn-bordered " id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent" v-if="units != null">
						  <div v-for="(plan, i) in units.floor_plan_urls" :key="i" class="tab-pane fade show active" id="floorplan" role="tabpanel" aria-labelledby="floorplan-tab">
						  	<img v-if="plan != ''" :src="plan" alt="planta temporária" class="img-planta">
						  </div>
						  <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
						  	<iframe width="560" height="520" class="video" src="https://www.youtube.com/embed/9KMwsXD0vj4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
						  </div>
						</div>
						
					</div>

					<div class="col-lg-4 col-md-10 col-sm-12">
						<aside id="sidebar-section" class="sidebar-section clearfix">

							<div class="widget widget_categories ul-li-block clearfix" v-if="units != null">
								<h2 class="widget_title mb-30 text-center">£ ([units.portal_market_rent/4]) per week</h2>
								<hr>
								<ul class="clearfix">
									<li><a href="#!">Monthly Rent <span><strong>£ ([units.portal_market_rent]).00</strong></span></a></li>
									<li><a href="#!">Security Deposit <span><strong>£ ([units.portal_deposit_amount]).00</strong></span></a></li>
									<li><a href="#!"><b>Total </b><span><strong>£ ([units.portal_market_rent+units.deposit_amount]).00</strong></span></a></li>
									<li><a href="#!">Hold Deposit <span><strong>£ 0.00</strong></span></a></li>
								</ul>
								<hr>
								<p><small>*This is what you pay if you wish to reserve this room. This amount will be deducted from your first month’s rent our refunded if the landlord decides not to rent to you.</small></p>

								<br>

								<div id="accordion" class="lista-forms">


								<div class="card">
								    <div class="card-header" id="headingTwo">
								    	<a href="#!" class="tab-marrom show" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><i class="far fa-eye"></i> book a viewing</a>
								    </div>
								    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
								      <div class="card-body">
										<div class="form-item">
											<input id="bv-input-name" type="text" placeholder="First Name" v-model="firstName">
											<label for="bv-input-name" class="form-item-btn active"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="bv-input-lastname" type="text" placeholder="Last Name"  v-model="lastName">
											<label for="bv-input-lastname" class="form-item-btn active"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="bv-input-email" type="email" placeholder="E-mail" v-model="email">
											<label for="bv-input-email" class="form-item-btn active"><i class="far fa-envelope"></i></label>
										</div>
										<div class="form-item">
											<input id="bv-input-phone" type="tel" placeholder="Phone" v-model="phone">
											<label for="bv-input-phone" class="form-item-btn active"><i class="far fa-phone"></i></label>
										</div>
										<div class="form-item rangedate">
											<input type="date" class="form-control datetimepicker hasDatepicker"  data-date-format="yyyy-mm-dd" id="visite" placeholder="Date" name="visite" v-model="date">
											<label for="visite" class="form-item-btn active"><i class="far fa-calendar"></i></label>
										</div>
										<div class="form-textarea">
											<textarea id="bv-textarea" placeholder="Tell us a bit about yourself and your requirements" v-model="notes"></textarea>
											<label for="bv-textarea" class="form-item-btn active"><i class="far fa-edit"></i></label>
										</div>
										<div class="text-center">
											<small  v-if="statusBooking" style="color:green">([messageBooking])</small>
											<small  v-if="!statusBooking" style="color:red">([messageBooking])</small>
											<a href="#!" class="custom-btn" @click="addApplicant">booking now</a>
										</div>
									   </div>

									</div>
								</div>		
									
								<div class="card">
								    <div class="card-header" id="headingOne">
								    	<a href="#!" class="tab-verde collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="far fa-edit"></i> send an enquiry</a>
								    </div>

								    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								      <div class="card-body">
									  <form method="POST" action="{{ url('/send') }}" id="formSend">
									  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
									  <input type="hidden" name="unitRef" :value="unitRef">
	
										<div class="form-item">
											<input id="name" type="text" placeholder="First Name" name="nameMail">
											<label for="se-input-name" class="form-item-btn active"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="surname" type="text" placeholder="Last Name" name="surnameMail">
											<label for="se-input-lastname" class="form-item-btn active"><i class="far fa-user" name="surnameMail" ></i></label>
										</div>
										<div class="form-item">
											<input id="email" type="email" placeholder="E-mail" name="emailMail">
											<label for="se-input-email" class="form-item-btn active"><i class="far fa-envelope"></i></label>
										</div>
										<div class="form-item">
											<input id="phone" type="tel" placeholder="Phone" name="phoneMail">
											<label for="se-input-phone" class="form-item-btn active"><i class="far fa-phone"></i></label>
										</div>
										<div class="form-textarea">
											<textarea id="message-textarea" placeholder="Tell us a bit about yourself and your requirements" name="messageMail"></textarea>
											<label for="se-textarea" class="form-item-btn active"><i class="far fa-edit"></i></label>
										</div>
										<div class="text-center">
											<small  v-if="validateBooking" style="color:red">All fields are required</small>
											<button type="submit" id="sendEmail" class="custom-btn">enquire now</button>
										</div>
										</form>
									   </div>

									</div>
								</div>	

								<!-- <div class="card">
								    <div class="card-header" id="headingThree">
								      <a href="#!" class="tab-verde collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="far fa-check-square"></i> reserve now</a>
								    </div>
								    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								      <div class="card-body">
										<div class="form-item">
											<input id="rn-input-name" type="text" placeholder="First Name">
											<label for="rn-input-name" class="form-item-btn active"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="rn-input-lastname" type="text" placeholder="Last Name">
											<label for="rn-input-lastname" class="form-item-btn active"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="rn-input-email" type="email" placeholder="E-mail">
											<label for="rn-input-email" class="form-item-btn active"><i class="far fa-envelope"></i></label>
										</div>
										<div class="form-item">
											<input id="rn-input-phone" type="tel" placeholder="Phone">
											<label for="rn-input-phone" class="form-item-btn active"><i class="far fa-phone"></i></label>
										</div>
										<div class="form-textarea">
											<textarea id="rn-textarea" placeholder="Tell us a bit about yourself and your requirements"></textarea>
											<label for="rn-textarea" class="form-item-btn active"><i class="far fa-edit"></i></label>
										</div>
										<div class="text-center">
											<a href="#!" class="custom-btn">reserve now</a>
										</div>
									   </div>

									</div>
								</div> -->

							</div>

							</div>

						</aside>

					</div>

				</div>
			</div>
		</section>
		<script type="application/javascript">
        let app = new Vue({
        delimiters: ['([', '])'],
        el: '#arthur',
        data () {
            return {
				firstName:null,
				lastName:null,
				email:null,
				phone:null,
				date:null,
				notes:null,
				statusBooking:null,
				messageBooking:null,
				unitRef:null,
				validateBooking:null,
				features:{},
				property:[
					{image_urls:'http://roomeo.co.uk/assets/images/slider/slide1.jpg'}
				],
				bills:{},
				units:null,
				image_urls:null,
				error:null,
				url:'https://api.arthuronline.co.uk/v2/',
				urlRefresh:' https://auth.arthuronline.co.uk/',
				grant_type:'refresh_token',
				client_id:'c163687de105827e9c35765fadd4b5fc6c356ae6c60f4d1fd608bf10d7c0307e',
				client_secret:'db031ae061087a44424da28ed015c714c3c8824147984f6896730c3a5ac77b32',
				entity:'82013',
            }
        },
        mounted () {	
		   this.getUnits()
		   setTimeout(() => this.getProperty(),2000)
        },
		methods: {
			getUnits(){
				let header = {
                'Authorization':'Bearer '+localStorage.access_token,
                'X-EntityID': this.entity
				}
				let requestOptions = {
					method: 'GET',
					headers: header,
					redirect: 'follow'
				};
				fetch(this.url+'units/'+localStorage.unitId, requestOptions)
				.then(response => response.text())
				.then(result => {
					this.units = JSON.parse(result).data
					this.unitRef = this.units.unit_ref
					console.log(this.units)
				})
				.catch(error => console.log('error', error));
			},
			getProperty(){
				let header = {
                'Authorization':'Bearer '+localStorage.access_token,
                'X-EntityID': this.entity
				}
				let requestOptions = {
					method: 'GET',
					headers: header,
					redirect: 'follow'
				};
				fetch(this.url+'properties?Property_Type=Mixed', requestOptions)
				.then(response => response.text())
				.then(result => {
					this.property = JSON.parse(result).data.filter(p => p.id == this.units.property_id)
					console.log(this.property)
					this.bills = this.property.map(p => p.features.filter(f => f == "Internet" 
																		|| f == "Electricity"
																		|| f == "Cable/Satellite"
																		|| f == "TV Licence"
																		|| f == "Water Rates"
																		|| f == "Gas"
																		|| f == "Fireplace"
														));

					this.features = this.property.map(p => p.features.filter(f => f != "Internet" 
																		&& f != "Electricity"
																		&& f != "Cable/Satellite"
																		&& f != "TV Licence"
																		&& f != "Water Rates"
																		&& f != "Gas"
																		&& f != "Fireplace"
																		));	
				})
				.catch(error => console.log('error', error));
			},
			addApplicant(){
				this.statusBooking = null
				if(!this.firstName || !this.lastName || !this.date || !this.email || !this.phone){
					this.statusBooking = false
					this.messageBooking = "All fields are required"
				}else{
					let header = {
                'Authorization':'Bearer '+localStorage.access_token,
                'X-EntityID': this.entity,
				"Content-Type": "application/json"
				}
				let raw = JSON.stringify(
					{
						"title": "Mr",
						"first_name": this.firstName,
						"last_name": this.lastName,
						"date_of_birth": this.date,
						"email": this.email,
						"phone_home": this.phone,
						"applicant_note": this.notes,
					}
				);
				let requestOptions = {
					method: 'POST',
					headers: header,
					body:raw,
					redirect: 'follow'
				};
				fetch(this.url+'applicants', requestOptions)
				.then(response => response.text())
				.then(result => {
					let response = JSON.parse(result)
					if(response.status === 200){
						this.statusBooking = true
						this.messageBooking = "Booking Successful"
						this.firstName = '' 
						this.lastName = '' 
						this.date = '' 
						this.email = '' 
						this.phone = ''
						this.notes = ''
					}else{
						this.statusBooking = false
						this.messageBooking = "Booking Failed. Try again"
					}
				})
				.catch(error => console.log('error', error));
				}

			}	
		}
    })
</script>
@endsection

