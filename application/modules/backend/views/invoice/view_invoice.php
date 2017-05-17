<html>
<head>
<title>Pdf file</title>
</head>
<body>

<div class="logo" style="position: absolute;  float: left; right: 0; top: 0; margin: 0;">
<img style="height:150px;" src="<?php echo $unpaid;?>">
</div>

<div class="logo" style="float: left; width: 54%; margin-top:15px; margin-bottom: 0pt; ">
<img src="<?php echo $logo;?>">
</div>


<div class="address" style="text-align: right;">
    111 Great Neck Road<br/>
    Suite 215<br/>
    Great Neck, NY 11021<br/>   
</div>

<div class="" style="margin-top:30 opt; background-color:#EEE;">
    <div class="title" style="font-weight: bold; font-size: 150%;">Invoice #<?php echo $invoice_no; ?></div>
    Invoice Date: <?php echo $invoice_date;?><br/>
    Due Date: <?php echo $invoice_date;?><br/>
</div>

<div class="" style="margin-top:30 opt; ">
    <div class="" style="font-weight: bold; font-size: 150%;">Invoiced To</div>
    VORO NYC<br/>
    ATTN: <?php echo $agent_name; ?><br/>
    <?php echo $agent_details['address1'];?><br/>
    <?php echo $address;?> <br/>
    <?php echo $agent_details['country'];?><br/>
</div>
<br/>
<table border="1" cellPadding="9" cellspacing="0" >
    <tbody>
        <tr>
            <th style="width:150%">Description</th>
            <th>Total</th>
        </tr>
<?php 
$sub_total = 0;
if(isset($invoice_details)){
foreach ($invoice_details as $key => $value) {
    $product_detals = get_row_array('tbl_voro_store_products', array('id'=>$value['prod_id']));
    $total = $value["price"]*$value['prod_qty'];               
    $sub_total = $sub_total + $total;

    $sub_total_sum = number_format((float)$sub_total, 2, '.', '');

   ?><tr>
   <td><?php echo $value['prod_qty'].' x '.$product_detals["prod_name"];?></td>
   <td><?php echo number_format((float)$total, 2, '.', '');?> USD</td>

   </tr>
    <?php 
    }
}

 $credit = '0';
 $credit = number_format((float)$credit, 2, '.', '');           
 $total= $sub_total - $credit;
 $total = number_format((float)$total, 2, '.', '');

 ?>
        <tr>
            <td class="table-description" align="right">Sub Total</td>
            <td class="table-description"><?php echo $sub_total_sum;?>USD</td>
        </tr>

        <tr>
            <td class="table-description" align="right">Credit</td>
            <td class="table-description"><?php echo $credit;?>USD</td>
        </tr>

        <tr>
            <td class="table-description" align="right">Total</td>
            <td class="table-description"><?php echo $total;?>USD</td>
        </tr>
    </tbody>
</table>

<h3>Transactions</h3>


<table border="1" cellPadding="9" cellspacing="0" width="100%">
    <tbody>
        <tr>
            <th>Transaction Date</th>
            <th>Gateway</th>
            <th>Transaction ID</th>
            <th width="20%">Amount</th>
        </tr>
        <?php 
    if(isset($transaction_details)){
    foreach ($transaction_details as $key => $value) {
       ?>
       <tr>
       <td><?php echo $value["invoice_payment_date"];?></td>
       <td>VISA, MASTERCARD, DISCOVER</td>
       <td><?php echo $value["transaction_id"];?></td>
       <td><?php echo number_format($value['cart_total'],2);?></td>
       </tr>

    <?php }
        }
    else{
        ?>
        <tr>
            <td colspan="4" align="center">No Related Transactions Found</td>
        </tr>
   <?php  } ?>

        <tr>
            <td colspan="3" class="table-description" align="right">Total</td>
            <td class="table-description"><?php echo $sub_total_sum;?>USD</td>
        </tr>
    </tbody>
</table>
<br/>

<div class="center">
    PDF Generated on <?php echo $today_date;?>
</div>

</body>