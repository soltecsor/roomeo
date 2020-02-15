@extends('layouts.app')

@section('content')
<div class="container-fluid">
	 <div class="row page-titles">
		<div class="col-md-5 col-8 align-self-center">
			<h3 class="text-themecolor">Profile</h3>
		</div>
	</div>
    @include('flash::message')
	<div class="row"> 
        <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-lg-4">         
                    <center class="m-t-20"> <img src="{{ asset('public/images/uploads').'/'.$avatar}}" class="img-circle" width="150">
                        <h4 class="card-title m-t-10">{{ Auth::user()->name }}</h4>
                    </center>
                </div>
                <div class="col-lg-8">
                    <small class="text-muted">Email address </small>
                        <h6>{{ Auth::user()->email }}</h6> 
                    <small class="text-muted p-t-20 db">Phone</small>
                        <h6>{{ Auth::user()->telefone }}</h6>
                    <div class="form-material p-t-20">
                        <form enctype="multipart/form-data" action="{{ url('edit_profile') }}" method="POST">
                            <label class="text-dark">Change Profile Image</label>     
                            <input type="file" class="form-control" name="avatar" id="exampleInputFile" aria-describedby="fileHelp">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}"/>
                            <input type="submit" value="Upload image" class="pull-right btn btn-primary m-t-15">
                        </form>
                    </div>               
                </div>
                </div>
            </div>
         </div>
               
            </div>
        </div>
</div>
   
@endsection