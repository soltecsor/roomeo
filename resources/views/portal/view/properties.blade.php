<section class="property-section sec-ptb-0 clearfix" id="arthur">
	<div class="container">
	<div class="section-title mb-30 text-center">
			<span class="small-title"></span>
			<h2 class="big-title mb-0">Recently Added Rooms</h2>
			<small v-if="units.data == null || units.data.length == 0" style="font-size:22px;line-height:50px;text-transform:uppercase;color:#05b59d;">Rooms not found in your search</small>
		</div>        
		<div class="row property-destaques">
			<div class="col-lg-4 col-md-6 col-sm-12" v-for="(unit,index) of units.data" :key="index">
				<div class="property-grid-item">
					<div class="property-image image-container">
						<div class="post-admin" v-show="unit.unit_status == 'Available To Let'">
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
							<div id="details-image-carousel" class="owl-carousel owl-theme owl-property owl-loaded owl-drag">
								<div class="owl-stage-outer" v-if="unit.image_urls.length > 0">	
								<div class="owl-stage" style="transform: translate3d(-739px, 0px, 0px); transition: all 0.25s ease 0s; width: 2590px;">
										<div :class="i === 0 ? 'owl-item active' : 'owl-item'" style="width: 370px;" v-for="(image,i) of unit.image_urls" :key="i">
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
						<div class="action-btns-group ul-li-right clearfix">
							<ul class="clearfix">
								<li><a href="#" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
							</ul>
						</div>
					</div> 

					 <div class="property-content" onclick="window.location.href='room-details';">
						<span class="disponivel" v-if="unit.available_from != null">Available from <strong>([getDate(unit.available_from)])</strong></span>			
						<h2 class="item-title">
							<a href="{{url('room-details')}}" @click="roomDetail(unit.id)" class="title-link">([unit.short_description])</a>
						</h2>						
						<div class="price-and-location ul-li clearfix">
							<div class="post-meta ul-li clearfix">
								<ul class="clearfix">
									<li v-show="unit.bedrooms != 'N/A'"><a href="#!"><i class="far fa-bed"></i>([unit.bedrooms])</a></li>
									<li v-show="unit.bathrooms != 'N/A'"><a href="#!"><i class="fas fa-bath"></i>([unit.bathrooms])</a></li>
									<li v-show="unit.furnished != ''"><a href="#!"><i class="fas fa-chair"></i>([unit.furnished])</a></li>
									<li v-show="unit.floors != ''"><a href="#!"><i class="fas fa-building"></i>([unit.floors])</a></li>
									<li v-show="unit.receptions != 'N/A'"><a href="#!"><i class="fas fa-user-shield"></i>([unit.receptions])</a></li>
									<li v-show="unit.max_occupancy != 'N/A'"><a href="#!"><i class="fas fa-male"></i>([unit.max_occupancy])</a></li>
									<li v-show="unit.area != ''"><a href="#!"><i class="fas fa-map-marked"></i>([unit.area])</a></li>
									<li v-show="unit.size != ''"><a href="#!"><i class="fas fa-bath"></i>([unit.size])</a></li>
								</ul>
							</div>
							<ul class="clearfix">
								<li class="text-left"><strong class="price-text">£ ([unit.market_rent]).00 </strong><small>/([unit.market_frenquency == null ? 'month' : unit.market_frenquency])</small></li>
								<li class="text-right"><i class="fal fa-map-marker-alt"></i> ([unit.city]), ([unit.country == 'United Kingdom' ? 'UK' : ''])</li>
							</ul>
						</div>
					</div> 

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
				// access_token:"c4f245ae77947eb7364d9112b1e612d4d2fa2d33c66980867f57a4c616ed3347",
				// refresh_token:"bfee562b151b4ba8fe2c4f0c4babab7c9008bc7f79932091437bae55ee064087",
				url:'https://api.arthuronline.co.uk/v2/',
				urlRefresh:' https://auth.arthuronline.co.uk/',
				grant_type:'refresh_token',
				client_id:'c163687de105827e9c35765fadd4b5fc6c356ae6c60f4d1fd608bf10d7c0307e',
				client_secret:'db031ae061087a44424da28ed015c714c3c8824147984f6896730c3a5ac77b32',
				entity:'82013',
				locationFilter:localStorage.location
			}
        },
		created(){
			//localStorage.clear()
			//localStorage.access_token ='10a44a0886e3eea8f63ab24ec5f9748649e24a3f444a38a1c5911eb56359c3a6'
			//localStorage.refresh_token ='51340ab8193bc9509f6f974dfeee3bab77be7e47e44079f77de5b34832230dc7'
		},
        mounted () {	
		   this.getUnits()
		   this.refreshToken()
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
				fetch(this.url+'units', requestOptions)
				.then(response => response.text())
				.then(result => {
					let area = localStorage.location 
					let budgetMin = localStorage.rangeMin
					let budgetMax = localStorage.rangeMax
					//let dateTo = localStorage.dateTo
					let dateFrom = localStorage.dateFrom
					this.units = JSON.parse(result)
					if(area !== undefined){
						area = area.replace(/^./,area[0].toUpperCase());
						this.units.data = this.units.data.filter(f => f.area == area)
					}

					if(budgetMax !== undefined  && budgetMin === undefined){
						budgetMin = 0
						this.units.data = this.units.data.filter(f => f.market_rent >= budgetMin && f.market_rent <= budgetMax)

					}else if(budgetMax !== undefined  && budgetMin !== undefined){
						this.units.data = this.units.data.filter(f => f.market_rent >= budgetMin && f.market_rent <= budgetMax)
					}

					if(dateFrom !== undefined){
						let checkin = new Date(dateFrom)
						this.units.data = this.units.data.filter(f => new Date(f.available_from) >= checkin)
					}

					//localStorage.clear()
				})
				.catch(error => console.log('error', error));
			},
			refreshToken(){
				
				let myHeaders = new Headers();
				myHeaders.append("Content-Type", "application/x-www-form-urlencoded");
				myHeaders.append("Authorization", "Bearer "+localStorage.access_token);

				let urlencoded = new URLSearchParams();
				urlencoded.append("grant_type", this.grant_type);
				urlencoded.append("client_id", this.client_id);
				urlencoded.append("client_secret", this.client_secret);
				urlencoded.append("refresh_token", localStorage.refresh_token);

				let requestOptions = {
				method: 'POST',
				headers: myHeaders,
				body: urlencoded,
				redirect: 'follow'
				};

				fetch(this.urlRefresh+"oauth/token", requestOptions)
				.then(response => response.text())
				.then(result => { 
					data = JSON.parse(result)
					localStorage.access_token = data.access_token;
					localStorage.refresh_token = data.refresh_token
					console.log('@@@@',data)
					}
				)
				.catch(error => console.log('error', error));
			},
			getDate(unit){
				let date = new Date(unit)
				let monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September","October", "November", "December"]
				let day = date.getDate()
				let monthIndex = date.getMonth()

				return day + ' ' + monthNames[monthIndex];
			},

			roomDetail(unitId){
				localStorage.unitId = unitId
			}
		}
	})
	
</script>
