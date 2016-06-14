@extends('site')

@section('content')
	<h1>Home</h1>
	<div class="row">
		<div class=" col-xs-12 col-sm-12 col-md-12">
			@if (Auth::guest())

				<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
					{{ csrf_field() }}
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="name" class="col-md-4 control-label">Name</label>

							<div class="col-md-6">
								<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

								@if ($errors->has('name'))
									<span class="help-block">
										<strong>{{ $errors->first('name') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<label for="password" class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<input id="password" type="password" class="form-control" name="password">

								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

							<div class="col-md-6">
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation">

								@if ($errors->has('password_confirmation'))
									<span class="help-block">
										<strong>{{ $errors->first('password_confirmation') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-btn fa-user"></i> Register
								</button>
							</div>
						</div>
					</form>

			@else
				<div class="row home-menu">
					<div class=" col-xs-12 col-sm-4 col-md-4">
						<a href="{{ url('/profile') }}">
							<div class="home-menu-item">
								<div class="menu-item-top">
									<i class="fa fa-user" aria-hidden="true"></i>
								</div class="menu-item-bot">
								<div class="menu-item-bot">
									Profile
								</div>
							</div>
						</a>
					</div>
					<div class=" col-xs-12 col-sm-4 col-md-4">
						<a href="{{ url('/enumeration') }}">
							<div class="home-menu-item">
								<div class="menu-item-top">
									<i class="fa fa-file-text-o" aria-hidden="true"></i>
								</div>
								<div class="menu-item-bot">
									Enumeration
								</div>
							</div>
						</a>
					</div>
					<div class=" col-xs-12 col-sm-4 col-md-4">
						<a href="{{ url('/logout') }}">
							<div  class="home-menu-item">
								<div class="menu-item-top">
									<i class="fa fa-btn fa-sign-out"></i>
								</div>
								<div class="menu-item-bot">
									Logout
								</div>
							</div>
						</a>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection