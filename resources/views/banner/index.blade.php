@extends('layout.app')
@section('banner','active')
@section('title')
    <h4><span class="font-weight-semibold">Master</span> - Banner</h4>
@endsection

@section('breadcrumb')
    <a class="breadcrumb-item"><i class="icon-database mr-2"></i> Master</a>
    <span class="breadcrumb-item active">Banner</span>
@endsection
@section('content')
<div class="card">
    <div class="col-md-12" style="padding-top:10px">
        <button id="btn-create" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">
            <b><i class="icon-add"></i></b> Tambah Banner
        </button>
    </div>
    <table class="table" id="table-banner">
        <thead>
            <tr>
                <th>id</th>
                <th style="width:1px">No</th>
                <th style="width:20%" >Picture</th>
                <th>Link</th>
                <th>Description</th>
                <th>Visible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
@include('banner.create')
@include('banner.edit')
@endsection
@push('after_script')
<script>
    var tableData;
    $(document).ready(function(){
         $("#btn-create").on('click', function(){
          $('.fileinput-remove-button').click();
          $('textarea[name=description]').val('');
          $('input[name=picture]').val('');
          $('input[name=link]').val('');
          $('input[name=isView]').val('');
          $('#modal-create').modal('show');
          $('#viewCreate').val('1');
          $('#notViewCreate').val('0');
         
      });
      tableData = $('#table-banner').DataTable({
        processing	: true,
        language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records"
                  },
        // dom 		: "<fl<t>ip>",
  			serverSide	: true,
  			stateSave: true,
        ajax		: {
            url: "{{ url('table/data-banner') }}",
            type: "GET",
        },
        columns: [
            { data: 'id', name:'id', visible:false},
            { data: 'DT_RowIndex', name:'DT_RowIndex', visible:true},
            { data: 'pictures', name:'pictures', visible:true},
            { data: 'link', name:'link', visible:true},
            { data: 'description', name:'description', visible:true},
            { data: 'visible', name:'visible', visible:true},
            { data: 'action', name:'action', visible:true},
        ],
      });
      $('#table-banner tbody').on( 'click', '#btn-delete', function () {
        var data = tableData.row( $(this).parents('tr') ).data();
        swal({
          // title: "Are you sure?",
          text: "Are you sure to delete data?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            $.ajax({
              url: "{{ url('delete/banner') }}"+"/"+data['id'],
              method: 'get',
              success: function(result){
                tableData.ajax.reload();
                swal("Your data has been deleted!", {
                  icon: "success",
                });
              }
            });
          }
        });
      });
      $("#table-banner tbody").on('click','#btn-edit', function(){
          $('.fileinput-remove-button').click();
          $("#banner-edit :input").val('');
          $('#modal-edit').modal('show');
          
          var data = tableData.row( $(this).parents('tr') ).data();
          var id = data['id'];
          var token = $('input[name=_token]').val();
          
          /*START GET PICTURE*/
          $('#img-edit').empty();
          var img = $('<img id="img-banner" class="mb-1" src="/images/banner/'+data['picture']+'" alt="" title="" width="500"><br>');
          $('#img-edit').append(img);
          /*END GET PICTURE*/
          $('input[name=_method]').val('PUT');
          $('input[name=_token]').val(token);
          $('input[name=id_edit]').val(data['id']);
          $('input[name=link_edit]').val(data['link'])
          $('textarea[name=description_edit]').val(data['description']);
        });
        $('#table-banner tbody').on( 'click', '#btn-visible', function () {
          var data = tableData.row( $(this).parents('tr') ).data();
          swal({
            // title: "Are you sure?",
            text: "Are you sure to change visible setting?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              $.ajax({
                url: "{{ url('admin/banner') }}"+"/"+data['id']+"/visible",
                method: 'get',
                success: function(result){
                  tableData.ajax.reload();
                  swal("Your data has been deleted!", {
                    icon: "success",
                  });
                }
              });
            }
          });
        });
      });
</script>
@endpush