@extends('layout.auth-app')

@section('content')
	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Password recovery form -->
                <form class="login-form" method="POST" action="{{ route('password.update') }}">
                    @csrf
					<input type="hidden" name="token" value="{{ $token }}">
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Password recovery</h5>
								<span class="d-block text-muted">Type your new password.</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-right">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Your email" required autocomplete="email" autofocus>
								<div class="form-control-feedback">
									<i class="icon-mail5 text-muted"></i>
                                </div>
                                @error('email')
									<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> {{ $message }}</span>
                                @enderror
							</div>

							<div class="form-group form-group-feedback form-group-feedback-right">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="New Password" required autocomplete="new-password">
								<div class="form-control-feedback">
									<i class="icon-user-lock text-muted"></i>
                                </div>
                                @error('password')
									<span class="form-text text-danger"><i class="icon-cancel-circle2 mr-2"></i> {{ $message }}</span>
                                @enderror
							</div>

							<div class="form-group form-group-feedback form-group-feedback-right">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeat New Password" required autocomplete="new-password">
								<div class="form-control-feedback">
									<i class="icon-user-lock text-muted"></i>
                                </div>
							</div>

							<button type="submit" class="btn bg-blue btn-block"><i class="icon-spinner11 mr-2"></i> Reset password</button>
						</div>
					</div>
				</form>
				<!-- /password recovery form -->

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
