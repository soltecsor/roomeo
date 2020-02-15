@extends ('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 col-8 align-self-center">
			<h3 class="text-themecolor">New role</h3>
		</div>
	</div>

	<div class="row">
		<!-- Column -->
		<div class="col-lg-12 col-md-12">
			@include('flash::message')
			<div class="card">
				<div class="card-body">
					<form   action="{{ url('criar_rol') }}"  method="post" id="f_crear_rol" class="formentrada"  >
						<div class="row form-material">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
							<div class="col-sm-4">
								<div class="form-group">
									<div class="form-group">
										<div class="form-line">
											<input type="text" class="form-control" id="rol_nombre" name="name" placeholder="Role Name*" required >
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<div class="form-group">
										<div class="form-line">
											<input type="text" class="form-control" id="rol_slug" name="slug" placeholder="Sigla*" required >
										</div>
									</div>
								</div>
							</div>

							<div class="col-sm-4">
								<div class="form-group">
									<div class="form-group">
										<div class="form-line">
											<input type="text" class="form-control" id="rol_descripcion" name="descripcion" placeholder="Description*" required >
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<button type="submit" class="btn btn-primary">Create new role</button>
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
			<div class="card">
				<div class="card-body">
				<form   action="{{ url('/excluir_rol') }}"  method="post" id="f_crear_rol" class="formentrada"  >
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
					<div>
						<h3 class="card-title">Role List</h3>
						<h6 class="card-subtitle">
							List to display the registered data roles
						</h6> 
					</div>
					
					<div class="body table-responsive">
						<table  class="table table-hover table-striped" cellspacing="0" width="100%">
							<thead>
							<tr>
								<th>Code</th>
								<th>Name</th>
								<th>Sigla</th>
								<th>Description</th>
								<th>Actions</th>
							</tr>
							</thead>
							<tbody>

							@foreach($roles as $rol)
							<input type="hidden" name="id_role" value="{{$rol->id}}">
								<tr role="row" class="odd">
									<td>{{ $rol->id }}</td>
									<td><span class="label label-default">{{ $rol->name or "Ninguno" }}</span></td>
									<td class="mailbox-messages mailbox-name"><strong>&nbsp;&nbsp;{{ $rol->slug  }}</strong></td>
									<td>{{ $rol->description }}</td>
									<td>
										<button type="submit"  class="btn  btn-danger" ><i class="fa fa-close"></i></button>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection