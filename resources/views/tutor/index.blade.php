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
    <div class="col-md-12" style="padding-top:10px">
        <a href="{{route('tutor.create')}}" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">
            <b><i class="icon-add"></i></b> Tambah Tutor
        </a>
    </div>
    <table class="table datatable-basic">
        <thead>
            <tr>
                <th>No</th>
                <th>Picture</th>
                <th>Name</th>
                <th style="width: 300px">Description</th>
                
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td> <img class="img-responsive" src="{{ asset('images/tutor/' . $data->picture) }}" width="200" alt="" srcset=""></td>
                <td>{{$data->name}}</td>
                <td >{!!$data->description!!}</td>
                <td class="text-center">
                  <form method="POST">
                                <a href="{{ route('tutor.edit', $data->id) }}"
                                    class="btn btn-warning btn-icon"><i class="icon-pencil4"></i></a>
                                @csrf
                                @method('DELETE')
                                <a href="{{route('tutor.destroy',$data->id)}}" id="btn-delete" class="delete-modal btn btn-danger btn-icon ml-1"  type="submit"> <i class="icon-trash"></i></a>
                </td>
            </tr>
              @endforeach
        </tbody>

    </table>
</div>


@endsection
