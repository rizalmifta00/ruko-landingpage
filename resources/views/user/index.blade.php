@extends('layout.app')
@section('user','active')
@section('title')
    <h4><span class="font-weight-semibold">Master</span> - User</h4>
@endsection

@section('breadcrumb')
    <a class="breadcrumb-item"><i class="icon-database mr-2"></i> Master</a>
    <span class="breadcrumb-item active">User</span>
@endsection
@section('content')
<div class="card">
    <div class="col-md-12" style="padding-top:10px">
        <a href="{{route('user.create')}}" type="button" class="btn bg-teal-400 btn-labeled btn-labeled-left">
            <b><i class="icon-add"></i></b> Tambah User
        </a>
    </div>
    <table class="table" id="table-user">
        <thead>
            <tr>
                <th>ID</th>
                <th style="width:1px">No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
<!-- /basic responsive configuration -->

@endsection @push('after_script')
<script>
    var tableUser, saveMethod, id;
    $(document).ready(function () {
        tableUser = $("#table-user").DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Cari data",
                paginate: {
                    previous: "Sebelumnya",
                    next: "Berikutnya"
                }
            },
            ajax: {
                url: "{{ url('table/data-user') }}",
                type: "GET"
            },

            columns: [
                {
                    data: "id",
                    name: "id",
                    visible: false
                },
                {
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    visible: true
                },
                {
                    data: "name",
                    name: "name",
                    visible: true
                },
                {
                    data: "email",
                    name: "email",
                    visible: true
                },
                {
                    data: "role",
                    name: "role",
                    visible: true
                },
                {
                    data: "action",
                    name: "action",
                    visible: true
                }
            ]
        });


        /* delete data */
        $("#table-user tbody").on("click", "#btn-delete", function () {
            var data = tableUser.row($(this).parents("tr")).data();
            swal({
                text: "Apakah Anda yakin ingin menghapus data ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true
            })
            .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                url: "{{ url('delete/data-user') }}"+"/"+data['id'],
                method: 'get',
                success: function(result){
                    if (result.status == 'success') {
                    tableUser.ajax.reload();
                    swal("Data yang dipilih berhasil dihapus!", {
                        icon: "success",
                    });
                    } else {
                    swal(result.message, {
                        icon: "error",
                    });
                    }
                }
                });
            } else {
                swal("Data Anda aman!");
            }
            });
        });

        $('#role').select2({
            dropdownParent: $('#modal-create')
        });

    });
</script>
@endpush
