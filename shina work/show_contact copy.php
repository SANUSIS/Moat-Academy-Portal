<?php



?>
<div class="container">
	<div class="row">
	<h1>View All Contact List  <a href="<?php echo base_url();?>" class="btn btn-primary">Add More</a></h1>
		<table class="table table-responsive">
		<tr>
		<th>Serial</th>
		<th>Fullname</th>
		<th>Email Address</th>
		<th>Phone Number</th>
		<th>Date</th>
		<th>Action</th>
		</tr>
       <?php
       $counter =1;
         foreach($mycontacts as $con){
	     $formated_date = date("F j, Y, g:i a",strtotime($con['datecaptured']));
	     $id = $con['contact_id'];
	     ?>
	
		<tr>
		<td><?php echo $counter; ?>&nbsp;</td>
		<td><?php echo $con['lastname']; ?>&nbsp;</td>
		<td><?php echo $con['firstname']; ?>&nbsp;</td>
		<td><?php echo $con['phonenumber']; ?>&nbsp;</td>
		<td><?php echo $con['emailaddress']; ?>&nbsp;</td>
		<td><?php echo $con['datecaptured']; ?> &nbsp;</td>
		<td><a href="<?php echo base_url ("index/editcontact/$id");?>">Edit</a></td>
		</tr>
		<?php
		$counter ++;
	    }

       ?>
		</table>
	</div>
</div>