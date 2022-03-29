@include('kursus.b-indonesia.create')
@include('kursus.b-indonesia.edit')
<button id="btn-create-b-indonesia" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">
    <b><i class="icon-add"></i></b> Kursus B Indonesia
</button>

<table class="table" id="table-b-indonesia">
    <thead>
        <tr>
            <th>id</th>
            <th style="width:1px">No</th>
            <th style="width:20%" >Picture</th>
            <th>Nama</th>
            <th>Link</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>

@push('after_script')
<script>
    var tableDataBIndonesia;
    $(document).ready(function(){
      /* START B INDONESIA */
      tableDataBIndonesia = $('#table-b-indonesia').DataTable({
        processing	: true,
        language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records"
                  },
        // dom 		: "<fl<t>ip>",
  			serverSide	: true,
  			stateSave: true,
        ajax		: {
            url: "{{ url('table/data-b-indonesia') }}",
            type: "GET",
        },
        columns: [
            { data: 'id', name:'id', visible:false},
            { data: 'DT_RowIndex', name:'DT_RowIndex', visible:true},
            { data: 'pictures', name:'pictures', visible:true},
            { data: 'name', name:'name', visible:true},
            { data: 'link', name:'link', visible:true},
            { data: 'description', name:'description', visible:true},
            { data: 'action', name:'action', visible:true},
        ],
      });

      $("#btn-create-b-indonesia").on('click', function(){
          $('.fileinput-remove-button').click();
          document.getElementById('b-indonesia-store').reset();
          $('#modal-create-b-indonesia').modal('show');
      });

      $("#table-b-indonesia tbody").on('click','#btn-edit-b-indonesia', function(){
          $('.fileinput-remove-button').click();
          $("#b-indonesia-edit :input").val('');
          $('#modal-edit-b-indonesia').modal('show');
           
          var data = tableDataBIndonesia.row( $(this).parents('tr') ).data();
          var id = data['id'];
          var token = $('input[name=_token]').val();
          
          /*START GET PICTURE*/
          $('#img-edit-b-indonesia').empty();
          var img = $('<img id="img-b-indonesia" class="mb-1" src="/images/b-indonesia/'+data['picture']+'" alt="" title="" height="200"><br>');
          $('#img-edit-b-indonesia').append(img);
          /*END GET PICTURE*/
          console.log(data)
          $('input[name=_method]').val('PUT');
          $('input[name=_token]').val(token);
          $('input[name=id_edit]').val(data['id']);
          $('input[name=name_edit]').val(data['name']);
          $('input[name=link_edit]').val(data['link']);
          $('textarea[name=description_edit]').val(data['description']);
      });

      $('#table-b-indonesia tbody').on( 'click', '.btn-delete', function () {
          var data = tableDataBIndonesia.row( $(this).parents('tr') ).data();
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
                  tableDataBIndonesia.ajax.reload();
                  swal("Your data has been deleted!", {
                    icon: "success",
                  });
                }
              });
            }
          });
      });

      /* END START B INDONESIA */

    });
</script>
@endpush