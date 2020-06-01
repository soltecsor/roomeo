<section id="arthur" class="property-section sec-ptb-35 bg-light-gray clearfix">
			<div class="container-fluid property-1">
				<div class="row justify-content-lg-start justify-content-md-center">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="filter-bar">
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<h3 class="result-text">([units.length]) rooms found (Choice the mode view)  </h3>
								</div>
								<div class="col-lg-6 col-md-6 hidden-sm">
									<div class="layout-btns-group ul-li-right clearfix">
										<ul class="nav" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-toggle="tab" href="#layout-list" id="btlayoutlist"><i class="far fa-bars"></i></a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#layout-grid" id="btlayoutgrid"><i class="fas fa-th"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid" v-if="units.length > 0">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="tab-content grid-property property" id="property">
							<div id="layout-grid" class="tab-pane fade">
								<div class="row">
									<div class="col-lg-4 col-md-6 col-sm-12" v-for="(unit,index) of units" :key="index">
										<div class="property-grid-item">
											<div class="property-image image-container">
												<div class="post-admin" v-if="unit.tags.lenght !== 0 ? unit.tags.filter(a => a == 'Available Now').length > 0 : ''">
													<a class="admin-link" href="#!" >
														Available Now
													</a>
												</div>
												<div class="item-label ul-li-right clearfix">
													<ul class="clearfix">
														<li class="bg-default-checked" v-if="unit.tags.length !== 0 ? unit.tags.filter(c => c == 'checked').length > 0 : ''"><a href="#!">checked</a></li>
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
												<div class="action-btns-group ul-li-right clearfix mt-30">
													<ul class="clearfix">
														<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
														<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
													</ul>
												</div>
											</div>

											<div class="property-content" onclick="window.location.href='room-details.php';">
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
											</div>
										</div>
									</div>
								</div>
								</div>
							</div>
							</div>
							</div></div></div></div>
							<div class="col-lg-12 col-md-12 col-sm-12">
						    <div class="tab-content grid-property property" id="property">
							<div id="layout-list" class="tab-pane active limita-propriedades">
								<div class="row" id="property-section">
									<div class="col-lg-7 col-md-7 col-sm-12">
										<div class="row cria-scroll">
											<div class="col-lg-6 col-sm-12" v-for="(unit,index) of units" :key="index">
												<div class="property-list-item clearfix">
													<div class="property-image image-container">
														<div class="post-admin"  v-if="unit.tags.lenght !== 0 ? unit.tags.filter(a => a == 'Available Now').length > 0 : ''">
															<a class="admin-link" href="#!">
																Available Now
															</a>
														</div>
														<div class="item-label ul-li-right clearfix">
															<ul class="clearfix">
																<li class="bg-default-checked"  v-if="unit.tags.length !== 0 ? unit.tags.filter(c => c == 'checked').length > 0 : ''"><a href="#!">checked</a></li>
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
														<div class="action-btns-group ul-li-right clearfix">
															<ul class="clearfix">
																<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
																<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
															</ul>
														</div>
													</div>

													<div class="property-content" onclick="window.location.href='room-details.php';">
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
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-12">
						<div>
							<iframe :src="properties" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
						</div>									
					</div>
				</div>
			</div>
			</div></div>
		</section>

		<script type="application/javascript">

    let app = new Vue({
        delimiters: ['([', '])'],
        el: '#arthur',
        data () {
            return {
				unitsTitle:'Recently Added Rooms',
				units:{data:null},
				image_urls:null,
				error:null,
				url:'https://api.arthuronline.co.uk/v2/',
				urlRefresh:' https://auth.arthuronline.co.uk/',
				grant_type:'refresh_token',
				client_id:'c163687de105827e9c35765fadd4b5fc6c356ae6c60f4d1fd608bf10d7c0307e',
				client_secret:'db031ae061087a44424da28ed015c714c3c8824147984f6896730c3a5ac77b32',
				entity:'82013',
				locationFilter:localStorage.location,
				markers:null,
				properties:null
			}
        },
		created(){
			
			this.getUnits()

		},
        mounted () {	
		   this.refreshToken()
		   setTimeout(() => {
			this.getProperty()

		   }, 1000);


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
					this.units = this.units.data
					if(area !== undefined){
						area = area.replace(/^./,area[0].toUpperCase());
						this.units = this.units.filter(f => f.area == area)
					}

					if(budgetMax !== undefined  && budgetMin === undefined){
						budgetMin = 0
						this.units = this.units.filter(f => f.market_rent >= budgetMin && f.market_rent <= budgetMax)
						
					}else if(budgetMax !== undefined  && budgetMin !== undefined){
						this.units = this.units.filter(f => f.market_rent >= budgetMin && f.market_rent <= budgetMax)
					}

					if(dateFrom !== undefined){
						let checkin = new Date(dateFrom)
						this.units = this.units.filter(f =>  moment(checkin).diff(f.available_from, 'days') <= 0)
					}
					
					//localStorage.removeItem('location')
					//localStorage.removeItem('rangeMin')
					//localStorage.removeItem('rangeMax')
					//localStorage.removeItem('dateFrom')
					localStorage.removeItem('href')

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
					if(localStorage.location == undefined){
					let properties = JSON.parse(result)
					let arrayProperties = []
					let markers = []
					properties = properties.data
					let unitsFiltered = []
					for(let i=0;i<properties.length;i++){
							markers[i] = {ref:properties[i].ref,ltd:properties[i].latitude,lng:properties[i].longitude}
					}
				    this.properties = 'http://roomeo.co.uk/newroomeo/map.php?markers='+JSON.stringify(markers)
					}else{
						let properties = JSON.parse(result)
						let markers = []
						let id = []
						let pin = []
						for(let i=0;i<properties.length;i++){
							    this.units.filter(f = f.property_id == properties[i].id)
						}
						for(let i=0;i<this.units.length;i++){
							    id[i] = this.units[i].property_id 
						}
						for(let i=0;i<id.length;i++){
							markers[i] = properties.data.filter(f => f.id == id[i])
							pin[i] = {ref:markers[i][0].ref,ltd:markers[i][0].latitude,lng:markers[i][0].longitude}
						
						}
						localStorage.removeItem('location')
						this.properties = 'http://roomeo.co.uk/newroomeo/map.php?markers='+JSON.stringify(pin)
					}
					if(localStorage.rangeMin != undefined && localStorage.rangeMin != undefined ){
						let properties = JSON.parse(result)
						let markers = []
						let id = []
						let pin = []
						for(let i=0;i<properties.length;i++){
							this.units = this.units.filter(f => f.market_rent >= budgetMin && f.market_rent <= budgetMax)
						}
						for(let i=0;i<this.units.length;i++){
							    id[i] = this.units[i].property_id 
						}
						for(let i=0;i<id.length;i++){
							markers[i] = properties.data.filter(f => f.id == id[i])
							pin[i] = {ref:markers[i][0].ref,ltd:markers[i][0].latitude,lng:markers[i][0].longitude}
						
						}
						localStorage.removeItem('rangeMin')
						localStorage.removeItem('rangeMax')
						this.properties = 'http://roomeo.co.uk/newroomeo/map.php?markers='+JSON.stringify(pin)
					}
					if(localStorage.dateFrom != undefined ){
						let properties = JSON.parse(result)
						let markers = []
						let id = []
						let pin = []
						for(let i=0;i<properties.length;i++){
							this.units = this.units.filter(f =>  moment(checkin).diff(f.available_from, 'days') <= 0)
						}
						for(let i=0;i<this.units.length;i++){
							    id[i] = this.units[i].property_id 
						}
						for(let i=0;i<id.length;i++){
							markers[i] = properties.data.filter(f => f.id == id[i])
							pin[i] = {ref:markers[i][0].ref,ltd:markers[i][0].latitude,lng:markers[i][0].longitude}
						
						}
						localStorage.removeItem('dateFrom')
						this.properties = 'http://roomeo.co.uk/newroomeo/map.php?markers='+JSON.stringify(pin)
					}
				})
				.catch(error => console.log('error', error));
			}	
		},destroyed(){
			localStorage.removeItem('location')
			localStorage.removeItem('unitResults')
			localStorage.removeItem('rangeMin')
			localStorage.removeItem('rangeMax')
			localStorage.removeItem('dateFrom')
		}
	})
	
</script>
