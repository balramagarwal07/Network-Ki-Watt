<?php include('header.php'); ?> 
    <!--
        =====================
              End Header
        =====================
     -->

    <section id="page-title" class="page-title">
      <div class="bg-title">
        <div class="container">
          <div class="title">
            <h1>Submit Your Story</h1>
          </div><!-- End .title -->
          
        </div> <!-- End .conatainer -->
      </div>
    </section>
    <!--
        =====================
          End Page Title
        =====================
     -->
     <section id="content">
       <div class="container">
        
		  <div class="row">
                    <form action="#" method="POST" class="submit-story">
					<div class="col-md-12">
                       <p>All fields are compulsory. <b>Don't worry your phone/email will not be published on story</b></p>
                      </div>
					  
                      <div class="col-sm-6 col-md-3">
                        <input type="text" name="name" class="form-control"  id="name" placeholder="Name" required>
                      </div>
					   <div class="col-sm-6 col-md-3">
                        <input type="text" name="phone" class="form-control"  id="phone" placeholder="Phone" required>
                      </div>
                      <div class="col-sm-6 col-md-3">
                        <input type="email" name="email" class="form-control"  id="email" placeholder="Email" required>
                      </div>
					   <div class="col-sm-6 col-md-3">
                        <input type="text" name="city" class="form-control"  id="city" placeholder="Your City" required>
                      </div>
                      <div class="col-md-12">
                        <input type="text" name="storytitle" class="form-control"  id="storytitle" placeholder="Headline For Your Story" required>
                      </div>
					<div class="col-sm-6 col-md-3">
					 <label>Select Category:</label>
                       <select class="form-control">
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
					  <div class="col-sm-6 col-md-3">
					 <label>Select Service Providers (Optional):</label>
                       <select class="form-control">
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
					   <div class="col-sm-12 col-md-6">
					   <label>Add Tags To Your Story (Optional):</label>
                        <input type="text" name="tags" class="form-control"  id="tags" placeholder="Tags:  ex.- Network, Mobile, Wifi...">
                      </div>
					  <div class="col-sm-12 col-md-6">
					   <label>Story Image:</label>
                        <input type="file" name="storyimage" class="" id="storyimage">
                      </div>
                      <div class="col-md-12">
					   <label>Write Your Story Here (You can copy paste from your local files):</label>
                        <textarea name="comment" id="comment" class="summernote form-control" rows="8" placeholder="Message" required></textarea>
                      </div>
                      <div class="col-md-12">
                        <button type="submit" class="btn-black">Submit Story</button>
                      </div>
                    </form>
                  </div>
		
       </div> <!-- End .container -->
     </section>
     <!--
        =======================
          End Section Content
        =======================
     -->

  <?php include('footer.php'); ?>