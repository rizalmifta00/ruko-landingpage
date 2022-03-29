@include('kursus.kursus-topik.create')
@include('kursus.kursus-topik.edit')
<button id="btn-create-kursus-topik" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">
    <b><i class="icon-add"></i></b> Kursus Topik
</button>

<table class="table" id="table-kursus-topik">
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
    var tableDataKursusTopik;
    $(document).ready(function(){
      /* START Topik */
      tableDataKursusTopik = $('#table-kursus-topik').DataTable({
        processing	: true,
        language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records"
                  },
        // dom 		: "<fl<t>ip>",
  			serverSide	: true,
  			stateSave: true,
        ajax		: {
            url: "{{ url('table/data-kursus-topik') }}",
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

      $("#btn-create-kursus-topik").on('click', function(){
          $('.fileinput-remove-button').click();
          document.getElementById('kursus-topik-store').reset();
          $('#modal-create-kursus-topik').modal('show');
      });

      $("#table-kursus-topik tbody").on('click','#btn-edit-kursus-topik', function(){
          $('.fileinput-remove-button').click();
          $("#kursus-topik-edit :input").val('');
          $('#modal-edit-kursus-topik').modal('show');
           
          var data = tableDataKursusTopik.row( $(this).parents('tr') ).data();
          var id = data['id'];
          var token = $('input[name=_token]').val();
          
          /*START GET PICTURE*/
          $('#img-edit-kursus-topik').empty();
          var img = $('<img id="img-kursus-topik" class="mb-1" src="/images/kursus-topik/'+data['picture']+'" alt="" title="" height="200"><br>');
          $('#img-edit-kursus-topik').append(img);
          /*END GET PICTURE*/
          console.log(data)
          $('input[name=_method]').val('PUT');
          $('input[name=_token]').val(token);
          $('input[name=id_edit]').val(data['id']);
          $('input[name=name_edit]').val(data['name']);
          $('input[name=link_edit]').val(data['link']);
          $('textarea[name=description_edit]').val(data['description']);
      });

      $('#table-kursus-topik tbody').on( 'click', '.btn-delete', function () {
          var data = tableDataKursusTopik.row( $(this).parents('tr') ).data();
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
                  tableDataKursusTopik.ajax.reload();
                  swal("Your data has been deleted!", {
                    icon: "success",
                  });
                }
              });
            }
          });
      });

      /* END START Topik */

    });
</script>
@endpush