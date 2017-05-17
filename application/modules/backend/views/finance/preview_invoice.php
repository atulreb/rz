<style>
    table {
    border-collapse: collapse;
}

table, td, th {
    //border: 1px solid black;
}
</style>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            

        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Invoice Details</h2>
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <section class="content invoice">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-xs-12 invoice-header">
                                    <h1>
                                        <i class="fa fa-globe"></i> Invoice.
                                        <small class="pull-right">Date: <?php echo date("m/d/Y",strtotime($invoice[0]['created_time'])) ?></small>
                                    </h1>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-2 invoice-col">
                                    From
                                    <address>
                                       <?php echo $invoice[0]['from_address']?>
                                    </address>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-2 invoice-col">
                                    To
                                    <address>
                                        <?php echo $invoice[0]['to_user_address']?>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-2 invoice-col">
                                    <b>Invoice <?php echo $invoice[0]['invoice_number'] ?></b>
                                    <br>
                                    <br>
                                   
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="col-xs-12 table">
                                    <table border="1" style="border-collapse: collapse" style="width:100%;" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Product</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                           <?php 
                                           $price = 0;
                                           $sr=1; foreach($invoice as $product){
                                               $price = $price + $product['ord_det_price'];
                                               ?>
                                            <tr>
                                                <td><?php echo $sr++;?></td>
                                                <td><?php echo $product['product_name'];?></td>
                                                <td><?php echo $product['ord_det_item_fk'];?></td>
                                                <td><?php echo $global['currency_symbol'].$product['amount'];?></td>
                                            </tr>
                                           <?php }?>
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
                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;"><?php echo $invoice[0]['notes'] ?>
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-xs-6">
                                    <!--<p class="lead">Amount Due 2/22/2014</p>-->
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td><?php echo $global['currency_symbol'].$invoice[0]['total_amount']?></td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td><?php echo $global['currency_symbol'].$invoice[0]['total_amount'] ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- this row will not appear when printing -->
<!--                            <div class="row no-print">
                                <div class="col-xs-12">
                                    <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                                    <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>
                                    <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button>
                                </div>
                            </div>-->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
