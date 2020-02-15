@extends ('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 col-8 align-self-center">
			<h3 class="text-themecolor">Permissions</h3>
		</div>
	</div>
	@include('flash::message')
	<div class="row">		
		<!-- Column -->
		<div class="col-lg-5 col-md-5">			
			<div class="card">
				<div class="card-header ">
					<h4>Add permission</h4>
				</div>
				<div class="card-body">					
					<form   action="{{ url('agregar_permiso') }}"  method="post" id="f_asignar_permiso" class="formentrada"  >
						<div class="row form-material">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
							<div class="col-lg-12">
								<div class="form-group">
									<select id="rol_sel" name="rol_sel" class="form-control" required>
										@foreach($roles as $rol)
											<option value="{{ $rol->id }}">{{ $rol->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<select id="permiso_rol" name="permiso_rol" class="form-control" required>
										@foreach($permissoes as $permiso)
											<option value="{{ $permiso->id }}">{{ $permiso->name }}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-lg-12"><button type="submit" class="btn btn-primary">Add permission</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-7 col-md-7">			
			<div class="card">
				<div class="card-header mb-3">
					<h4>New permission</h4>
				</div>
				<div class="card-body">
					
					<form   action="{{ url('criar_permissao') }}"  method="post" id="f_crear_permiso" class="formentrada"  >
						<div class="row form-material">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-group">
										<div class="form-line">
											<input type="text" class="form-control" id="permiso_nombre" name="permissao_nome" placeholder="Permission*" required >
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<div class="form-group">
										<div class="form-line">
											<input type="text" class="form-control" id="permiso_slug" name="permissao_slug" placeholder="Sigla*" required >
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<div class="form-group">
										<div class="form-line">
											<input type="text" class="form-control" id="permiso_descripcion" name="permissao_descripcion" placeholder="Description*" required >
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12"><button type="submit" class="btn btn-primary">Create new permission</button></div>						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					@foreach($roles as $rol)
						<div class="table-responsive" >
							<table  class="table table-hover table-striped" cellspacing="0" width="100%">
								<thead>
									<th colspan="5" style="text-align: center; background-color: #b8ccde;" >{{ $rol->name }} User Permissions</th>
								</thead>
								<thead>
									<th>Code</th>
									<th>Name</th>
									<th>Sigla</th>
									<th>Description</th>
									<th>Actions</th>
								</thead>
								<tbody>
									@foreach($rol->permissions as $permiso)
									<tr role="row" class="odd" id="filaP_{{ $permiso->id }}">
										<td>{{ $permiso->id }}</td>
										<td>{{ $permiso->name }}</td>
										<td class="mailbox-messages mailbox-name" style="color: red">&nbsp;<strong>{{ $permiso->slug  }}</strong></td>
										<td>{{ $permiso->description }}</td>
										<td>
											<button type="button"  class="btn  btn-danger btn-xs"  onclick="borrar_permiso({{ $rol->id }},{{ $permiso->id }});"  ><i class="fa fa-fw fa-remove"></i></button>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection