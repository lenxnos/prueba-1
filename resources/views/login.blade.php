@component('layouts.zamora')

@slot('zamora')

<style type="text/css">

	.login-title-index{
		font-size: 50px;
		margin-top: 5%;
	}

	@media (max-width: 480px) {
		.login-title-index{
			font-size: 30px;
			margin-top: 5%;
			text-align: center;
		}

		#zamora-navbar{
			display: none;
		}

		body{
			margin-top: 10px;
		}

		footer{
			font-size: 10px;
		}

	}

	@-webkit-keyframes color_change {
		from {  color: #636b6f;}
		to {  color: black;}
	}
	@-moz-keyframes color_change {
		from {  color: #636b6f;}
		to {  color: black;}
	}
	@-ms-keyframes color_change {
		from {  color: #636b6f;}
		to {  color: black;}
	}
	@-o-keyframes color_change {
		from {  color: #636b6f;}
		to {  color: black;}
	}
	@keyframes color_change {
		from {  color: #636b6f;}
		to {  color: black;}
	}

	.fa-hover:hover i{

		-webkit-animation: color_change 1s infinite  alternate;
		-moz-animation: color_change 1s infinite alternate;
		-ms-animation: color_change 1s infinite alternate;
		-o-animation: color_change 1s infinite alternate;
		animation: color_change 1s infinite alternate;

		color: black;
	}

</style>



@endslot

@slot('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="row">
						<div class="col-md-6">
							<img src="{{ asset('images/logo_aragua_2017.png') }}" alt="" class="img-responsive">
						</div>					
						<div class="col-md-6  login-title-index">
							Sisgesin
						</div>
					</div>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" method="POST" action="{{ route('login') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">Usuario</label>

							<div class="col-md-6">
								<div class="input-group">
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
									<span class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</span>
								</div>

								@if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-md-4 control-label">Contraseña</label>

							<div class="col-md-6">
								<div class="input-group">
									<input id="password" type="password" class="form-control" name="password" required>
									<span class="input-group-addon">
										<i class="fa fa-lock" aria-hidden="true"></i>
									</span>
								</div>

								@if ($errors->has('password'))
								<span class="help-block">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label data-toggle="tooltip" title="Permite recodar la contraseña, e inicia automáticamente la sesión">
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar Usuario
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Entrar
								</button>

								<a class="btn btn-link" href="{{ route('password.request') }}">
									Olvidastes tu contraseña
								</a>
							</div>
						</div>
					</form>		
				</div>
			</div>
		</div>
	</div>
</div>
@endslot
@endcomponent
