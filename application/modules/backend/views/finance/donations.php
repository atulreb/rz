<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Donations</h3>
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
                        <h2>Donations List</h2>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Message</th>
                                                <th>Amount</th>
                                                <th>Payment Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            <?php
                                            $i = 1;
                                            foreach ($donations as $donations) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $donations['name']; ?></td>
                                                    <td><?php echo $donations['email']; ?></td>
                                                    <td><?php echo $donations['phone']; ?></td>
                                                    <td><?php echo $donations['message']; ?></td>
                                                    <td><?php echo $global['currency_symbol'].$donations['amount']; ?></td>
                                                    <td><?php echo date('d F Y H:i A', strtotime($donations['payment_date'])); ?></td>
                                                    <td><?php
                                                        if ($donations['status'] == 1) {
                                                            echo "<button class='btn btn-success btn-xs'>Paid</button>";
                                                        } else {
                                                            echo "<button class='btn btn-danger btn-xs'>Unpaid</button>";
                                                        }
                                                        ?></td>
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
