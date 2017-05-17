<!--Banner-Start-->
<header class="head-bottom-border-style">
    <div class="header-content">
        <div class="header-content-inner innerpage-heading text-left">
            <h2 id="homeHeading">Order Details</h2>
            <hr>
            <p>Your order has been placed successfully.</p>
            <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Enter Site</a>-->

        </div>
    </div>
</header>

<section id="Aboutus_Img_Grid">
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th class="center">Price</th>
                    <th class="center">QTY</th>
                    <th class="center">Total</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach($cart['shopping_cart']['items'] as $cart_item) {
                    ?>
                    <tr>
                        <td><?php echo $cart_item['id']; ?></td>
                        <td><?php echo $cart_item['name']; ?></td>
                        <td class="center"> $<?php echo number_format($cart_item['price'],2); ?></td>
                        <td class="center"><?php echo $cart_item['qty']; ?></td>
                        <td class="center"> $<?php echo round($cart_item['qty'] * $cart_item['price'],2); ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="row clearfix">
                <div class="col-md-4 column">
                    <p><strong>Billing Information</strong></p>
                    <p>
                        <?php
                        echo $cart['first_name'] . ' ' . $cart['last_name'] . '<br />' .
                            $cart['email'] . '<br />'.
                            $cart['phone_number'] . '<br />';
                        ?>
                    </p>
                </div>
                <div class="col-md-4 column">
                    <p><strong>Shipping Information</strong></p>
                    <p>
                        <?php
                        echo $cart['shipping_name'] . '<br />' .
                            $cart['shipping_street'] . '<br />' .
                            $cart['shipping_city'] . ', ' . $cart['shipping_state'] . '  ' . $cart['shipping_zip'] . '<br />' .
                            $cart['shipping_country_name'];
                        ?>
                    </p>
                </div>
                <div class="col-md-4 column">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td><strong> Subtotal</strong></td>
                            <td> $<?php echo number_format($cart['shopping_cart']['subtotal'],2); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Shipping</strong></td>
                            <td>$<?php echo number_format($cart['shopping_cart']['shipping'],2); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Handling</strong></td>
                            <td>$<?php echo number_format($cart['shopping_cart']['handling'],2); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Tax</strong></td>
                            <td>$<?php echo number_format($cart['shopping_cart']['tax'],2); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Grand Total</strong></td>
                            <td>$<?php echo number_format($cart['shopping_cart']['grand_total'],2); ?></td>
                        </tr>
                        <tr>
                            <td class="center" colspan="2">
                                <a class="btn btn-primary btn-block" href="<?php echo site_url('frontend/express_checkout/DoExpressCheckoutPayment'); ?>">Complete Order</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</section>


<div class="hr_Line"><hr></div> 
