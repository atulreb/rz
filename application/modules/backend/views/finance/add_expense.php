<!-- page content -->
<div class="right_col" role="main"> <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Add Expense</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form  id="demo-form2"  class="form-horizontal form-label-left" novalidate action="<?php echo base_url(); ?>backend/expense/addExpense"  enctype="multipart/form-data"  method="POST">

                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Expense <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control col-md-7 col-xs-12"name="expense"  required="required"  id="name">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">date<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" required="required" name="date" id="single_cal3" placeholder="Select date" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Amount <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" required="required" name="amount"  placeholder="Enter Amount" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Category<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="category" required="required"  class="form-control input-md" autocomplete="off">
                                    <option value="">Select</option>
                                    <option value="Fixed Expense">Fixed Expense</option>
                                    <option value="Flexible Expense">Flexible Expense</option>
                                    <option value="Discretionary Expense">Discretionary Expense</option>
                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Reference<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" name="reference" required="required" placeholder="Enter reference" aria-describedby="inputSuccess2Status3">
                            </div>
                        </div>





                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button id="send" type="submit" class="btn btn-success">Submit</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of weather widget -->
</div>
</div>
</div>
</div>


<!-- /page content -->