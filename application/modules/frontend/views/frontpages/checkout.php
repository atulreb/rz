
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
        <form novalidate method="POST" id="checkoutfrm" action="<?php echo base_url() ?>frontend/Cart/placeOrder">
            <div class="row">

                <div class="billing_info col-md-6 col-sm-12">

                    <h3>BILLING DETAILS</h3>


                    <div class=" col-md-6 col-sm-12">

                        <div class="item form-group">
                            <label for="firstname">First Name *</label>
                            <input type="text" required="required" class="form-control" id="firstname" name="first_name" placeholder="Your First name">
                        </div>


                    </div>
                    <div class=" col-md-6 col-sm-12">

                        <div class="item form-group">
                            <label for="lastname">Last Name *</label>
                            <input type="text"  required="required" class="form-control" name="last_name" id="lastname" placeholder="Your last name">
                        </div>

                    </div>

                    <div class=" col-md-6 col-sm-12">

                        <div class="item form-group">
                            <label for="email">Email *</label>
                            <input type="email" required="required" class="form-control" name="email" id="email" placeholder="Your email address">
                        </div>


                    </div>
                    <div class=" col-md-6 col-sm-12">

                        <div class="item form-group">
                            <label for="phone_no">Phone No. *</label>
                            <input type="text" required="required" name="phone" class="form-control" id="phone_no" placeholder="Your phone number">
                        </div>

                    </div>


                    <div class="col-md-12">

                        <div class="item form-group">
                            <label for="exampleInputEmail1">Country *</label>
                            <select required="required" class="span6 " name="country" onchange="selectState(this.options[this.selectedIndex].value)">
                                <option value="">Select country</option>
                                <?php
                                foreach ($list as $listElement) {
                                    ?>
                                    <option value="<?php echo $listElement->id ?>"><?php echo $listElement->name ?></option>
                                    <?php
                                }
                                ?>
                            </select>

                        </div>

                    </div>

                    <div class="col-md-12">

                        <div class="item form-group">
                            <label for="exampleInputEmail1">State *</label>
                            <select required="required" name="state" id="state_dropdown" class="span6" onchange="selectCity(this.options[this.selectedIndex].value)">
                                <option value="">Select state</option>
                            </select>

                        </div>

                    </div>
                    <div class="col-md-12">

                        <div class="item form-group">
                            <label for="exampleInputEmail1">City *</label>
                            <select required="required" name="city" class="span6" id="city_dropdown">
                                <option value="">Select City</option>
                            </select>

                        </div>

                    </div>



                    <div class="col-md-12">

                        <div class="item form-group">
                            <label for="address">Address *</label>
                            <input required="required" type="text" class="form-control" name="address" id="address" placeholder="Your current address"><br>
                            <!--<input type="text" class="form-control" id="address" placeholder="Your permanent address">-->

                        </div>

                    </div>
                    <div class=" col-md-6 col-sm-12">

                        <div class="item form-group">
                            <label for="zipcode">Zip-Code *</label>
                            <input required="required" type="text" name="zipcode" class="form-control" id="zipcode" placeholder="Your zip code">
                        </div>

                    </div>






                </div>


                <div class="bill_payment col-md-6 col-sm-12">

                    <h3>YOUR ORDER</h3>

                    <div class="Bg_clr_white">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Products </th>
                                    <th> Total </th>

                                </tr>

                            </thead>

                            <tbody>
                                <?php
                                $total = 0;
                                foreach ($cart_data as $cart) {
                                    $total = $total + $cart['price'];
                                    echo '<tr><td>' . $cart['name'] . '</td>
                                <td class="right_align">$' . $cart['price'] . '</td></tr>';
                                }
                                ?>


                                <tr>

                                    <td>TOTAL</td>
                                    <td class="right_align">$<?php echo $total; ?></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="item form-group">                            
                            <input id="radio1" required="required" type="radio" name="payment_option" value="pay_now">
                            <label for="exampleInputEmail1">PAY NOW</label>

                        </div>
                    <div class="item form-group">                            
                            <input id="radio1" required="required" type="radio" name="payment_option" value="cod" checked>
                            <label for="exampleInputEmail1">CASH ON DELIVERY</label>
                        </div>

                    
                    <!--/panel-group-->

                    <div class="btn_checkout">
                        <?php if(!empty($this->cart->contents())){?>
                            <button id="checkoutbtn" type="submit" name="place_order">PLACE ORDER</button>
                        <?php
                        } else {
                            echo "<button type='button' readonly>PLACE ORDER</button>";
                        }
                        ?>
                    </div>

                </div>



            </div>
        </form>
    </div>
</section>

















<div class="hr_Line"><hr></div> 
<script type="text/javascript">
    function selectState(country_id) {
        if (country_id != "-1") {
            loadData('state', country_id);
            $("#city_dropdown").html("<option value='-1'>Select city</option>");
        } else {
            $("#state_dropdown").html("<option value='-1'>Select state</option>");
            $("#city_dropdown").html("<option value='-1'>Select city</option>");
        }
    }
    function selectCity(state_id) {
        if (state_id != "-1") {
            loadData('city', state_id);
        } else {
            $("#city_dropdown").html("<option value='-1'>Select city</option>");
        }
    }
    function loadData(loadType, loadId) {
        var dataString = 'loadType=' + loadType + '&loadId=' + loadId;
        $("#" + loadType + "_loader").show();
        $("#" + loadType + "_loader").fadeIn(400).html('Loading ' + loadType + '...');
        $.ajax({
            type: "POST",
            url: "<?php echo base_url() ?>frontend/location/loadData",
            data: dataString,
            cache: false,
            success: function (result) {
                $("#" + loadType + "_loader").hide();
                $("#" + loadType + "_dropdown").html("<option value='-1'>Select " + loadType + "</option>");
                $("#" + loadType + "_dropdown").append(result);
            }
        });
    }

</script>