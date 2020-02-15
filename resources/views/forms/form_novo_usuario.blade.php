@extends ('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row page-titles">
		<div class="col-md-5 col-8 align-self-center">
			<h3 class="text-themecolor">Add new User</h3>
		</div>
	</div>

	<div class="row">
		<!-- Column -->
		<div class="col-lg-12 col-md-12">
			@include('flash::message')
			<div class="card">
				<div class="card-body">
                    <form action="{{ url('criar_usuario') }}" method="POST">
                        <div class="row form-material">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="col-lg-12 mb-3">
                                <p class="lead text-dark">
                                    Personal Data
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Name*" required />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Surname*" required />
                            </div>
                            <div class="col-lg-4">
                                <input type="text" maxlength="11" placeholder="Fone*" class="form-control" id="telefone" name="telefone" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" required >
                            </div>
                            <div class="col-lg-12 mb-3 mt-3">
                                <p class="lead text-dark">
                                    Access Data
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <input type="email" class="form-control" placeholder="E-mail*" id="email" name="email" required >
                            </div>
                            <div class="col-lg-4">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password*" required >
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="btn btn-primary">Add User</button>                                
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection