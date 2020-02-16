@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Feedbacks</h3>
            </div>
            <div class="col-md-7 col-8 align-self-center">
                <span style="float:right;">
					<button class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#newFeedback"><i class="fa fa-plus"></i> Add new feedback</button>
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
                                        <th>Stars</th>
                                        <th>Title</th>
                                        <th>Name</th>
                                        <th>Function</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($feedbacks as $feedback)
                                    <tr>
                                        @if( $feedback->feedbacks_stars == 1)
                                            <td><i class="fa fa-star"></i></td>
                                        @elseif( $feedback->feedbacks_stars == 2)
                                        <td><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i></td>
                                        @elseif( $feedback->feedbacks_stars == 3)
                                        <td><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i></td>
                                        @elseif( $feedback->feedbacks_stars == 4)
                                        <td><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i></td>
                                        @elseif( $feedback->feedbacks_stars == 5)
                                            <td><i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i></td>
                                        @endif
                                        <td>{{ $feedback->feedbacks_comment_title }}</td>
                                        <td>{{ $feedback->feedbacks_client_name }}</td>
                                        <td>{{ $feedback->feedbacks_client_function }}</td>
                                        <td>
                                          <button data-toggle="modal" data-target="#bs-example-{{ $feedback->id }}" class="btn btn-warning waves-effect"><i class="fa fa-pencil"></i></button>
												<form action="{!! url('/delete_feedback') !!}" method="post" style="display: inline;" onsubmit="if(confirm('Deletar? A confirmação apagará PERMANENTEMENTE!')) { return true } else {return false };">
													<input type="hidden" name="_method" value="post">
													<input type="hidden" name="id_feedback" value="{{ $feedback->id }}">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<button type="submit" class="btn btn-danger waves-effect"><i class="fa fa-close"></i></button>
												</form>
                                        </td>
                                    </tr>

                                    {{-- Modal Edit--}}
                                        <div class="modal fade bs-example-modal-lg" id="bs-example-{{ $feedback->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Edit Feedback nº {{ $feedback->id }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form   action="{{ url('edit_feedback') }}" method="post" id="edit_feedback"  class="formentrada"  >
                                                            <div class="row form-material">
                                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                                                <input type="hidden" name="id_feedback" value="{{ $feedback->id }}"> 
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="feedbacks_comment_title">Title*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="feedbacks_comment_title" name="feedbacks_comment_title"  value="{{ $feedback->feedbacks_comment_title }}"  required   >
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="feedbacks_stars">Stars*</label>
                                                                        <div class="col-sm-12" >
                                                                            <select class="form-control" name="feedbacks_stars" required>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5">5</option>
                                                                            </select>                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="feedbacks_comment_description">Description*</label>
                                                                        <div class="col-sm-12" >
                                                                        <textarea class="form-control" id="feedbacks_comment_description" name="feedbacks_comment_description" rows="5">{{ $feedback->feedbacks_comment_description }}</textarea>                                                                          
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="feedbacks_client_name">Client Name*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="feedbacks_client_name" name="feedbacks_client_name"  value="{{ $feedback->feedbacks_client_name }}"  required   >
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="feedbacks_client_function">Client Function*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="feedbacks_client_function" name="feedbacks_client_function"  value="{{ $feedback->feedbacks_client_function }}"  required   >
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
            <div class="modal fade bs-example-modal-lg" id="newFeedback" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Created new Feedback</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form   action="{{ url('created_feedback') }}" method="post" id="created_feedback"  class="formentrada"  >
                                <div class="row form-material">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="feedbacks_comment_title">Title*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="feedbacks_comment_title" name="feedbacks_comment_title"  required   >
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="feedbacks_stars">Stars*</label>
                                            <div class="col-sm-12" >
                                                <select class="form-control" name="feedbacks_stars" required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>                                                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="feedbacks_comment_description">Description*</label>
                                            <div class="col-sm-12" >
                                            <textarea class="form-control" id="feedbacks_comment_description" name="feedbacks_comment_description" rows="5"></textarea>                                                                          
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="feedbacks_client_name">Client Name*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="feedbacks_client_name" name="feedbacks_client_name"  required   >
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="feedbacks_client_function">Client Function*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="feedbacks_client_function" name="feedbacks_client_function"    required   >
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