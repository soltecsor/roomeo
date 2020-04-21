@extends('portal.layouts.app')

@section('content')
<section id="property-details-section" class="property-details-section sec-ptb-120 clearfix">
			<div class="container" id="arthur">
				<div class="row justify-content-lg-start justify-content-md-center">

					<div class="col-lg-12 col-md-12 col-sm-12">
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
											<li><strong class="price-text">£ ([units.market_rent]).00</strong></li>
											<!-- neste caso, manter um ou outro, dependendo da disponibilidade -->
											<li>([units.market_rent_frequency])</li>
											<!-- <li><span class="item-badge bg-default-lightblue">PW</span></li>
											PCM or PW -->
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>

					<div class="col-lg-8 col-md-10 col-sm-12">
						<div class="image-carousel-container mb-30">
							<div id="details-image-carousel" class="details-image-carousel owl-carousel owl-theme owl-loaded owl-drag">
							<div class="owl-stage-outer">
								<div class="owl-stage" style="transition: all 1s ease 0s; width: 5390px; transform: translate3d(0px, 0px, 0px);">
									<div :class="i === 0 ? 'owl-item active center' : 'owl-item cloned'"  v-for="(image,i) in units.image_urls" :key="i">
										<div class="item">
											<a :href="image.replace('download','view')" data-toggle="lightbox" data-gallery="property">
												<img :src="image" alt="roomeo sharing home" class="img-fluid">
											</a>
									</div>
								</div>
							</div>
						</div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div> 
						</div>
						<div class="mb-30">
							<p>([units.description]) </p>
						</div>
						<div class="ul-li-block mb-70 clearfix">
							<h4>General Information</h4>
							<ul class="clearfix mt-4">
								<!-- <li>
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
								</li>	 -->
							</ul>
						</div>
						<div class="more-features ul-li-block mb-70 clearfix">
							<h3 class="area-title">Bills included:</h3>
							<ul class="clearfix">
								<!--<li>
									 <svg class="icon">
									   <use xlink:href="#router"></use>
									</svg>
									Internet
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#telephone"></use>
									</svg>
									Telephone
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#hotel"></use>
									</svg>
									Contents Insurance
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#electronics"></use>
									</svg>
									Electricity
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#satellite"></use>
									</svg>
									Cable/Satellite
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#television-1"></use>
									</svg>
									TV Licence
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#tap"></use>
									</svg>
									Water
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#water-heater"></use>
									</svg>
									Gas
								</li> -->
							</ul>
						</div>
						<div class="more-features ul-li-block mb-70 clearfix">
							<h3 class="area-title">Property Features</h3>
							<ul class="clearfix">
								<li v-for="(feature,i) in units.features" :key="i">
									<svg class="icon">
									   <use :xlink:href="'#'+feature.toLowerCase()"></use>
									</svg>
									([feature])
								</li>
							</ul>
						</div>
						<div class="more-features ul-li-block mb-70 clearfix">
							<h3 class="area-title">Your Bedroom</h3>
							<ul class="clearfix">
								<!-- <li>
									<svg class="icon">
									   <use xlink:href="#car"></use>
									</svg>
									Gated
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car"></use>
									</svg>
									Off Street
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car"></use>
									</svg>
									On Street
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car"></use>
									</svg>
									Rear
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car"></use>
									</svg>
									Permit
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car"></use>
									</svg>
									Private
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#car"></use>
									</svg>
									Residents
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#decorating"></use>
									</svg>
									Decorating
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#nightstand"></use>
									</svg>
									Bedside table
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bench"></use>
									</svg>
									Park in the proximity
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bar"></use>
									</svg>
									Bar
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#bicycle-1"></use>
									</svg>
									Bike Storage
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#water-heater"></use>
									</svg>
									Gas
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window-1"></use>
									</svg>
									Window
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window"></use>
									</svg>
									Window Street View
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#window"></use>
									</svg>
									Window Yard View
								</li>
								<li>
									<svg class="icon">
									   <use xlink:href="#suitcase"></use>
									</svg>
									Suitcase
								</li> -->
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
						<div class="tab-content" id="myTabContent">
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

							<div class="widget widget_categories ul-li-block clearfix">
								<h2 class="widget_title mb-30 text-center">£ ([units.market_rent/4]) per week</h2>
								<hr>
								<ul class="clearfix">
									<li><a href="#!">Monthly Rent <span><strong>£ ([units.market_rent]).00</strong></span></a></li>
									<li><a href="#!">Security Deposit <span><strong>£ ([units.deposit_amount]).00</strong></span></a></li>
									<li><a href="#!"><b>Total </b><span><strong>£ ([units.market_rent+units.deposit_amount]).00</strong></span></a></li>
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
											<input id="bv-input-name" type="text" placeholder="First Name">
											<label for="bv-input-name" class="form-item-btn active"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="bv-input-lastname" type="text" placeholder="Last Name">
											<label for="bv-input-lastname" class="form-item-btn active"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="bv-input-email" type="email" placeholder="E-mail">
											<label for="bv-input-email" class="form-item-btn active"><i class="far fa-envelope"></i></label>
										</div>
										<div class="form-item">
											<input id="bv-input-phone" type="tel" placeholder="Phone">
											<label for="bv-input-phone" class="form-item-btn active"><i class="far fa-phone"></i></label>
										</div>
										<div class="form-item rangedate">
											<input type="text" class="form-control visite" id="visite" placeholder="Date" name="visite">
											<label for="visite" class="form-item-btn active"><i class="far fa-calendar"></i></label>
										</div>
										<div class="form-textarea">
											<textarea id="bv-textarea" placeholder="Tell us a bit about yourself and your requirements"></textarea>
											<label for="bv-textarea" class="form-item-btn active"><i class="far fa-edit"></i></label>
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
											<label for="se-input-name" class="form-item-btn active"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="se-input-lastname" type="text" placeholder="Last Name">
											<label for="se-input-lastname" class="form-item-btn active"><i class="far fa-user"></i></label>
										</div>
										<div class="form-item">
											<input id="se-input-email" type="email" placeholder="E-mail">
											<label for="se-input-email" class="form-item-btn active"><i class="far fa-envelope"></i></label>
										</div>
										<div class="form-item">
											<input id="se-input-phone" type="tel" placeholder="Phone">
											<label for="se-input-phone" class="form-item-btn active"><i class="far fa-phone"></i></label>
										</div>
										<div class="form-textarea">
											<textarea id="se-textarea" placeholder="Tell us a bit about yourself and your requirements"></textarea>
											<label for="se-textarea" class="form-item-btn active"><i class="far fa-edit"></i></label>
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
								</div>

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
				units:{data:null},
				image_urls:null,
				error:null,
				url:'https://api.arthuronline.co.uk/v2/',
				urlRefresh:' https://auth.arthuronline.co.uk/',
				grant_type:'refresh_token',
				client_id:'c163687de105827e9c35765fadd4b5fc6c356ae6c60f4d1fd608bf10d7c0307e',
				client_secret:'db031ae061087a44424da28ed015c714c3c8824147984f6896730c3a5ac77b32',
				entity:'82013'
            }
        },
        mounted () {	
           this.getUnits()
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
					console.log(JSON.parse(result).data)
					this.units = JSON.parse(result).data}
					)
				.catch(error => console.log('error', error));
			}	
		}
    })
</script>
@endsection

