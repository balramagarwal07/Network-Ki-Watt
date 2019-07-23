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
                          
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                          
                             <!-- START tours DATATABLE -->
                             <div class="panel panel-default">
                                    <div class="panel-heading">                                
                                        <h3 class="panel-title">All Stories</h3> 
                                                              
                                    </div>
                                    <div class="panel-body">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                <th style="max-width: 20px;"><input type="checkbox" name="" id=""/></th>
                                                <th>ID</th>    
													<th>Added Date</th>
                                                    <th style="max-width: 150px;">Story Title</th>
                                                    <th>User Name</th>
                                                    <th>User Phone</th>
													<th>User Email</th>
                                                    <th>Categories</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" name="" id=""/> </td>
                                                    <td>15</td>
													<td>23/10/2018</td>
                                                    <td>White Marble for floor</td>
                                                    <td>Balram Agarwal</td>
                                                    <td>09313484654</td>
													 <td>balramagarwal07@gmail.com</td>
													<td>Marbles, White Marble</td>
                                                    <td><span class="text-success">Approved</span></td>
                                                    <td><a href="#" target="_blank" data-toggle="tooltip" title="Change Status" class="btn btn-warning btn-rounded text-center"><i class="fa fa-retweet"></i> </a> 
													<a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> 
													<a href="#" target="_blank" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a> 
													</td>
                                                </tr>
                                               <tr>
                                                    <td><input type="checkbox" name="" id=""/> </td>
                                                    <td>15</td>
													<td>23/10/2018</td>
                                                    <td>White Marble for floor</td>
                                                    <td>Balram Agarwal</td>
                                                    <td>09313484654</td>
													 <td>balramagarwal07@gmail.com</td>
													<td>Marbles, White Marble</td>
                                                    <td><span class="text-warning">Pending</span></td>
                                                    <td><a href="#" target="_blank" data-toggle="tooltip" title="Change Status" class="btn btn-warning btn-rounded text-center"><i class="fa fa-retweet"></i> </a> 
													<a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> 
													<a href="#" target="_blank" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a> 
													</td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END tours DATATABLE -->

                        </div>
                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

<?php include 'footer.php' ;?>