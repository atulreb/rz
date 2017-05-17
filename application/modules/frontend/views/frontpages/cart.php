<!--Banner-Start-->
<header class="head-bottom-border-style">
    <div class="header-content">
        <div class="header-content-inner innerpage-heading text-left">
            <h2 id="homeHeading">Checkout</h2>
            <hr>
            <p>RazorClean, Inc. A Company Built On Integrity, Quality and Trust.</p>
            <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Enter Site</a>-->

        </div>
    </div>
</header>
<!--Banner-End-->





<section id="checkout">
    <div class="container">
        <div class="row">




            <div class="bill_payment col-md-8 col-sm-12">

                <h3>CART DETAILS</h3>
                <span id="successmsg"></span>
                <div class="Bg_clr_white">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>  </th>
                                <th>  </th>
                                <th>  </th>
                                <th>  </th>
                            </tr>

                        </thead>

                        <tbody>
                            <?php
                            if (!empty($cart_data)) {
                                $total = 0;
                                foreach ($cart_data as $cart) {
                                    $price = $cart['price'] * $cart['qty'];
                                    $total = $price + $total;
                                    ?>
                                   <tr>
                                   <td><?php echo $cart['name']?> </td>
                                    <td><input type=number name='qty' onkeyup='updateCart(this.value,"<?php echo $cart["rowid"];?>")' value='<?php echo $cart["qty"]?>' ></td>
                                    <td class = 'right_align'>$<?php echo $price ?></td>
                                   <td><input type=button name=remove onclick='removeItem("<?php echo $cart["rowid"];?>")' value='Remove'></td>
                                    </tr>
                                <?php }
                                ?><tr>

                                <td>TOTAL</td>
                                <td></td>

                                <td class='right_align'>$<?php echo $this->cart->total()?></td>

                            </tr>
                                <?php 
                            } else {
                                echo "<tr><td colspan=4><h4>Your cart is empty</h4></td></tr>";
                            }
                            ?>





                        </tbody>

                    </table>





                </div>

            </div>
            <div class="bill_payment col-md-4 col-sm-12">

                <h3>PRICE DETAILS</h3>

                <div class="Bg_clr_white">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>  </th>
                                <th>  </th>
                                <th> Total </th>

                            </tr>

                        </thead>

                        <tbody>
                            <?php
                            $total = 0;
                            $price = 0;
                            foreach ($cart_data as $cart) {
                                $price = $cart['price'] * $cart['qty'];
                                echo '<tr><td>' . $cart['name'] . '</td>
                                <td class = "right_align">$' . $price . '</td></tr>';
                            }
                            ?>

                            <tr>
                                <td class="">Coupon?</td>
                                <td><input type="text" size="12" id="couponcode">
                                    <span id="msg"></span>
                                </td>
                                <td><input type="button" value="Valid!" id="validCoupon" /></td>


                            </tr>
                            <tr>

                                <td>Amount Payable</td>
                                <td class="right_align">$<span id="totamt"><?php echo $this->cart->total(); ?></span></td>

                            </tr>


                        </tbody>

                    </table>





                </div>


                <!--/panel-group-->

                <div class="btn_checkout">
                    <?php if(!empty($this->cart->contents())){?>
                    <button onclick="window.location = '<?php echo base_url() ?>checkout'">CHECKOUT</button>
                    <?php } else { echo "<button readonly>CHECKOUT</button>";}?>
                </div>

            </div>


        </div>
    </div>
</section>
<div class="hr_Line"><hr></div> 