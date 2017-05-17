<!--Banner-Start-->
<header class="head-bottom-border-style">
    <div class="header-content">
        <div class="header-content-inner innerpage-heading text-left">
            <h2 id="homeHeading">Checkout</h2>
            <hr>
            <p>Razor Clean, Inc. A Company Built On Integrity, Quality and Trust.</p>
            <!--<a href="#about" class="btn btn-primary btn-xl page-scroll">Enter Site</a>-->

        </div>
    </div>
</header>
<!--Banner-End-->





<section id="checkout">
    <div class="container">
        <div class="row">

            <div class="billing_info col-md-6 col-sm-12">

                <h3>BILLING DETAILS</h3>

                <form>
                    <div class=" col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" id="firstname" placeholder="Your First name">
                        </div>


                    </div>
                    <div class=" col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" id="lastname" placeholder="Your last name">
                        </div>

                    </div>
                    <div class=" col-md-12">

                        <div class="form-group">
                            <label for="companyname">Company Name</label>
                            <input type="text" class="form-control" id="companyname" placeholder="Your Company name">
                        </div>

                    </div>

                    <div class=" col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Your email address">
                        </div>


                    </div>
                    <div class=" col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="phone_no">Phone No.</label>
                            <input type="text" class="form-control" id="phone_no" placeholder="Your phone number">
                        </div>

                    </div>


                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Country</label>
                            <select>
                                <option>Indian</option>
                                <option>USA</option>
                                <option>AUSTRALIA</option>
                                <option>CHINA</option>
                                <option>RUSSIA</option>
                                <option>AFRICA</option>
                            </select>

                        </div>

                    </div>



                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Your current address"><br>
                            <input type="text" class="form-control" id="address" placeholder="Your permanent address">

                        </div>

                    </div>


                    <div class=" col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state" placeholder="Your state">
                        </div>


                    </div>
                    <div class=" col-md-6 col-sm-12">

                        <div class="form-group">
                            <label for="zipcode">Zip-Code</label>
                            <input type="text" class="form-control" id="zipcode" placeholder="Your zip code">
                        </div>

                    </div>



                </form>


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
                           foreach($cart_data as $cart){
                               $total = $total + $cart['price'];
                               echo '<tr><td>'.$cart['name'].'</td>
                                <td class="right_align">$'.$cart['price'].'</td></tr>';
                           }
                           ?>


                            <tr>

                                <td>TOTAL</td>
                                <td class="right_align">$<?php echo $total;?></td>

                            </tr>


                        </tbody>

                    </table>





                </div>

                <div class="panel-group" id="faqAccordion">
                    <div class="panel panel-default">
                        <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                            <h4 class="panel-title">
                                <a href="javascript:;" class="ing"> <label class="radio"><input id="radio1" type="radio" name="radios" checked><span>DIRECT BANK TRANSFER</span></label></a>
                            </h4>

                        </div>
                        <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">


                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                            <h4 class="panel-title">
                                <a href="javascript:;" class="ing"> <label class="radio"><input id="radio1" type="radio" name="radios"><span>CHECK PAYMENTS</span></label></a>
                            </h4>

                        </div>
                        <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">


                                <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default ">
                        <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                            <h4 class="panel-title">
                                <a href="javascript:;" class="ing"> 	 <label class="radio"><input id="radio1" type="radio" name="radios"><span>CASH ON DELIVERY</span></label></a>
                            </h4>

                        </div>
                        <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                            <div class="panel-body">


                                <p>Pay with cash upon delivery.</p>
                            </div>
                        </div>
                    </div>


                </div>
                <!--/panel-group-->

                <div class="btn_checkout">
                    <button>PLACE ORDER</button>

                </div>

            </div>


        </div>
    </div>
</section>

















<div class="hr_Line"><hr></div> 