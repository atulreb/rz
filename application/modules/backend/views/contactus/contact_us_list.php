<!-- page content -->
<div class="right_col" role="main">

    <br />
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
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>User Contacted List</h2>
                
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form name="frm_contact_us"  id="frm_contact_us" action="<?php echo base_url(); ?>admin/contact-us" method="post">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" >
                        <thead>
                            <tr>
                                <th class="workcap">
                        <center>Select<br>
                            <input type="checkbox" name="check_all" id="check_all"  class="select_all_button_class" value="select all" />
                        </center>
                        </th>
                        <th>Sender Name</th>
                        <th>Sender Email</th>
                        <th>Service</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cnt = 0;
                            foreach ($arr_contact_us as $contact) {
                                $cnt++;
                                ?>
                                <tr>
                                    <td>
                            <center>
                                <input name="checkbox[]" class="case" type="checkbox" id="checkbox[]" value="<?php echo $contact['contact_id']; ?>" />        
                            </center>
                            </td>
                            <td><?php echo ucfirst($contact['contact_name']); ?></td>
                            <td><?php echo $contact['contact_email']; ?></td>
                            <td><?php echo $contact['service_category']; ?></td>
                            <td><?php echo date($global['date_format'], strtotime($contact['contact_created_date'])); ?></td>
                            <td><?php
                                if ($contact['contact_reply_status'] == '0') {
                                    echo 'Not replied';
                                } else {
                                    echo 'Replied';
                                }
                                ?></td>
                            <td>
                                <a title="View" class="btn btn-info btn-xs" href="<?php echo base_url(); ?>admin/contact-us/view/<?php echo base64_encode($contact['contact_id']); ?>">
                                    <i class="fa fa-eye"></i> View
                                </a> 
                            </td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php if ($cnt > 0) { ?>
                        <input type="submit" onclick="return confirm('Are you sure to delete?')" id="btn_delete_all" name="btn_delete_all" class="btn btn-danger" onClick="return deleteConfirm();"  value=" Delete Selected">
                    <?php } ?>
                </form>


            </div>
        </div>
    </div>
</div>
<!-- /page content -->