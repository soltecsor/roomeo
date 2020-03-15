@extends('portal.layouts.app')

@section('content')
		@foreach ($contacts as $contact)
		<section id="contact-section" class="contact-section sec-ptb-120 pb-0 clearfix">

			<div class="contact-form clearfix">
				<div class="container">
					<div class="section-title text-center mb-70">
					<h2 class="big-title">{{ $contact->title }}</h2>
					<p>{!! $contact->subtitle !!}</p>
					</div>

					<form method="POST" action="{{ url('/send') }}" id="formSend">
					<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<div class="row">

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input name="nameMail" type="text" placeholder="Name" id ="name">
									<label for="name-input" class="form-item-btn"><i class="far fa-user"></i></label>
								</div>
							</div>							

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input name="surnameMail" type="text" placeholder="Surname" id="surname">
									<label for="surname-input" class="form-item-btn"><i class="far fa-user"></i></label>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input name="emailMail" type="email" placeholder="Enter Your Email Address" id = "email">
									<label for="email-input" class="form-item-btn"><i class="far fa-envelope"></i></label>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<input name="phoneMail" type="text" placeholder="Enter Your Phone Number" id = "phone">
									<label for="phone-input" class="form-item-btn"><i class="far fa-phone"></i></label>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
									<select class="form-control" id="iam" name="iamMail">
		                                <option selected="selected" value="0">I am...</option>
		                                <option value="A landlord looking to let my property">A landlord looking to let my property</option>
		                                <option value="A tenant looking to rent a room">A tenant looking to rent a room</option>
		                                <option value="A relocation agent">A relocation agent</option>
		                                <option value="Other">Other</option>
	                                </select>
		                         	<label for="subject-input" class="form-item-btn"><i class="far fa-paper-plane"></i></label>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="form-item">
		                          <select class="form-control" id="howdid" name="howdidMail">
		                           <option selected="selected" value="0">How did you hear about us?</option>
		                           <option value="Google search">Google search</option>
		                           <option value="Facebook">Facebook</option>
		                           <option value="Instagram">Instagram</option>
		                           <option value="Flyer">Flyer</option>
		                           <option value="Letter">Letter</option>
		                           <option value="Word of mouth">Word of mouth</option>
		                           <option value="Estate agent">Estate agent</option>
		                           <option value="Current landlord">Current landlord</option>
		                           <option value="Current tenant">Current tenant</option>
		                           <option value="Spareroom.com">Spareroom.com</option>
		                           <option value="In the press">In the press</option>
		                           <option value="Other">Other</option>
		                         </select>
		                         <label for="subject-input" class="form-item-btn"><i class="far fa-paper-plane"></i></label>
		                       </div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="form-textarea">
									<textarea id="message-textarea" placeholder="Please type your message here" name="messageMail"></textarea>
									<label for="subject-input" class="form-item-btn"><i class="far fa-comments"></i></label>
									@if(session('emailsent'))
									<div id="sentSuccessful" style="background:#05b59d;margin:15px;height:25px;font-size:14px;border-radius:6px;">
										<span style="margin:37%;color:#FFF">{{ session('emailsent') }}</span>
									</div>
									@endif
									<span class="badge badge-danger" id="blankField" style="display:none;margin:15px;height:25px;font-size:14px;border-radius:6px;">There are required fields yet</span>

								</div>								
								<div class="submit-btn-area text-center">
									<button type="submit" class="custom-btn" id="sendEmail">{{ $contact->button_label }}</button>
								</div>
							</div> 
						</div>
					</form>

				</div>
			</div>			

		</section>

		<section id="contact-map" class="contact-section bg-limited mt-70 clearfix">
			<div class="container sec-ptb-120">
				
				<div class="section-title text-center mb-70">
					<div class="brand-logo">
						<a href="index.php" class="brand-link text-center">
							<img src="{{ asset('public/portal/assets/images').'/logo.png'}}" alt="Welcome to Roomeo Home Sharing!" width="250">
						</a>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="info-item text-center">
							<div class="item-icon bg-default-red"><i class="fas fa-phone"></i></div>
							<div class="info-list ul-li-block clearfix">
								<ul class="clearfix">
									<li class="item-title"><a href="tel:+4402071128062">{{ $contact->phone }}</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="info-item text-center">
							<div class="item-icon bg-default-red"><i class="fas fa-envelope"></i></div>
							<div class="info-list ul-li-block clearfix">
								<ul class="clearfix">
									<li class="item-title"><a href="mailto:enquiries@roomeo.co.uk">{{ $contact->email }}</a></li>
									<li><a href="mailto:"></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="info-item text-center">
							<div class="item-icon bg-default-red"><i class="fas fa-map-marker-alt"></i></div>
							<div class="info-list ul-li-block clearfix">
								<ul class="clearfix">
									<li class="item-title" style="line-height: 25px !important;">{!! $contact->address !!}</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		@endforeach
		@include('portal.view.partners')
@endsection