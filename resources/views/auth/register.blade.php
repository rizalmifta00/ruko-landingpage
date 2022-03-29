@extends('layout.auth-app')

@section('content')
	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Registration form -->
				<form class="login-form" method="POST" action="{{ route('register') }}">
				@csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-plus3 icon-2x text-success border-success border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Create seller account</h5>
								<span class="d-block text-muted">All fields are required</span>
							</div>

							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Your credentials</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								{{-- <input type="text" class="form-control" placeholder="Username"> --}}
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Username" required autocomplete="name" autofocus>
								<div class="form-control-feedback">
									<i class="icon-user-check text-muted"></i>
								</div>
								@error('name')
									<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> {{ $message }}</span>
                                @enderror
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your email" required autocomplete="email">
								<div class="form-control-feedback">
									<i class="icon-mention text-muted"></i>
								</div>
								@error('email')
									<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> {{ $message }}</span>
                                @enderror
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
								<div class="form-control-feedback">
									<i class="icon-user-lock text-muted"></i>
								</div>
								@error('password')
									<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> {{ $message }}</span>
                                @enderror
							</div>
							<div class="form-group form-group-feedback form-group-feedback-left">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation" required autocomplete="new-password">
								<div class="form-control-feedback">
									<i class="icon-user-lock text-muted"></i>
								</div>
							</div>

							<button type="submit" class="btn bg-teal-400 btn-block">Register <i class="icon-circle-right2 ml-2"></i></button>

							<div class="form-group text-center text-muted content-divider" style="margin-top:20px">
								<span class="px-2">Already have an account?</span>
							</div>

							<div class="form-group">
								<a href="{{route('login')}}" class="btn btn-light btn-block">Log In</a>
							</div>
						</div>
					</div>
				</form>
				<!-- /registration form -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
            @include('layout.auth-footer')
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

@endsection

