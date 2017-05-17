<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Expense Report</h3>
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
                        <h2>Expense Report</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <form method="get" action="<?php echo base_url() ?>finance/expense-report">
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="<?php if(isset($_GET['from_date']) && $_GET['from_date'] !='') echo $_GET['from_date']?>" name="from_date" id="single_cal3" placeholder="From Date"> 
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" value="<?php if(isset($_GET['to_date']) && $_GET['to_date'] !='') echo $_GET['to_date']?>" name="to_date" id="single_cal2" placeholder="To Date"> 
                                </div>
                                <div class="col-sm-2">
                                    <button  name="search" class="btn btn-success" placeholder="From Date" value="search"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </form>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <!--p class="text-muted font-13 m-b-30">
                                      KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
                                    </p-->

                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S. No.</th>
                                                <th>Expense</th>
                                                <th>Date</th>
                                                <th>Category</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>


                                        <tbody>

                                            <?php
                                            $i = 1;
                                            $total = 0;
                                            if (!empty($expense)) {
                                                foreach ($expense as $expense) {
                                                    $total = $total + $expense['amount'];
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $i; ?></td>
                                                        <td><?php echo $expense['expense']; ?></td>
                                                        <td><?php echo date('d F Y', strtotime($expense['date'])); ?></td>
                                                        <td><?php echo $expense['category']; ?></td>
                                                        <td><?php echo $global['currency_symbol'] . $expense['amount']; ?></td>

                                                    </tr>
                                                    <?php
                                                    $i++;
                                                }
                                                ?>
                                                <tr>
                                                    <td colspan="4" style="text-align:right"><b>Total : </b></td>
                                                    <td colspan="4"><b><?php echo $global['currency_symbol'] . $total ?></b></td>
                                                </tr>
                                                <?php
                                            } else {
                                                echo "<tr><td style=text-align:center colspan=5>No records found on seleted date</td></tr>";
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
