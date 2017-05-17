<style>
    .danger, .mandatory {
        color: #BD4247;
    }
    .alert{
        padding:8px 0px;
    }
</style> 

<!-- page content -->
<div class="right_col" role="main"> <!-- top tiles -->
     
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            
         <?php
    $msg = $this->session->userdata('msg');
    $this->session->unset_userdata('msg');
    if (isset($msg) != '') {
        ?>
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            <?php echo $msg; ?>
        </div>
    <?php } ?>
            
            <div class="x_panel">
                <div class="x_title">
                    <h2>Upload Document</h2>

                    <div class="clearfix"></div>
                   
                </div>
                <div class="x_content">
                    <br>
                     <div class="frmerror"></div>
                    <form  id="demo-form2"  class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>backend/employee/uploadEmployeeDocument"  enctype="multipart/form-data"  method="POST">

                        <div class=" form-group">
                            
                            <div class="item col-md-4 col-sm-4 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12"name="doc_name[]" placeholder="Enter Document Name" required="required"  id="name">
                            </div>
                            <div class="item col-md-4 col-sm-4 col-xs-12">
                                <input type="file" class="form-control col-md-7 col-xs-12 fileu"name="doc_file[]"  required="required"  id="name">
                            </div>
                             <a href="javascript:void(0);" class="add_button btn btn-success btn-xs" title="Add field">Add More</a>
                        </div>
                        <div class="field_wrapper"></div>
                       
                        
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button id="send" type="submit" class="btn btn-success">Submit</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of weather widget -->
</div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="form-group"><div class="item col-md-4 col-sm-4 col-xs-12"><input type="text" placeholder="Enter Document Name" class="form-control col-md-7 col-xs-12"name="doc_name[]"  required="required"  id="name"></div><div class="item col-md-4 col-sm-4 col-xs-12"><input type="file" class="fileu form-control col-md-7 col-xs-12" name="doc_file[]"  required="required"  id="name"></div><a href="javascript:void(0);" class="remove_button btn btn-danger btn-xs" title="Add field">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

$(".fileu").change(function () {
    
                // Get uploaded file extension
                var extension = $(this).val().split('.').pop().toLowerCase();
                // Create array with the files extensions that we wish to upload
                var validFileExtensions = ['jpg', 'jpeg', 'gif', 'png','pdf','doc','docx','odt'];
         //Check file extension in the array.if -1 that means the file extension is not in the list. 
                if ($.inArray(extension, validFileExtensions) == -1) {
                   $(".frmerror").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">X</button><strong>Sorry!! Upload only jpg, jpeg, gif, png file</div>');
                    // Clear fileuload control selected file
                    $(this).replaceWith($(this).val('').clone(true));
                    return false;
                }
                else {
                    // Check and restrict the file size to 32 KB.
                    if ($(this).get(0).files[0].size > (25000000)) {
                       $(".frmerror").html('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert">X</button><strong>Sorry!! Max allowed file size is 1MB</div>');
                     // Clear fileuload control selected file
                        $(this).replaceWith($(this).val('').clone(true));
                        //Disable Submit Button
                        return false;
                    }
                    else {return true;
                    }
                }
            });
</script>

<!-- /page content -->