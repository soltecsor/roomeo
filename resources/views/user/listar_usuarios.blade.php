@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 col-8 align-self-center">
			<h3 class="text-themecolor">Users</h3>
		</div>
	</div>

	<div class="row">
		<!-- Column -->
		<div class="col-lg-12 col-md-12">
			@include('flash::message')
			<div class="card">
				<div class="card-body">
					<div class="row">
						<div class="col-6">
							{!! Form::open(['method' => 'POST', 'url' => 'buscar_usuario']) !!}
								<span class="row form-material">
									<span class="col-11">
									<div class="form-group">
										<input type="text" class="form-control form-control-line" id="dato_buscado" placeholder="Search user" name="dato_buscado" required>
									</div>	
									</span>
									<span class="col-1">	
										<button type="submit" class="btn btn-info "><i class="fa fa-search"></i> </button>
									</span>
								</span>
							{!! Form::close() !!}
						</div>
						<div class="col-6">
							<span style="float:right;">
								<a class="btn waves-effect waves-light btn-info" href="{{ url("/form_novo_usuario") }}"><i class="fa fa-plus"></i> Add new user</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12">
			<div class="card">
				<div class="card-body">
					<div>
						<h3 class="card-title">User List</h3>
						<h6 class="card-subtitle">
							List to display users and their registered data</h6> 
					</div>

					@if(count($usuarios)>0)
							<div class="table-responsive" >
								<table  class="table">
									<thead>
									<tr>
										<th>Code</th>
										<th>Functions</th>
										<th>Name</th>
										<th>Email</th>
										<th>Actions</th>
									</tr>
									</thead>
									<tbody>
									@foreach($usuarios as $usuario)
										<tr role="row" class="odd">
											<td>{{ $usuario->id }}</td>
											<td>
												@foreach($usuario->getRoles() as $roles)
													<span class="label label-info">
														{{  $roles.","  }}
													</span>
												@endforeach													
											</td>
											<td class="mailbox-messages mailbox-name"><strong>&nbsp{{ $usuario->name  }}</strong></td>
											<td>{{ $usuario->email }}</td>
											<td>
												<a href="{{ url('/form_editar_usuario/'.$usuario->id) }}" title="Editar"><button class="btn btn-warning waves-effect"><i class="fa fa-pencil"></i></button></a>
												<form action="{!! url('/apagar_usuario') !!}" method="POST" style="display: inline;" onsubmit="if(confirm('Deletar? A confirmação apagará PERMANENTEMENTE!')) { return true } else {return false };">
													<input type="hidden" name="_method" value="post">
													<input type="hidden" name="id_usuario" value="{{ $usuario->id }}">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<button type="submit" class="btn btn-danger waves-effect"><i class="fa fa-close"></i></button>
												</form>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
								{{ $usuarios->links() }}
							</div>
							@else
							<h3>User not found!</h3>
							@endif
				</div>
			</div>
		</div>
	</div>

</div>
@endsection