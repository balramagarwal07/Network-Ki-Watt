
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->   
      
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
        <!-- END PLUGINS -->
        
        <!-- THIS PAGE PLUGINS -->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>                
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

        <script type="text/javascript" src="js/plugins/dropzone/dropzone.min.js"></script>
        <script type="text/javascript" src="js/plugins/fileinput/fileinput.min.js"></script>        
        <script type="text/javascript" src="js/plugins/filetree/jqueryFileTree.js"></script>
        
        <script type="text/javascript" src="js/plugins/summernote/summernote.js"></script>
        <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
        <!-- END THIS PAGE PLUGINS -->       
        
        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>     
        <script type="text/javascript" src="js/custom.js"></script>   
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->   
    
    <script>
					
					$(document).ready(function () {
    var counter = 0;

    $("#addstorydayrow").on("click", function () {
	counter++;
        var newRow = $("<div class='row' style='border:1px solid #d8d8d8'> <h4 style='padding:10px;'> Next Day </h4>");
        var cols = "";

        cols += '<div class="col-md-6"> <label>Enter Title</label><input type="text" class="form-control" name="refdayname[]"/></div>';
		
		 cols += '<div class="col-md-3"> <label>Stay In</label><input type="text" class="form-control" name="refstayname[]"/></div>';
		
		 cols += '<div class="col-md-3"> <label>Trip Timing</label><input type="text" class="form-control" name="reftriptime[]"/></div>';
		
		 cols += '<div class="col-md-12"> <label>Description</label><textarea class="form-control" rows="5" id=""></textarea></div>';
		
        cols += '<div class="col-md-12"><button type="button" class="ibtnDel btn btn-danger"><i class="fa fa-times"></i> Remove This Day</button></div></div>';
        newRow.append(cols);
        $(".story-day").append(newRow);
        counter++;
    });



    $(".story-day").on("click", ".ibtnDel", function (event) {
        $(this).closest(".row").remove();       
        counter -= 1
    });


});

	$(document).ready(function () {
    var counter = 0;

    $("#addaccomodationcolumn").on("click", function () {
	counter++;
        var newRow = $("<div class='col-sm-4 col-md-3 accomodation-item'>");
        var cols = "";
        cols += ' <input type="file" multiple id="" class="btn btn-primary"/><br/><input type="text" name="" placeholder="Accomodation Name" class="form-control"/></div>';
	
        cols += '<div class="col-md-12"><button type="button" class="ibtnDel btn btn-danger"><i class="fa fa-times"></i> Remove This Accomodation</button></div>';
        newRow.append(cols);
        $(".accomodation-day").append(newRow);
        counter++;
    });



    $(".accomodation-day").on("click", ".ibtnDel", function (event) {
        $(this).closest(".accomodation-item").remove();       
        counter -= 1
    });


});


    </script>  
        
        <!---coupon code-add products-->
<script language="javascript">
  $("#edit-supplier-profile").click(function(){
    $("#supplier-profile-edit").show();
}); 

</script>
        <!---//coupon code-add products-->
<script>

</script>

    </body>
</html>