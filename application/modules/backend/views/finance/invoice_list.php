<!-- page content -->
<div class="right_col" role="main">
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

    <?php
    $error = $this->session->userdata('error');
    $this->session->unset_userdata('error');
    if (isset($error) != '') {
        ?>
        <div class="alert alert-success alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            <h4><i class="icon fa fa-check"></i> Success!</h4>
            <?php echo $error; ?>
        </div>
    <?php } ?>
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>All Invoices</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">




            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Invoice List</h2>
                        <!--ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Settings 1</a>
                              </li>
                              <li><a href="#">Settings 2</a>
                              </li>
                            </ul>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                        </ul-->
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <!--p class="text-muted font-13 m-b-30">
                                      KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
                                    </p-->

                                    <table id="datatable-keytable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Invoice No</th>
                                                <th>Due Amount</th>
                                                <th>Invoice Date</th>
                                                <th>Status</th>
                                                <th>Username</th>
                                                <th>Options</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            <?php
                                            $i = 1;
                                            foreach ($invices as $invices) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $invices['invoice_number']; ?></td>
                                                    <td><?php echo $global['currency_symbol'].$invices['total_amount']; ?></td>
                                                    <td><?php echo date('d F Y', strtotime($invices['created_time'])); ?></td>
                                                    <td>
                                        <?php if($invices['status'] == '1'){?>
                                        <button class="btn btn-success btn-xs">Paid</button>
                                        <?php } else {
                                            ?>
                                        <button class="btn btn-danger btn-xs">Unpaid</button>
                                        <?php } ?>
                                    </td>
                                                    <td><?php echo $invices['username']; ?></td>
                                                    <td><li style="list-style:none" role="presentation" class="dropdown">
                                                <a id="drop5" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                                    Options
                                                    <span class="caret"></span>
                                                </a>
                                                <ul id="menu2" class="dropdown-menu animated fadeInDown" role="menu" aria-labelledby="drop5">
                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1" href="<?php echo base_url()."finance/preview_invoice/".$invices['id']?>">Preview Invoice</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1" href="<?php echo base_url()."finance/send-invoice-in-mail/".$invices['id']?>">Email Invoice</a>
                                                    </li>
                                                    <li role="presentation">
                                                        <a role="menuitem" tabindex="-1" href="<?php echo base_url()."finance/pdfinvoice/".$invices['id']?>">pdf</a>
                                                    </li>
                                                </ul>
                                            </li></td
                                            </tr>
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
</div>
<!-- /page content -->
