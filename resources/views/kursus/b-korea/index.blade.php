@include('kursus.b-korea.create')
@include('kursus.b-korea.edit')
<button id="btn-create-b-korea" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">
    <b><i class="icon-add"></i></b> Kursus Bahasa Korea
</button>

<table class="table" id="table-b-korea">
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
    var tableDataBKorea;
    $(document).ready(function(){
      /* START B INDONESIA */
      tableDataBKorea = $('#table-b-korea').DataTable({
        processing	: true,
        language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records"
                  },
        // dom 		: "<fl<t>ip>",
  			serverSide	: true,
  			stateSave: true,
        ajax		: {
            url: "{{ url('table/data-b-korea') }}",
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

      $("#btn-create-b-korea").on('click', function(){
          $('.fileinput-remove-button').click();
          document.getElementById('b-korea-store').reset();
          $('#modal-create-b-korea').modal('show');
      });

      $("#table-b-korea tbody").on('click','#btn-edit-b-korea', function(){
          $('.fileinput-remove-button').click();
          $("#b-korea-edit :input").val('');
          $('#modal-edit-b-korea').modal('show');
           
          var data = tableDataBKorea.row( $(this).parents('tr') ).data();
          var id = data['id'];
          var token = $('input[name=_token]').val();
          
          /*START GET PICTURE*/
          $('#img-edit-b-korea').empty();
          var img = $('<img id="img-b-korea" class="mb-1" src="/images/b-korea/'+data['picture']+'" alt="" title="" height="200"><br>');
          $('#img-edit-b-korea').append(img);
          /*END GET PICTURE*/
          console.log(data)
          $('input[name=_method]').val('PUT');
          $('input[name=_token]').val(token);
          $('input[name=id_edit]').val(data['id']);
          $('input[name=name_edit]').val(data['name']);
          $('input[name=link_edit]').val(data['link']);
          $('textarea[name=description_edit]').val(data['description']);
      });

      $('#table-b-korea tbody').on( 'click', '.btn-delete', function () {
          var data = tableDataBKorea.row( $(this).parents('tr') ).data();
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
                  tableDataBKorea.ajax.reload();
                  swal("Your data has been deleted!", {
                    icon: "success",
                  });
                }
              });
            }
          });
      });

      /* END START B KOREA */

    });
</script>
@endpush