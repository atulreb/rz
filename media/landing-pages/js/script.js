$(document).on('click', '.loadmore', function () {
    $(this).text('Loading...');
    var ele = $(this).parent('div');
    $.ajax({
        url: base_url + 'frontend/landing_pages/loadMoreJobs',
        type: 'POST',
        data: {
            page: $(this).data('page'),
            service_type: page_name,
        },
        success: function (response) {

            if (response) {
                ele.hide();
                $(".jobs_data").append(response);
            }
        }
    });
});

function applyJob(id) {
    $('#applyModal').modal('show');
    $('#dyn_job_id').val(id);
    $.ajax({
        url: base_url + 'backend/Job/getJobDetailsFront',
        type: 'POST',
        data: {
            job_id: id,
        },
        dataType: 'json',
        success: function (response) {

            if (response) {
                $("#mod_job_long_desc").html(response.long_desc);
                $("#mod_job_title").html(response.job_title);
            }
        }
    });


}
$(document).on('click', '#submitJobApplication', function () {
    var formData = new FormData($("#jobAppplyForm")[0]);
    $.ajax({
        url: base_url + 'backend/job/applyToJob',
        type: 'POST',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        mimeType: "multipart/form-data",
        dataType: 'json',
        success: function (response) {
            //alert(response);
            if (response.status === '1') {
                $("#applystatus").html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + response.msg + '</div>');
                $('#jobAppplyForm')[0].reset();
                return true;
            } else {
                $("#applystatus").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + response.msg + '</div>');
                return false;
            }
        }
    });
});



$(document).on('click', '#submitContact', function () {
    var formData = $("#submitContactFrm").serialize();
    $.ajax({
        url: base_url + 'backend/contact_us/submitContactFormFrontent',
        type: 'POST',
        data: formData,
        dataType: 'json',
        success: function (response) {
            if (response.status === '1') {
                $("#contacttatus_success").html(response.msg);
                $('#submitContactFrm')[0].reset();
                return true;
            } else {
                $("#contacttatus_error").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">X</button><strong>' + response.msg + '</div>');
                return false;
            }
        }
    });
});