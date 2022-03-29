@extends('layout.app')
@section('tutor','active')
@section('title')
    <h4><span class="font-weight-semibold">Master</span> - Tutor</h4>
@endsection

@section('breadcrumb')
    <a class="breadcrumb-item"><i class="icon-database mr-2"></i> Tutor</a>
    <span class="breadcrumb-item active">Tutor</span>
@endsection
@section('content')
<div class="card">
        <div class="card-body">
            <form class="form-horizontal" action="{{route('tutor.store')}}" method="post" enctype="multipart/form-data" files=true>
                @csrf
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Create Tutor</legend>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            @include('layout.error-single-alert',['name'=>'name'])
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Picture</label>
                        <div class="col-lg-10">
                           <input type="file" name="picture" class="file-input-custom" data-show-caption="true"
                            data-show-upload="false" accept="image/*">
                            @include('layout.error-single-alert',['name'=>'picture'])
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">description</label>
                        <div class="col-lg-10">
                           <textarea  rows="3" cols="3" name="description" class="form-control"
                            placeholder=""></textarea>
                            @include('layout.error-single-alert',['name'=>'description'])
                        </div>
                    </div>

                   
                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection




<!-- /vertical form modal -->
<!-- /content area -->
@push('after_script')
<script type="text/javascript">
 
    $(document).ready(function () {
     CKEDITOR.replace( 'description' );
        /* save data */       
    });

</script>
@endpush
