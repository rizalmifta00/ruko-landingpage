@extends('layout.app')
@section('user','active')
@section('title')
    <h4>
        <a href="{{route('user.index')}}"><i class="text-default icon-arrow-left52 mr-2"></a></i>
        <span class="font-weight-semibold">Master</span> - Edit Tutor
    </h4>
@endsection

@section('breadcrumb')
    <a href="" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Master</a>
    <span class="breadcrumb-item"><a href=" " class="text-default"> User </a></span>
    <span class="breadcrumb-item active">Edit</span>
@endsection
@section('content')
<div class="card">
        <div class="card-body">
            <form class="form-horizontal" action="{{route('tutor.update',$data->id)}}" method="post" enctype="multipart/form-data" files=true>
                @csrf
                @method('PUT')
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">Create Tutor</legend>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" value="{{ $data->name }}">
                            @include('layout.error-single-alert',['name'=>'name'])
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Picture</label>
                        <div class="col-lg-10">
                            <div>
                                <img style="width: 300px;margin-bottom:20px" src="{{ asset('images/tutor/' . $data->picture) }}" alt="">
                            </div>
                           <input type="file" name="picture"  class="file-input-custom" data-show-caption="true"
                            data-show-upload="false" accept="image/*">
                            @include('layout.error-single-alert',['name'=>'picture'])
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">description</label>
                        <div class="col-lg-10">
                           <textarea name="description" class="ckeditor @error('description') is-invalid @enderror">
                        {{ $data->description }}
                    </textarea>
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
@push('after_script')
<script type="text/javascript">
$(document).ready(function(){
    CKEDITOR.replace( 'description' );
    /* START OF SAVE DATA */
        
	
          var img = $('<img id="img-tutor" class="mb-1" src="/images/tutor/'+data['picture']+'" alt="" title="" height="200"><br>');
          $('#img-tutor').append(img);
          
       
});

</script>
@endpush
