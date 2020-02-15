@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Prices</h3>
            </div>
            <div class="col-md-7 col-8 align-self-center">
                <span style="float:right;">
					<button class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#newProcess"><i class="fa fa-plus"></i> Add new Price</button>
				</span>
            </div>
        </div>

        <div class="row">
            <!-- Column -->
            <div class="col-lg-12 col-md-12">
                @include('flash::message')
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($processes as $process)
                                    <tr>
                                        <td>{{ $process->process_title }}</td>
                                        <td>{{ $process->process_description }}</td>
                                        <td>
                                          <button data-toggle="modal" data-target="#bs-example-{{ $process->id }}" class="btn btn-warning waves-effect"><i class="fa fa-pencil"></i></button>
												<form action="{!! url('/delete_process/{{ $process->id }}') !!}" method="POST" style="display: inline;" onsubmit="if(confirm('Deletar? A confirmação apagará PERMANENTEMENTE!')) { return true } else {return false };">
													<input type="hidden" name="_method" value="DELETE">
													<input type="hidden" name="id_usuario" value="{{ $process->id }}">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<button type="submit" class="btn btn-danger waves-effect"><i class="fa fa-close"></i></button>
												</form>
                                        </td>
                                    </tr>

                                    {{-- Modal Edit--}}
                                        <div class="modal fade bs-example-modal-lg" id="bs-example-{{ $process->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Edit Process nº {{ $process->id }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form   action="{{ url('edit_process') }}" method="post" id="edit_process"  class="formentrada"  >
                                                            <div class="row form-material">
                                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                                                <input type="hidden" name="id_process" value="{{ $process->id }}"> 
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="process_title">Title*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="process_title" name="process_title"  value="{{ $process->process_title }}" >
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="process_description">Description*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="process_description" name="process_description"  value="{{ $process->process_description }}" >
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="row form-group">
                                                                        <label class="col-lg-12 text-dark" for="home_title_two">Icon Process*</label>
                                                                        <div class="col-lg-2"> 
                                                                            <img src="http://www.roomeo.uk.co/roomeo/public/portal/assets/images/ico/{{ $process->process_img }}" width="75px" >
                                                                        </div>
                                                                        <div class="col-lg-8 m-t-30" >
                                                                            <input type="file" class="form-control" name="process_img" id="icon_one" aria-describedby="fileHelp">
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                 
                                                                <div class="col-lg-12">
                                                                    <button type="submit" class="btn btn-primary waves-effect text-left"> Update Data</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal Edit--}}
            <div class="modal fade bs-example-modal-lg" id="newProcess" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Created new Process</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form   action="{{ url('created_process') }}" method="post" id="created_process"  class="formentrada"  >
                                <div class="row form-material">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="process_title">Title*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="process_title" name="process_title"   >
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="process_description">Description*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="process_description" name="process_description"   >
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row form-group">
                                            <label class="col-lg-12 text-dark" for="home_title_two">Icon Process*</label>
                                            <div class="col-lg-8 m-t-30" >
                                                <input type="file" class="form-control" name="process_img" id="icon_one" aria-describedby="fileHelp">
                                            </div>
                                        </div>
                                    </div>                                      
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-primary waves-effect text-left"> Update Data</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
    </div>
@endsection