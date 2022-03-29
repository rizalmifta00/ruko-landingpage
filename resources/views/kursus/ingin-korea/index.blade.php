<button id="btn-create-ingin-korea" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">
            <b><i class="icon-add"></i></b> Ingin Korea
</button>
<table class="table" id="table-universitas">
    <thead>
        <tr>
            <th>id</th>
            <th style="width:1px">No</th>
            <th style="width:20%" >Picture</th>
            <th>Nama</th>
            <th>Negara</th>
            <th>Link</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
@include('kursus.ingin-korea.create')
@include('kursus.ingin-korea.edit')
@push('after_script')
<script>
    var tableData;
    $(document).ready(function(){
      /* START INGIN KOREA */
       tableData = $('#table-universitas').DataTable({
        processing	: true,
        language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records"
                  },
        // dom 		: "<fl<t>ip>",
  			serverSide	: true,
  			stateSave: true,
        ajax		: {
            url: "{{ url('table/data-universitas') }}",
            type: "GET",
        },
        columns: [
            { data: 'id', name:'id', visible:false},
            { data: 'DT_RowIndex', name:'DT_RowIndex', visible:true},
            { data: 'pictures', name:'pictures', visible:true},
            { data: 'name', name:'name', visible:true},
            { data: 'negara', name:'negara', visible:true},
            { data: 'link', name:'link', visible:true},
            { data: 'action', name:'action', visible:true},
        ],
      });

      $("#btn-create-ingin-korea").on('click', function(){
          $('.fileinput-remove-button').click();
          $('input[name=name]').val('');
          $('input[name=link]').val('');
          $('input[name=picture]').val('');
          $('input[name=negara]').val('');
          $('#modal-create-ingin-korea').modal('show');
          $('#indo').val('indo');
          $('#korea').val('korea');
      });

      $("#table-universitas tbody").on('click','#btn-edit-ingin-korea', function(){
          $('.fileinput-remove-button').click();
          $("#universitas-edit :input").val('');
          $('#modal-edit-ingin-korea').modal('show');
           
          var data = tableData.row( $(this).parents('tr') ).data();
          var id = data['id'];
          var token = $('input[name=_token]').val();
          $('#korea-edit').val('korea');
          $('#indo-edit').val('indo');
          
          /*START GET PICTURE*/
          $('#img-edit-ingin-korea').empty();
          var img = $('<img id="img-universitas" class="mb-1" src="/images/universitas/'+data['picture']+'" alt="" title="" height="200"><br>');
          $('#img-edit-ingin-korea').append(img);
          /*END GET PICTURE*/
          console.log(data)
          $('input[name=_method]').val('PUT');
          $('input[name=_token]').val(token);
          $('input[name=id_edit]').val(data['id']);
          $('input[name=name_edit]').val(data['name']);
          $('input[name=link_edit]').val(data['link']);
          $('input[name="negara_edit"][value="' + data['negara'] + '"]').prop('checked', true).trigger("click");
      });

      $('#table-universitas tbody').on( 'click', '.btn-delete', function () {
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
                url: "{{ url('delete/universitas') }}"+"/"+data['id'],
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
      /* END START INGIN KOREA */
    });
</script>
@endpush