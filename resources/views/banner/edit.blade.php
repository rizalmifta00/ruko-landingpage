<div id="modal-edit" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Banner</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form class="form-horizontal" id="banner-edit" method="post" enctype="multipart/form-data" files=true>
            @method('PUT')
            @csrf
                <input type="hidden" name="id_edit">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Banner Picture</label>
                        <div id="img-edit" class="col-lg-9"></div>
                        <input type="file" name="picture_edit" class="file-input-custom" data-show-caption="true" data-show-upload="false" accept="image/*">
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="url"  name="link_edit" class="form-control"
                            placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" rows="3" cols="3" name="description_edit" class="form-control" placeholder=""></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label class="d-block font-weight-semibold">Is Viewed</label>
                        <div class="col-lg-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input-styled-primary" type="radio" name="isViewEdit" id="viewEdit" value="1">
                                <label class="form-check-label ml-2" for="inlineRadio1">View</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input-styled-danger" type="radio" name="isViewEdit" id="notViewEdit" value="0">
                                <label class="form-check-label ml-2" for="inlineRadio2">Not View</label>
                            </div>
                        </div>
                    </div> -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn bg-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@push('after_script')
<script type="text/javascript">
$(document).ready(function(){
    /* START OF SAVE DATA */
		$('#banner-edit').on('submit', function (e) {
      e.preventDefault();
        $.ajax({
            'type': 'post',
            'url' : "{{ url('admin/banner') }}"+"/"+$('input[name=id_edit]').val(),
            'data': new FormData(this),
            'processData': false,
            'contentType': false,
            'dataType': 'JSON',
            'success': function(data){
                if(data.success){
                    $('#modal-edit').modal('hide');
                    swal('Successfully updated data!', {
                        icon: "success",
                        timer: 2000,
                    });
                    tableData.ajax.reload();
                }else{
                    for(var count = 0; count < data.errors.length; count++){
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
