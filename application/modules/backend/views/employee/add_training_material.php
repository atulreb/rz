<style>
    .danger, .mandatory {
        color: #BD4247;
    }
    .alert{
        padding:8px 0px;
    }
    .multiselect-container input[type="checkbox"] {
        position:relative !important;
        margin-left:0px !important;
    }
    .multiselect-container {
        position: absolute;
        top: 49px;
        left: 15px;
        width: 94%;
        padding: 0px 10px;
        height: 200px;
        overflow-y: auto;
    }

    .multiselect-container li label {
        width:100%;
        display:block;
    }
    .multiselect-container li ul {
        list-style:none;
        padding-left:0px;
    }
    #property_categorychecklist li.popular-category {
        border: 0;
        padding: 0;
        color:#000;
        display: inherit;
    }
    #property_categorychecklist li.popular-category p span{
        position: relative;
        color:#000 !important;
        top: 0;
        left: 0;
    }
    span.multiselect-native-select {
        position: relative
    }
    span.multiselect-native-select select {
        border: 0!important;
        clip: rect(0 0 0 0)!important;
        height: 1px!important;
        margin: -1px -1px -1px -3px!important;
        overflow: hidden!important;
        padding: 0!important;
        position: absolute!important;
        width: 1px!important;
        left: 50%;
        top: 30px
    }
    .multiselect-container {
        position: absolute;
        list-style-type: none;
        margin: 0;
        padding: 0
    }
    .multiselect-container .input-group {
        margin: 5px
    }
    .multiselect-container>li {
        padding: 0
    }
    .multiselect-container>li>a.multiselect-all label {
        font-weight: 700
    }
    .multiselect-container>li.multiselect-group label {
        margin: 0;
        padding: 3px 20px 3px 20px;
        height: 100%;
        font-weight: 700
    }
    .multiselect-container>li.multiselect-group-clickable label {
        cursor: pointer
    }
    .multiselect-container>li>a {
        padding: 0
    }
    .multiselect-container>li>a>label {
        margin: 0;
        cursor: pointer;
        font-weight: 400;
        padding: 3px 0 3px 30px
    }
    .multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
        margin: 0
    }
    .multiselect-container>li>a>label>input[type=checkbox] {
        margin-bottom: 5px
    }
    
    .btn-group>.btn-group:nth-child(2)>.multiselect.btn {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px
    }
    .form-inline .multiselect-container label.checkbox, .form-inline .multiselect-container label.radio {
        padding: 3px 20px 3px 40px
    }
    .form-inline .multiselect-container li a label.checkbox input[type=checkbox], .form-inline .multiselect-container li a label.radio input[type=radio] {
        margin-left: -20px;
        margin-right: 0
    }

    .multiselect-native-select .multiselect {
        background: #fff;
        padding: 10px 35px 10px 15px;
        box-shadow: none;
        margin-bottom: 0px;
    }

    .multiselect-native-select .multiselect .btn-default:hover, .btn-default:focus, .btn-default.focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default {
        color: #333;
        background-color: #ffffff;
        border-color: #adadad;
        box-shadow: none;
    }

    .multiselect-native-select .multiselect .caret:after {
        content: "\f078";
        position: absolute;
        right: 7px;
        font-family: FontAwesome;
        top: 12px;
        width: 20px;
        height: 20px;
        background-repeat: no-repeat;
        font-size: 11px;
        color: #8A8F9A;
    }

    .multiselect-native-select .multiselect-container {
        position: absolute;
        top: 41px;
        padding: 10px 0px !important;
        left: 0px;
        width: 100%;
        padding: 0px 10px;
        height: auto;
        overflow-y: auto;
        max-height: 200px;
    }

    .multiselect-native-select .multiselect-container>li>a>label {
        margin: 0;
        cursor: pointer;
        font-weight: 400;
        padding: 3px 0 3px 15px;
    }
</style>
<script type="text/javascript" src="https://davidstutz.github.io/bootstrap-multiselect/dist/js/bootstrap-multiselect.js"></script>

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
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    <?php echo $msg; ?>
                </div>
            <?php } ?>
            <?php
            $error = $this->session->userdata('error');
            $this->session->unset_userdata('error');
            if (isset($error) != '') {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">x</button>
                    <h4><i class="icon fa fa-check"></i> Fail!</h4>
                    <?php print_r($error); ?>
                </div>
            <?php } ?>
            <div class="x_panel">
                <div class="x_title">
                    <h2>Assign training Material</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form  id="demo-form2"  class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate action="<?php echo base_url(); ?>backend/training/addTrainingMaterial"  enctype="multipart/form-data"  method="POST">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Employees<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="chkveg" name="emp_id[]" class="multiselect-ui form-control" multiple="multiple">
                                    
                                    <?php
                                    foreach ($employee as $employee) {
                                        echo "<option value='" . $employee['emp_id'] . "'>" . $employee['emp_name'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Document<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" class="form-control " name="document" required="required"  placeholder="First Name" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div> 


                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Document Name<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control " name="document_name" required="required"  placeholder="Document Name" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div> 

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button id="send" type="submit" class="btn btn-success">Upload</button>


                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of weather widget -->
</div>
<script type="text/javascript">
    jQuery(function () {

        jQuery('#chkveg').multiselect({
            includeSelectAllOption: true

        });

    });
</script>


<!-- /page content -->