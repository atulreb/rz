<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Services</h3>
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
                    <h2>Upgrade To Membership</h2>
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

                          <div class="pricing_features">
                                  <ul class="list-unstyled text-left">
								  <?php foreach($services as $serv)
									{   ?>
                                    <li><i class="fa fa-check text-success"></i><strong> <?php echo $serv->service;?></strong> ( Start Date  <?php echo date('d F Y',strtotime($serv->sdate));?> End Date <?php echo date('d F Y',strtotime($serv->edate));?>) </li>
									
									<?php } ?>	
                                    
                                  </ul>
								  <span>
									<input type="hidden" id='price' value='150'>
									<input type="hidden" id='name' value='Membership'>
									<input type="hidden" id='product_id' value='1'>
									<input type="hidden" name="qty" id='qty' value="1">
								  <a class="btn btn-primary" id='add_to_cart' href="javascript:;">Pay Now</a> </span>
                                </div>
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
