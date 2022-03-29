<!-- Vertical form modal -->
<div id="modal-create" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Banner</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="form-horizontal" id="banner-store" method="post" enctype="multipart/form-data" files=true>
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Banner Picture</label>
                        <input type="file" name="picture" class="file-input-custom" data-show-caption="true"
                            data-show-upload="false" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="url"  name="link" class="form-control"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" rows="3" cols="3" name="description" class="form-control"
                            placeholder=""></textarea>
                    </div>
                    <div class="form-group">
                        <label class="d-block font-weight-semibold">Visible</label>
                        <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input-styled-primary" type="radio" name="visible" id="viewCreate" value="1">
                                <label class="form-check-label ml-2" for="inlineRadio1">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input-styled-danger" type="radio" name="visible" id="notViewCreate" value="0">
                                <label class="form-check-label ml-2" for="inlineRadio2">No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /vertical form modal -->
<!-- /content area -->
@push('after_script')
<script type="text/javascript">
    $(document).ready(function () {
        /* save data */
        $('#banner-store').on('submit', function (e) {
            e.preventDefault();
            $.ajax({
                'type': 'POST',
                'url': "{{ route('banner.store') }}",
                'data': new FormData(this),
                'processData': false,
                'contentType': false,
                'dataType': 'JSON',
                'success': function (data) {
                    if (data.success) {
                        $('#modal-create').modal('hide');
                        swal('Success', {
                            icon: "success",
                            timer: 2000,
                        });
                        tableData.ajax.reload();
                    } else {
                        for (var count = 0; count < data.errors.length; count++) {
                            swal(data.errors[count], {
                                icon: "error",
                                timer: false,
                            });
                        }
                    }
                },

            });
        });
    });

</script>
@endpush
