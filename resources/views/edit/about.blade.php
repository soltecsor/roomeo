@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Institutional</h3>
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
                          <h3 class="card-title">Edit Institutional About</h3>
                          <h6 class="card-subtitle">Change information contained in the portal about</h6>
                        </div>
                        <form  enctype="multipart/form-data"  action="{{ url('edit_institution') }}"  method="post"  class="formentrada"  >
                            <div class="row form-material">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                <input type="hidden" name="id_institutional" value="{{ $institutional->id }}"> 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="inst_title">Title Institutional*</label>
                                        <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="inst_title" name="inst_title"  value="{{ $institutional->inst_title }}"  required   >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="inst_subtitle">SubTitle Institutional*</label>
                                        <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="inst_subtitle" name="inst_subtitle"  value="{{ $institutional->inst_subtitle }}"  required   >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="inst_description">Institutional Description*</label>
                                        <div class="col-lg-12" >
                                            <textarea class="form-control" id="ckeditor" name="inst_description" rows="8">{{ $institutional->inst_description}}</textarea>                                                                          
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="inst_title_img">Image Institutional*</label>
                                        <div class="col-lg-12" >
                                            <input type="file" class="form-control" name="inst_title_img" id="inst_title_img" aria-describedby="fileHelp">
                                        </div>
                                    </div>
                                </div> 
                                 <div class="col-lg-6">
                                   <img style="display: block;margin-left: auto;margin-right: auto;" src="http://roomeouk.com/roomeo/public/portal/assets/images/about/{{ $institutional->inst_title_img }}" width="50%" />
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

        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-md-12">
                @include('flash::message')
                <div class="card">
                    <div class="card-body">
                        <div>
                          <h3 class="card-title">Edit Institutional Team</h3>
                          <h6 class="card-subtitle">Change information contained in the portal Teams</h6>
                        </div>
                        <form  enctype="multipart/form-data"  action="{{ url('edit_team') }}"  method="post"  class="formentrada"  >
                            <div class="row form-material">
                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                <input type="hidden" name="id_team" value="{{ $team->id }}"> 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_title">Title Section*</label>
                                        <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="team_title" name="team_title"  value="{{ $team->team_title }}"  required  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_subtitle">SubTitle Section*</label>
                                        <div class="col-lg-12" >
                                        <input type="text" class="form-control" id="team_subtitle" name="team_subtitle"  value="{{ $team->team_subtitle }}"  required  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_member_one_name">Member one Name*</label>
                                        <div class="col-lg-12" >
                                            <input class="form-control" id="team_member_one_name" name="team_member_one_name" value="{{ $team->team_member_one_name}}" required  />                                                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_member_one_function">Member one Function*</label>
                                        <div class="col-lg-12" >
                                            <input class="form-control" id="team_member_one_function" name="team_member_one_function" value="{{ $team->team_member_one_function}}" required  />                                                                         
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_member_one_description">Member One Description*</label>
                                        <div class="col-lg-12" >
                                            <textarea class="form-control" id="team_member_one_description" name="team_member_one_description" rows="6">{{ $team->team_member_one_description}}</textarea>                                                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_member_one_img">Member one image*</label>
                                        <div class="col-lg-12" >
                                            <input type="file" class="form-control" name="team_member_one_img" id="team_member_one_img" aria-describedby="fileHelp">
                                        </div>
                                    </div>
                                </div> 
                                 <div class="col-lg-6">
                                   <img style="display: block;margin-left: auto;margin-right: auto;" src="http://roomeouk.com/roomeo/public/portal/assets/images/team/{{ $team->team_member_one_img }}" width="40%" />
                                </div>
                                 <div class="col-lg-6 m-t-40">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_member_two_name">Member two Name*</label>
                                        <div class="col-lg-12" >
                                            <input class="form-control" id="team_member_two_name" name="team_member_two_name" value="{{ $team->team_member_two_name}}" required  />                                                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 m-t-40">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_member_two_function">Member two Function*</label>
                                        <div class="col-lg-12" >
                                            <input class="form-control" id="team_member_two_function" name="team_member_two_function" value="{{ $team->team_member_two_function}}" required  />                                                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_member_two_description">Member Two Description*</label>
                                        <div class="col-lg-12" >
                                            <textarea class="form-control" id="team_member_two_description" name="team_member_two_description" rows="6">{{ $team->team_member_two_description}}</textarea>                                                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-lg-12 text-dark" for="team_member_two_img">Member one image*</label>
                                        <div class="col-lg-12" >
                                            <input type="file" class="form-control" name="team_member_two_img" id="team_member_two_img" aria-describedby="fileHelp">
                                        </div>
                                    </div>
                                </div> 
                                 <div class="col-lg-6">
                                   <img style="display: block;margin-left: auto;margin-right: auto;" src="http://roomeouk.com/roomeo/public/portal/assets/images/team/{{ $team->team_member_two_img }}" width="40%" />
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