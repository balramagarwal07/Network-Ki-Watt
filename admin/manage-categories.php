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
                        <div class="col-md-6">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Add New Category</h3>
                                </div>
                                <div class="panel-body">
                                        <form class="form-horizontal">

                                                <div class="form-group">
                                                     <label class="col-md-4 col-xs-12 control-label">Category/Industry Name</label>
                                                                    <div class="col-md-6 col-xs-12">                                                                                
                                                                            <input type="text" class="form-control" placeholder="Enter Category Name"/>    
                                                                    </div>
                                                   </div>
                                                   <div class="form-group">
                                                        <div class="col-md-12 col-xs-12">  
                                                        <p class="text-center"> <input type="submit" class="btn btn-info" value="Save"/> </p>
                                                       </div>
                                                </div>
                                        </form>                
                                    </div>
                            </div>


                        </div>

                        <div class="col-md-6">

                             <!-- START COUNTRY DATATABLE -->
                             <div class="panel panel-default">
                                    <div class="panel-heading">                                
                                        <h3 class="panel-title">All Categories/Industries</h3>                         
                                    </div>
                                    <div class="panel-body">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>Category/Industry Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
													<tr>
													<td>Marbles</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
                                                    <td>Clothes</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
													<td>White</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
                                                    <td>grey</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
													 <td>Red</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
													 <td>Jeans</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END Country DATATABLE -->

                            </div>

                    </div>
                
                    <div class="row">
                        <div class="col-md-6">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Add New Providers</h3>
                                </div>
                                <div class="panel-body">
                                        <form class="form-horizontal">

										 <div class="form-group">
                                     <label class="col-md-4 col-xs-12 control-label">Select Parent Category/Industry</label>
                                                    <div class="col-md-6 col-xs-12">                                                                                
                                                        <select class="form-control select" data-live-search="true">
															<option selected>Maruti</option>
                                                            <option>Ford</option>
                                                            <option>Honda</option>
                                                            <option>Hyundai</option>
                                                            <option>Mercedez</option>
                                                            <option>BMW</option>
                                                            <option>AUDI</option>
                                                        </select>
                                                    </div>
                                   </div>
								   
                                                <div class="form-group">
                                                     <label class="col-md-4 col-xs-12 control-label">Providers Name</label>
                                                                    <div class="col-md-6 col-xs-12">                                                                                
                                                                            <input type="text" class="form-control" placeholder="Enter Category Name"/>    
                                                                    </div>
                                                   </div>
                                                   <div class="form-group">
                                                        <div class="col-md-12 col-xs-12">  
                                                        <p class="text-center"> <input type="submit" class="btn btn-info" value="Save"/> </p>
                                                       </div>
                                                </div>
                                        </form>                
                                    </div>
                            </div>


                        </div>

                        <div class="col-md-6">

                             <!-- START COUNTRY DATATABLE -->
                             <div class="panel panel-default">
                                    <div class="panel-heading">                                
                                        <h3 class="panel-title">All Service Providers</h3>                         
                                    </div>
                                    <div class="panel-body">
                                        <table class="table datatable">
                                            <thead>
                                                <tr>
                                                    <th>Providers Name</th>
													<th>Parent Category</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
													<tr>
													<td>Marbles</td>
                                                    <td>----</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
                                                    <td>Clothes</td>
                                                    <td>----</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
													<td>White</td>
                                                    <td>Marble</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
                                                    <td>grey</td>
                                                    <td>Marble</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
													 <td>Red</td>
                                                    <td>Marble</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                                <tr>
													 <td>Jeans</td>
                                                    <td>Clothes</td>
                                                    <td><a href="#" data-toggle="tooltip" title="Edit" class="btn btn-info btn-rounded text-center"><i class="fa fa-edit"></i> </a>  <a href="#" data-toggle="tooltip" title="Delete" class="btn btn-danger btn-rounded text-center"><i class="fa fa-trash-o"></i> </a> </td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END Country DATATABLE -->

                            </div>

                    </div>
                
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

<?php include 'footer.php' ;?>