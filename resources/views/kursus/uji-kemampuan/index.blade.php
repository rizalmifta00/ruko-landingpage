@include('kursus.uji-kemampuan.create')
@include('kursus.uji-kemampuan.edit')
<button id="btn-create-uji-kemampuan" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">
    <b><i class="icon-add"></i></b> Uji Kemampuan
</button>

<table class="table" id="table-uji-kemampuan">
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
    var tableDataUjiKemampuan;
    $(document).ready(function(){
      /* START Uji Kemampuan */
      tableDataUjiKemampuan = $('#table-uji-kemampuan').DataTable({
        processing	: true,
        language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records"
                  },
        // dom 		: "<fl<t>ip>",
  			serverSide	: true,
  			stateSave: true,
        ajax		: {
            url: "{{ url('table/data-uji-kemampuan') }}",
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

      $("#btn-create-uji-kemampuan").on('click', function(){
          $('.fileinput-remove-button').click();
          document.getElementById('uji-kemampuan-store').reset();
          $('#modal-create-uji-kemampuan').modal('show');
      });

      $("#table-uji-kemampuan tbody").on('click','#btn-edit-uji-kemampuan', function(){
          $('.fileinput-remove-button').click();
          $("#uji-kemampuan-edit :input").val('');
          $('#modal-edit-uji-kemampuan').modal('show');
           
          var data = tableDataUjiKemampuan.row( $(this).parents('tr') ).data();
          var id = data['id'];
          var token = $('input[name=_token]').val();
          
          /*START GET PICTURE*/
          $('#img-edit-uji-kemampuan').empty();
          var img = $('<img id="img-uji-kemampuan" class="mb-1" src="/images/uji-kemampuan/'+data['picture']+'" alt="" title="" height="200"><br>');
          $('#img-edit-uji-kemampuan').append(img);
          /*END GET PICTURE*/
          console.log(data)
          $('input[name=_method]').val('PUT');
          $('input[name=_token]').val(token);
          $('input[name=id_edit]').val(data['id']);
          $('input[name=name_edit]').val(data['name']);
          $('input[name=link_edit]').val(data['link']);
          $('textarea[name=description_edit]').val(data['description']);
      });

      $('#table-uji-kemampuan tbody').on( 'click', '.btn-delete', function () {
          var data = tableDataUjiKemampuan.row( $(this).parents('tr') ).data();
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
                  tableDataUjiKemampuan.ajax.reload();
                  swal("Your data has been deleted!", {
                    icon: "success",
                  });
                }
              });
            }
          });
      });

      /* END START Uji Kemampuan */

    });
</script>
@endpush