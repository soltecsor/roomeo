@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Reasons</h3>
            </div>
            <div class="col-md-7 col-8 align-self-center">
                <span style="float:right;">
					<button class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#newReasons"><i class="fa fa-plus"></i> Add new feedback</button>
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
                                        <th style="width:50%">Description</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reasons as $reason)
                                    <tr>
                                        <td>{{ $reason->reasons_title }}</td>
                                        <td>{{ $reason->reasons_description }}</td>
                                        <td>
                                          <button data-toggle="modal" data-target="#bs-example-{{ $reason->id }}" class="btn btn-warning waves-effect"><i class="fa fa-pencil"></i></button>
												<form action="{!! url('delete_reason') !!}" method="POST" style="display: inline;" onsubmit="if(confirm('Deletar? A confirmação apagará PERMANENTEMENTE!')) { return true } else {return false };">
													<!-- <input type="hidden" name="_method" value="DELETE"> -->
													<input type="hidden" name="id_reason" value="{{ $reason->id }}">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<button type="submit" class="btn btn-danger waves-effect"><i class="fa fa-close"></i></button>
												</form>
                                        </td>
                                    </tr>

                                    {{-- Modal Edit--}}
                                        <div class="modal fade bs-example-modal-lg" id="bs-example-{{ $reason->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Edit Reason nº {{ $reason->id }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form   action="{{ url('edit_reason') }}" method="post" id="edit_reason"  class="formentrada"  >
                                                            <div class="row form-material">
                                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                                                <input type="hidden" name="id_reason" value="{{ $reason->id }}"> 
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="reasons_title">Title*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="reasons_title" name="reasons_title"  value="{{ $reason->reasons_title }}"  required   >
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="reasons_description">Description*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="reasons_description" name="reasons_description"  value="{{ $reason->reasons_description }}"  required   >
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
            <div class="modal fade bs-example-modal-lg" id="newReasons" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Created new Reason</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form   action="{{ url('created_reason') }}" method="post" id="created_reason"  class="formentrada"  >
                                <div class="row form-material">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="reasons_title">Title*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="reasons_title" name="reasons_title"  required   >
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="reasons_description">Description*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="reasons_description" name="reasons_description"  required   >
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