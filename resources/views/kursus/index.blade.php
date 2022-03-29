@extends('layout.app')
@section('universitas','active')
@section('title')
    <h4><span class="font-weight-semibold">Master</span> - Kursus</h4>
@endsection

@section('breadcrumb')
    <a class="breadcrumb-item"><i class="icon-database mr-2"></i> Master</a>
    <span class="breadcrumb-item active">Kursus</span>
@endsection
@section('content')
<div class="card">
  <div class="card-header header-elements-inline">
    <h6 class="card-title">Menu Kursus</h6>
  </div>

  <div class="card-body">
    <ul class="nav nav-tabs nav-tabs-bottom border-bottom-0">
      <li class="nav-item"><a href="#bottom-divided-tab1" class="nav-link active" data-toggle="tab">Uji Kemampuan</a></li>
      <li class="nav-item"><a href="#bottom-divided-tab2" class="nav-link" data-toggle="tab">Kursus Bahasa Korea</a></li>
      <li class="nav-item"><a href="#bottom-divided-tab3" class="nav-link" data-toggle="tab">Kursus Topik</a></li>
      <li class="nav-item"><a href="#bottom-divided-tab4" class="nav-link" data-toggle="tab">Kursus B. Indonesia</a></li>
      <li class="nav-item"><a href="#bottom-divided-tab5" class="nav-link" data-toggle="tab">Ingin Korea</a></li>
    </ul>

    <div class="tab-content">
      <div class="tab-pane fade show active" id="bottom-divided-tab1">
        @include('kursus.uji-kemampuan.index')      
      </div>

      <div class="tab-pane fade" id="bottom-divided-tab2">
        @include('kursus.b-korea.index')
      </div>

      <div class="tab-pane fade" id="bottom-divided-tab3">
        @include('kursus.kursus-topik.index')
      </div>

      <div class="tab-pane fade" id="bottom-divided-tab4">
        @include('kursus.b-indonesia.index')
      </div>

      <div class="tab-pane fade" id="bottom-divided-tab5">
        @include('kursus.ingin-korea.index')
      </div>
    </div>
  </div>
</div>
@endsection
