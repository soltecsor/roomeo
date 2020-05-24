@extends('portal.layouts.app')

@section('content')
		<!--
		================================================== -->
		<section id="plans-section" class="about-section bg-white sec-ptb-120 pt-0 mt-70 clearfix">
			<div class="container">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="section-title text-center">
						<span class="small-title"></span>
						<h4 class="big-title mb-0">What you need?</h4>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						@include('portal.inc.busca') 
					</div>
				</div>
    
			</div>
		</section>
		@include('portal.view.properties-search')
		@include('portal.view.partners')
	<script type="application/javascript">

	$('.min').on('change', function(){
		localStorage.setItem('rangeMin',$(this).val())
	})
	$('.max').on('change', function(){
		localStorage.setItem('rangeMax',$(this).val())
	})
	$('#location-input').on('change', function(){
		localStorage.setItem('location',$(this).val())
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


    })

</script>
		
@endsection