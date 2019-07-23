<?php include 'header.php' ;?>
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->      
                     <!-- SIGN OUT -->
                     <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    <!-- END SIGN OUT -->              
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                          
                 <!-- START BREADCRUMB -->
                 <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Add New Story</li>
                </ul>
                <!-- END BREADCRUMB -->
              
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal">
                                
                                   
                            <div class="panel panel-default"> 

                                    <div class="panel-body">
									
											<div class="form-group">
                                                    <label class="col-md-2 col-xs-12 control-label">Story Headline</label>
                                                    <div class="col-md-6 col-xs-12">                                            
                                                            <input type="text" class="form-control" required/>
                                                    </div>
                                                </div>
												
												
											    <div class="form-group">
                                                    <div class="col-md-2 col-xs-12 control-label">
													<label class="col-md-12 col-xs-12">Industry</label>	
													</div>
                                                   
												   
													 <div class="col-md-3 col-xs-12"> 
													 <label class="col-md-12 col-xs-12">Select Category:</label>
												   <select class="form-control select">
												   <option>Telecom Industry</option>
												   <option>Mobile</option>
												   <option>Broadband</option>
												   <option>Wifi</option>
												   <option>Network</option>
												   <option>Network Towers</option>
												   <option>Marketing Network</option>
												   <option>Others</option>
												   <option>Personal</option>
												   </select>
                                                    </div>
													
                                                    <div class="col-md-3 col-xs-12">   
													<label class="col-md-12 col-xs-12">Select Service Providers (Optional):</label>	                                                                              
                                                        <select class="form-control select">
															<option>Airtel</option>
														   <option>Idea</option>
														   <option>Vodafone</option>
														   <option>Reliance Jio</option>
														   <option>BSNL</option>
														   <option>ACT</option>
														   <option>Nextra Broadband</option>
														   <option>Others</option>
                                                        </select>
                                                    </div>

												
                                                </div>
                                            
											
											
												
												<div class="form-group">
                                                    <label class="col-md-2 col-xs-12 control-label">Story Tags</label>
                                                    <div class="col-md-6 col-xs-12">                                            
                                                            <input type="text" class="form-control"/>
                                                    </div>
                                                </div>
												
												 <div class="form-group">
                                                        <label class="col-md-2 col-xs-12 control-label"> Highlights Image</label>
                                                        <div class="col-md-6 col-xs-12">                                            
                                                            <input type="file" class="file" data-preview-file-type="any"/>
                                                        </div>
                                                    </div>
													
													
                                                <div class="form-group">
                                                        <label class="col-md-2 col-xs-12 control-label"> Description</label>
                                                        <div class="col-md-9 col-xs-12">                                            
                                                           <textarea class="summernote">
                                                    </textarea>
                                                        </div>
                                                    </div>
                                                   

													
                                    </div>
                                  
                            
                                    <div class="panel-footer">                                                                        
                                        <button class="btn btn-info pull-right">Publish <span class="fa fa-save"></span></button>
                                    </div>
                                </div>                                
                            
                        
                            </form>
                            
                        </div>

                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->   

            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

<?php include 'footer.php' ;?>