@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Terms and Conditions</h3>
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
                          <h3 class="card-title">Edit Portal Terms</h3>
                          <h6 class="card-subtitle">Change information contained in the portal terms</h6>
                        </div>
                        <form action="{{ url('edit_term') }}"  method="post"  class="formentrada"  >
                            <div class="row form-material">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                <input type="hidden" name="id_term" value="{{ $term->id }}"> 
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="terms_title">Title Terms*</label>
                                        <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="terms_title" name="terms_title"  value="{{ $term->terms_title }}"  required   >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="terms_description">Terms Description*</label>
                                        <div class="col-lg-12" >
                                            <textarea class="form-control" rows="10"  id="ckeditor" name="terms_description">{{ $term->terms_description }}</textarea>
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