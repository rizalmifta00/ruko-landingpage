@extends('layout.app')
@section('user','active')
@section('title')
    <h4>
        <a href="{{route('user.index')}}"><i class="text-default icon-arrow-left52 mr-2"></a></i>
        <span class="font-weight-semibold">Master</span> - Create User
    </h4>
@endsection

@section('breadcrumb')
    <a class="breadcrumb-item"><i class="icon-database mr-2"></i> Master</a>
    <span class="breadcrumb-item"><a href="{{route('user.index')}}" class="text-default"> User </a></span>
    <span class="breadcrumb-item active">Create</span>
@endsection
@section('content')
    <!-- Form inputs -->
    <div class="card">
        <div class="card-body">
            <form class="form-horizontal" action="{{route('user.store')}}" method="post" enctype="multipart/form-data" files=true>
                @csrf
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Create User</legend>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Username</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @include('layout.error-single-alert',['name'=>'name'])
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            @include('layout.error-single-alert',['name'=>'email'])
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password">
                            @include('layout.error-single-alert',['name'=>'password'])
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Repeat Password</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="password_confirmation">
                            @include('layout.error-single-alert',['name'=>'password_confirmation'])
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Role</label>
                        
                        <div class="col-lg-10">
                            <select name="role" id="role" data-placeholder="Pilih role" class="form-control select" data-fouc>
                                @foreach($role as $data)
                                <option value="{{$data->id}}" {{ (collect(old('role'))->contains($data->id)) ? 'selected':'' }}>{{$data->name}}</option>
                                @endforeach
                            </select>
                            @include('layout.error-single-alert',['name'=>'role'])
                        </div>
                    </div>
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /form inputs -->
@endsection 

@push('after_script')
<script>
    $(document).ready(function () {
        $('#role').select2();
    });
</script>
@endpush
