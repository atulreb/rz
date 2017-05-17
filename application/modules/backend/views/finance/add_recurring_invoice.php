<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Invoice <small>Some examples to get you started</small></h3>
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
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Invoice Design <small>Sample user invoice design</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
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
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <section class="content invoice">
                            <form method="post" action="<?php echo base_url()?>backend/invoice/addRecurringInvoice">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-xs-12 invoice-header">
                                        <h1>
                                            <i class="fa fa-globe"></i> Invoice.
                                            <small class="pull-right">Date: <?php echo date("d/m/Y") ?></small>
                                        </h1>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->
                                <div class="row invoice-info">
                                     <div class="col-sm-4 invoice-col">
                                        User
                                        <select required name="user_id" class="form-control">
                                            <option value="">Select User</option>
                                            <?php foreach($users as $user){
                                              echo "<option value=".$user['user_id'].">".$user['fname']." ".$user['lname'] ."</option>";  
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 invoice-col">
                                        From
                                        <textarea class="form-control" name="from_address" rows="4"><?php echo $global['site_title']; ?>,                                                     <?php echo $global['address']; ?>
                                            <?php echo $global['city']; ?>,                                           <?php echo $global['state']; ?>                                       
                                        </textarea>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        To
                                        <textarea class="form-control" name="to_user_address" required rows="4"></textarea>
                                    </div>
                                    <!-- /.col -->
<!--                                    <div class="col-sm-4 invoice-col">
                                        <b>Invoice #007612</b>
                                        <br>
                                        <br>
                                        <b>Order ID:</b> 4F3S8J
                                        <br>
                                        <b>Payment Due:</b> 2/22/2014
                                        <br>
                                        <b>Account:</b> 968-34567
                                    </div>-->
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-xs-12 table">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Qty</th>
                                                    <th>Product</th>
                                                    <th>Description</th>
                                                    <th>Price</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody class="input_fields_wrap">
    <!--                                            <tr>
                                                    <td>1</td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="form-control"></td>
                                                    <td><input type="text" class="amount form-control"></td>
                                                    <td><input type="button" class="btn btn-success btn-xs add_field_button" value="Add More"></td>
                                                </tr>-->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <!-- accepted payments column -->
                                    <div class="col-xs-6">
                                        <p class="lead">Payment Methods:</p>
                                        <img src="<?php echo backend_asset_url()?>images/visa.png" alt="Visa">
                                        <img src="<?php echo backend_asset_url()?>images/mastercard.png" alt="Mastercard">
                                        <img src="<?php echo backend_asset_url()?>images/american-express.png" alt="American Express">
                                        <img src="<?php echo backend_asset_url()?>images/paypal.png" alt="Paypal">
                                        <textarea name="notes" class="form-control" placeholder="Enter any additional information"></textarea>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-xs-6">
                                        <p class="lead">Total Summary</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th style="width:50%">Subtotal:</th>
                                                        <td id=""><input type="text" readonly id="subtotal"></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Total:</th>
                                                        <td id=""><input type="text" readonly name="total_amount"  id="total"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-xs-12">
                                        <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                                        <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit</button>
                                        <!--button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button-->
                                    </div>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<script>
    $(document).ready(function () {
        var x = 1;
        var max_fields = 10; //maximum input boxes allowed
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        $(wrapper).html('<tr><td>' + x + '</td><td><input type="text" required="required" class="form-control" name="product_name[]"/></td>\n\
\n\
<td><input type="text"  class="form-control" name="desc[]"/></td>\n\
<td><input type="text" required="required" onkeyup="calval()" class="amount form-control" name="amount[]"/></td>\n\
<td><input type="button" class="btn btn-success btn-xs add_field_button" value="Add More"></td></tr>'); //add input box
        var add_button = $(".add_field_button"); //Add button ID


        //initlal text box count
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<tr><td>' + x + '</td><td><input type="text" required="required" class="form-control" name="product_name[]"/></td>\n\
\n\
<td><input type="text"  class="form-control" name="desc[]"/></td>\n\
<td><input type="text" required="required" onkeyup="calval()" class="amount form-control" name="amount[]"/></td>\n\
<td><a href="#" class="remove_field btn btn-danger btn-xs">Remove</a></td></tr>'); //add input box
            }
        });


        $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parents("tr").remove();
            x--;

            var r = $(this).parents("tr").find(".amount").val();
            var t = $("#subtotal").val() - parseInt(r);
            $("#subtotal").val(t);
            $("#total").val(t);

        })
    });

    function calval(val) {
        var subtot_val = $("#subtotal").val();
        alert(val);
        var st = parseInt(subtot_val) + parseInt(val);
        $("#total").val(st);
        $("#subtotal").val(st);

    }

    function calval() {
        var elms = $('input[class^="amount"]');

        elms.change(function () {
            var sum = 0;
            elms.each(function () {
                if ($(this).val() === '') {
                    sum += parseInt($(this).val('0'), 10);
                } else {
                    sum += parseInt($(this).val(), 10);
                }
            });

            $("#subtotal").val(sum);
            $("#total").val(sum);
        });
    }
</script>