@extends ('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 col-8 align-self-center">
			<h3 class="text-themecolor">Edit User</h3>
		</div>
	</div>
	@include('flash::message')
	<div class="row">		
		<!-- Column -->
		<div class="col-lg-6 col-md-6">			
			<div class="card">
				<div class="card-header ">
					<h4>Assign Role</h4>
				</div>
				<div class="card-body">
          <div class="col-md-12 text-dark mb-4" style="background-color:white;" >
            Roles asignados:
            @foreach($usuario->getRoles() as $rl)
              <span class="label label-warning" style="margin-left:10px;">{{ $rl }} </span> 
            @endforeach
          </div>
          <form action="{{url('/agregar_rol/'.$usuario->id)}}" method="GET"> 
            <div class="row form-material">
              <div class="col-lg-8">
                <select id="rol1" name="role" class="form-control">
                  @foreach($roles as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                  @endforeach
                </select>    
              </div>
              <div class="col-lg-4">
                {!! Form::button('Add Role', ['type' => 'submit', 'class' => 'btn btn-primary btn-block', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
              </div>
            </div>
          </form>
          <br>
          <form action="{{url('/apagar_rol/'.$usuario->id)}}" method="GET">
            <div class="row form-material">
              <div class="col-sm-8 mb-4" >         
                <select id="rol2" name="role" class="form-control">
                  @foreach($roles as $rol)
                    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                  @endforeach
                </select>    
              </div>
              <div class="col-sm-4" >
                {!! Form::button('Remove Role', ['type' => 'submit', 'class' => 'btn btn-primary btn-block', 'onclick' => "return confirm('Você tem certeza?')"]) !!}
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>  
    <div class="col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header ">
					<h4>System access</h4>
        </div>
        <div class="card-body">
          <form   action="{{ url('editar_acesso') }}"  method="post" id="f_editar_acceso"  class="formentrada"  >
            <div class="row form-material">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
            <input type="hidden" name="id_usuario" value="{{ $usuario->id }}"> 
            <div class="col-lg-12">
              <div class="form-group">
                <label class="col-sm-12 text-dark" for="email">Email*</label>
                <div class="col-sm-10" >
                  <input type="email" class="form-control" id="email" name="email"  value="{{ $usuario->email  }}"  required >
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label class="col-sm-12 text-dark" for="email">Nova Senha*</label>
                <div class="col-sm-10" >
                  <input type="password" class="form-control" id="password" name="password"  required >
                </div>
              </div>
            </div>
            <div class=" col-lg-12"><button type="submit" class="btn btn-primary">Update access</button></div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="row">
  <div class="col-lg-6 col-md-6">
      <div class="card">
        <div class="card-header ">
					<h4>Edit User Information</h4>
        </div>
        <div class="card-body">
          <form   action="{{ url('editar_usuario') }}"  method="post" id="f_editar_usuario"  class="formentrada"  >
            <div class="row form-material">
              <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
              <input type="hidden" name="id_usuario" value="{{ $usuario->id }}"> 
              <div class="col-lg-12">
                  <div class="form-group">
                      <label class="col-sm-12 text-dark" for="name">Name*</label>
                      <div class="col-sm-10" >
                        <input type="text" class="form-control" id="name" name="name"  value="{{ $usuario->name }}"  required   >
                      </div>
                  </div>
              </div>            
              <div class="col-lg-12">
                  <div class="form-group">
                      <label class="col-sm-12 text-dark" for="apelido">Surname*</label>
                      <div class="col-sm-10" >
                        <input type="text" class="form-control" id="apelido" name="apelido"   value="{{ $usuario->apellidos }}" required >
                      </div>
                  </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="col-sm-12 text-dark" for="telefone">Telephone*</label>
                  <div class="col-sm-10" >
                    <input type="text" class="form-control" id="telefone" name="telefone"  value="{{ $usuario->telefono  }}" required >
                  </div>
                </div>
              </div>
              <div class="col-lg-12 mt-2"><button type="submit" class="btn btn-primary">Update data</button></div>                    
            </div>
          </form>
        </div>
      </div>
  </div>
	</div>
</div>
@endsection