@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor">Edit Prices</h3>
            </div>
            <div class="col-md-7 col-8 align-self-center">
                <span style="float:right;">
					<button class="btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#newPrices"><i class="fa fa-plus"></i> Add new Price</button>
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
                                        <th>Price</th>
                                        <th>Label Button</th>
                                        <th>Description</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($prices as $price)
                                    <tr>
                                        <td>{{ $price->prices_title }}</td>
                                        <td>{{ $price->prices_value }}</td>
                                        <td>{{ $price->prices_description }}</td>
                                        <td>{{ $price->prices_button }}</td>
                                        <td>
                                          <button data-toggle="modal" data-target="#bs-example-{{ $price->id }}" class="btn btn-warning waves-effect"><i class="fa fa-pencil"></i></button>
												<form action="{!! url('/delete_price/{{ $price->id }}') !!}" method="POST" style="display: inline;" onsubmit="if(confirm('Deletar? A confirmação apagará PERMANENTEMENTE!')) { return true } else {return false };">
													<input type="hidden" name="_method" value="DELETE">
													<input type="hidden" name="id_price" value="{{ $price->id }}">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<button type="submit" class="btn btn-danger waves-effect"><i class="fa fa-close"></i></button>
												</form>
                                        </td>
                                    </tr>

                                    {{-- Modal Edit--}}
                                        <div class="modal fade bs-example-modal-lg" id="bs-example-{{ $price->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myLargeModalLabel">Edit Price nº {{ $price->id }}</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form   action="{{ url('edit_price') }}" method="post" id="edit_price"  class="formentrada"  >
                                                            <div class="row form-material">
                                                                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                                                <input type="hidden" name="id_price" value="{{ $price->id }}"> 
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="prices_title">Title*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="prices_title" name="prices_title"  value="{{ $price->prices_title }}" >
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="prices_value">Price*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="prices_value" name="prices_value"  value="{{ $price->prices_value }}" >
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="prices_button">Button Label*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="prices_button" name="prices_button"  value="{{ $price->prices_button }}" >
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-group">
                                                                        <label class="col-sm-12 text-dark" for="prices_description">Description*</label>
                                                                        <div class="col-sm-12" >
                                                                        <input type="text" class="form-control" id="prices_description" name="prices_description"  value="{{ $price->prices_description }}" >
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
            <div class="modal fade bs-example-modal-lg" id="newPrices" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Created new Price</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form   action="{{ url('created_price') }}" method="post" id="created_reason"  class="formentrada"  >
                                <div class="row form-material">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="prices_title">Title*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="prices_title" name="prices_title"   >
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="prices_value">Price*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="prices_value" name="prices_value"   >
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="prices_button">Button Label*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="prices_button" name="prices_button"   >
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="col-sm-12 text-dark" for="prices_description">Description*</label>
                                            <div class="col-sm-12" >
                                            <input type="text" class="form-control" id="prices_description" name="prices_description"   >
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