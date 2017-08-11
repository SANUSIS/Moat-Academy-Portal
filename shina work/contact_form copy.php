
      <?php if(validation_errors()) { ?>
         <div class="alert alert-danger alert-dismissible fade in" role="alert">
  	       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span>
           </button>
           <strong><?php echo validation_errors(); ?></strong>
         </div>
      <?php }   ?> 
          <br />
     <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="form-border">              
            <form role="form" action="" method="POST">
              <h1>Contact Form</h1>
              <div class="form-group">
                <label for ="lastname">Lastname</label>
                <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
              </div> 
              <div class="form-group">
                <label for ="firstname">Firstname</label>
                <input type="text" name="firstname" class="form-control" placeholder="Enter first name">
              </div> 
              <div class="form-group">
                <label for ="phonenumber">Phonenumber</label>
                <input type="phone" name="phonenumber" class="form-control" placeholder="Enter phone number">
              </div>
              <div class="form-group">
                <label for="emailadddress">Email Address</label>
                <input type="email" name="emailadddress" class="form-control" placeholder="Enter email address">
              </div>
                <div class="form-group">
                <label for ="homeaddress">Home Address</label>
                <input type="text" name="homeaddress" class="form-control" placeholder="Enter home address">
              </div>
              <button type="submit" name="submit"  class="btn btn-success">Signup</button>
              <button type="reset" name="reset"  class="btn btn-success">Reset</button>
              <a  href="<?php echo base_url();?>index/viewall"  class= "btn btn-danger">View All</a>
            </form>
          </div>
        </div>
      </div>
    </div>