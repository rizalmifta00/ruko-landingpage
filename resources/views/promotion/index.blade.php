@extends('layout.app')
@section('promotion','active')
@section('title')
    <h4><span class="font-weight-semibold">Master</span> - Promotion</h4>
@endsection

@section('breadcrumb')
    <a class="breadcrumb-item"><i class="icon-database mr-2"></i> Master</a>
    <span class="breadcrumb-item active">Promotion</span>
@endsection
@section('content')
<div class="card">
    <div class="col-md-12" style="padding-top:10px">
        <button id="btn-create" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">
            <b><i class="icon-add"></i></b> Tambah Tutor
        </button>
    </div>
    <table class="table" id="table-promotion">
        <thead>
            <tr>
                <th>id</th>
                <th style="width:1px">No</th>
                <th style="width:20%" >Picture</th>
                <th>Nama</th>
                <th style="width: 200px">Deskripsi</th>
                <th style="width: 10px">Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
@include('promotion.create')
@include('promotion.edit')
@endsection
@push('after_script')
<script>
    var tableData;
    $(document).ready(function(){
         $("#btn-create").on('click', function(){
          $('.fileinput-remove-button').click();
          $('input[name=name]').val('');
          $('textarea[name=description]').val('');
          $('input[name=picture]').val('');
          $('input[name=link]').val('');
          $('#modal-create').modal('show');
          
         
      });
      tableData = $('#table-promotion').DataTable({
        processing	: true,
        language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records"
                  },
        // dom 		: "<fl<t>ip>",
  			serverSide	: true,
  			stateSave: true,
        ajax		: {
            url: "{{ url('table/data-promotion') }}",
            type: "GET",
        },
        columns: [
            { data: 'id', name:'id', visible:false},
            { data: 'DT_RowIndex', name:'DT_RowIndex', visible:true},
            { data: 'pictures', name:'pictures', visible:true},
            { data: 'name', name:'name', visible:true},
            { data: 'description', name:'description', visible:true},
            { data: 'link', name:'link', visible:true},
            { data: 'action', name:'action', visible:true},
        ],
      });
      $('#table-promotion tbody').on( 'click', '#btn-delete', function () {
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
              url: "{{ url('delete/promotion') }}"+"/"+data['id'],
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
      $("#table-promotion tbody").on('click','#btn-edit', function(){
          $('.fileinput-remove-button').click();
          $("#promotion-edit :input").val('');
          $('#modal-edit').modal('show');
          
           
          var data = tableData.row( $(this).parents('tr') ).data();
          var id = data['id'];
          var token = $('input[name=_token]').val();
          
          
          /*START GET PICTURE*/
          $('#img-edit').empty();
          var img = $('<img id="img-promotion" class="mb-1" src="/images/promotion/'+data['picture']+'" alt="" title="" width="500px"><br>');
          $('#img-edit').append(img);
          /*END GET PICTURE*/
          $('input[name=_method]').val('PUT');
          $('input[name=_token]').val(token);
          $('input[name=id_edit]').val(data['id']);
          $('input[name=name_edit]').val(data['name']);
          $('textarea[name=description_edit]').val(data['description']);
          $('input[name=link_edit]').val(data['link']);
          
          
        });
       
      });
</script>
@endpush