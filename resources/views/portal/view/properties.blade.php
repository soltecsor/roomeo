<section class="property-section sec-ptb-0 clearfix" id="arthur">
	<div class="container">
    <div><p>((info))</p></div>

		<div class="section-title mb-30 text-center">
			<span class="small-title"></span>
			<!-- <h2 class="big-title mb-0">Recently Added Rooms</h2> -->
		</div>        
		<div class="row property-destaques">

			<div class="col-lg-4 col-md-6 col-sm-12">
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
							<div id="details-image-carousel" class="owl-carousel owl-theme owl-property owl-loaded owl-drag">
								
								
								
							<div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-740px, 0px, 0px); transition: all 0s ease 0s; width: 2590px;"><div class="owl-item cloned" style="width: 370px;"><div class="item">
									<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="{{ asset('public/portal/uploads/slider/slide01.jpg')}}" alt="roomeo home sharing" class="img-fluid"></a>
								</div></div><div class="owl-item cloned" style="width: 370px;"><div class="item">
									<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="{{ asset('public/portal/uploads/slider/slide01.jpg')}}" alt="roomeo home sharing" class="img-fluid"></a>
								</div></div><div class="owl-item active" style="width: 370px;"><div class="item">
									<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="{{ asset('public/portal/uploads/slider/slide01.jpg')}}" alt="roomeo home sharing" class="img-fluid"></a>
								</div></div><div class="owl-item" style="width: 370px;"><div class="item">
									<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="{{ asset('public/portal/uploads/slider/slide01.jpg')}}" alt="roomeo home sharing" class="img-fluid"></a>
								</div></div><div class="owl-item" style="width: 370px;"><div class="item">
									<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="{{ asset('public/portal/uploads/slider/slide01.jpg')}}" alt="roomeo home sharing" class="img-fluid"></a>
								</div></div><div class="owl-item cloned" style="width: 370px;"><div class="item">
									<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="{{ asset('public/portal/uploads/slider/slide01.jpg')}}" alt="roomeo home sharing" class="img-fluid"></a>
								</div></div><div class="owl-item cloned" style="width: 370px;"><div class="item">
									<a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><img src="{{ asset('public/portal/uploads/slider/slide01.jpg')}}" alt="roomeo home sharing" class="img-fluid"></a>
								</div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
						</div>
						<div class="action-btns-group ul-li-right clearfix">
							<ul class="clearfix">
								<li><a href="uploads/slider/slide01.jpg" data-toggle="lightbox" data-gallery="property"><i class="far fa-search"></i></a></li>
								<li><a href="wishlist.php"><i class="far fa-heart"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="property-content" onclick="window.location.href='room-details.php';">
						<span class="disponivel">Available from <strong>07 November</strong></span>			
						<h2 class="item-title">
							<a href="room-details.php" class="title-link">Renovated apartment at floor in bathroom.</a>
						</h2>						
						<div class="price-and-location ul-li clearfix">
							<div class="post-meta ul-li clearfix">
								<ul class="clearfix">
									<li><a href="#!"><i class="far fa-bed"></i> 1 BD</a></li>
									<li><a href="#!"><i class="fas fa-bath"></i> 1 BA</a></li>
								</ul>
							</div>
							<ul class="clearfix">
								<li class="text-left"><strong class="price-text">£ 2,200.00 </strong><small>/month</small></li>
								<li class="text-right"><i class="fal fa-map-marker-alt"></i> Los angels, ca</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

	</div>
</section>

<script type="application/javascript">
    var app = new Vue({
        delimiters: ['((', '))'],
        el: '#arthur',
        data () {
            return {
            info: null
            }
        },
        mounted () {
            axios
            .get('https://api.coindesk.com/v1/bpi/currentprice.json')
            .then(response => (this.info = response))
        }
    })
</script>