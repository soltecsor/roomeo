@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Contact</h3>
            </div>
            {{-- <div class="col-md-7 col-8 align-self-center">
                <span style="float:right;">
					<button class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#newFeedback"><i class="fa fa-plus"></i> Add new feedback</button>
				</span>
            </div> --}}
        </div>

        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-md-12">
                @include('flash::message')
                <div class="card">
                    <div class="card-body">
                        <div>
                          <h3 class="card-title">Edit Contacts</h3>
                          <h6 class="card-subtitle">Change information contained in the contacts portal</h6>
                        </div>
                        <form action="{{ url('edit_contacts') }}" method="post"  class="formentrada"  >
                            <div class="row form-material">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                <input type="hidden" name="id_contact" value="{{ $contact->id }}"> 
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="title">Title Contact*</label>
                                        <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="title" name="title"  value="{{ $contact->title }}"  required   >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="subtitle">Contact Description*</label>
                                        <div class="col-lg-12" >
                                            <textarea class="form-control" rows="10"  id="ckeditor" name="subtitle">{{ $contact->subtitle }}</textarea>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="button_label">Button Text*</label>
                                        <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="button_label" name="button_label"  value="{{ $contact->button_label }}"  required   >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="phone">Phone*</label>
                                        <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="phone" name="phone"  value="{{ $contact->phone }}"  required   >
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="email">Email*</label>
                                        <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="email" name="email"  value="{{ $contact->email }}"  required   >
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="address">Contact Address*</label>
                                        <div class="col-lg-12" >
                                            <textarea class="form-control" rows="10"  id="ckeditor2" name="address">{{ $contact->address }}</textarea>
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-12 m-t-30">
                                    <button type="submit" class="btn btn-primary waves-effect text-left"> Update Data</button>
                                </div> 
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection