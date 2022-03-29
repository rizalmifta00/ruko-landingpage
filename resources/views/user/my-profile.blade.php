@extends('layout.app')

@section('title')
    <h4><span class="font-weight-semibold">Home</span> - My Profile</h4>

@endsection

@section('breadcrumb')
    <a href="{{route('home')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
    <span class="breadcrumb-item active">My Profile</span>
@endsection

@section('content')
<!-- Profile info -->
<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title">Account Informations</h5>
	</div>

	<div class="card-body">
    <form action="{{route('profile.update-profil',$data->id)}}" method="post" enctype="multipart/form-data" files=true>
      @method('PUT')
      @csrf
			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label>Username</label>
            <input type="text" readonly="readonly" name="nama" value="{{$data->name}}" class="form-control">
            @if ($errors->has('nama'))
            <label style="padding-top:7px;color:#F44336;">
            <strong><i class="fa fa-times-circle"></i> {{ $errors->first('nama') }}</strong>
            </label>
            @endif
					</div>
					<div class="col-md-6">
						<label>Email</label>
            <input type="email" readonly="readonly" name="email" value="{{$data->email}}" class="form-control">
            @if ($errors->has('email'))
            <label style="padding-top:7px;color:#F44336;">
            <strong><i class="fa fa-times-circle"></i> {{ $errors->first('email') }}</strong>
            </label>
            @endif
					</div>
				</div>
			</div>

      <div class="text-right">
          <button id="back-profil" style="display:none" onclick="backProfile(); return false;" class="btn bg-grey-400">Cancel</button>
          <button id="save-profil" style="display:none" type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-floppy-disk position-right"></i></b> Save</button>
      </div>
		</form>
    <div class="text-right">
        <button id="edit-profil" onclick="editProfile()" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-arrow-right14 position-right"></i></b> Change</button>
    </div>
	</div>
</div>
<!-- /profile info -->
<!-- Account settings -->
<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title">Account Settings</h5>
	</div>

	<div class="card-body">
    <form action="{{route('profile.update-password',$data->id)}}" method="post">
      @method('PUT')
      @csrf
			<div class="form-group">
				<div class="row">
					<div class="col-md-12">
						<label>Current Password</label>
                        <input type="password" readonly="readonly" name="current_password" placeholder="" value="password" class="form-control">
                        @if ($errors->has('current_password'))
                        <label style="padding-top:7px;color:#F44336;" class="error-validation">
                        <strong><i class="fa fa-times-circle"></i> {{ $errors->first('current_password') }}</strong>
                        </label>
                        @endif
                        @if (session('errorPassword'))
                        <label style="padding-top:7px;color:#F44336;" class="error-validation">
                        <strong><i class="fa fa-times-circle"></i> {{session('errorPassword')}}</strong>
                        </label>
                        @endif
                        @if ($errors->has('password'))
                        <label style="padding-top:7px;color:#F44336;" class="error-validation">
                        <strong><i class="fa fa-times-circle"></i> {{ $errors->first('password') }}</strong>
                        </label>
                        @endif
                        @if ($errors->has('password_confirmation'))
                        <label style="padding-top:7px;color:#F44336;" class="error-validation">
                        <strong><i class="fa fa-times-circle"></i> {{ $errors->first('password_confirmation') }}</strong>
                        </label>
                        @endif
					</div>
				</div>
			</div>

			<div class="form-group" style="display:none" id="div-ganti-password">
				<div class="row">
					<div class="col-md-6">
						<label>New Password</label>
                        <input type="password" readonly="readonly" name="password" placeholder="" class="form-control">
					</div>

					<div class="col-md-6">
						<label>Repeat New Password</label>
                        <input type="password" readonly="readonly" name="password_confirmation" placeholder="" class="form-control">
					</div>
				</div>
			</div>
      <div class="text-right">
          <button id="back-password" style="display:none" onclick="backPassword(); return false;" class="btn bg-grey-400"> Cancel</button>
          <button id="save-password" style="display:none" type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-floppy-disk position-right"></i></b> Save</button>
      </div>
    </form>
    <div class="text-right">
        <button id="edit-password" onclick="editPassword()" class="btn bg-teal-400 btn-labeled btn-labeled-left"><b><i class="icon-arrow-right14 position-right"></i></b> Change</button>
    </div>
	</div>
</div>
<!-- /account settings -->
@endsection @push('after_script')
@push('after_script')
<script>
    function editProfile() {
        $('#save-profil').fadeIn();
        $('#back-profil').fadeIn();
        $("input[name='nama']").prop('readonly', false);;
        $("input[name='email']").prop('readonly', false);
        $('#edit-profil').hide();
    }
    function backProfile() {
        $('#save-profil').hide();
        $('#back-profil').hide();
        $("input[name='nama']").prop('readonly', true);
        $("input[name='email']").prop('readonly', true);
        $('#edit-profil').fadeIn();
    }
    function editPassword() {
        $('#save-password').fadeIn();
        $('#back-password').fadeIn();
        $('.error-validation').hide();
        $('#div-ganti-password').slideDown('fast');
        $("input[name='current_password']").prop('readonly', false).val('');
        $("input[name='password']").prop('readonly', false);
        $("input[name='password_confirmation']").prop('readonly', false);
        $('#edit-password').hide();
    }
    function backPassword() {
        $('#save-password').hide();
        $('#back-password').hide();
        $('#div-ganti-password').slideUp('fast');
        $("input[name='current_password']").prop('readonly', true).val('********');
        $("input[name='password']").prop('readonly', true);
        $("input[name='password_confirmation']").prop('readonly', true);
        $('#edit-password').fadeIn();
    }
</script>
@endpush
