
<div class="modal modal-dialog-scrollable" id="updatingpatientinfo<?php echo $looprow['id'] ?>" >
	<div class="modal-dialog">
		<div class="modal-content"style="width: 160%;">
			<div class="modal-header bg-info">
				<h4> Patient's Profile</h4>
			</div>

			<div class="modal-body">

<form method="post" enctype="multipart/form-data">
                

						  <div class="mb-3 tt">
						  	<input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="inputforname"class="form-label">Name</label>
						       <input type="form-text" name="updatepatientname" value="<?php echo $looprow['Name'] ?>" class="form-control" required="" id="inputforname">
						  </div>

						  <div class="mb-3 tt">
						  	<input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="inputforname "class="form-label">Age</label>
						       <input type="number" name="updatepatientage" value="<?php echo $looprow['Age'] ?>" class="form-control" required class="" id="inputforname">
						   </div>
						<div class="mb-3 tt">
							<input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="inputforidnumber "class="form-label">National ID</label>
						       <input type="Number" name="updatepatientid" value="<?php echo $looprow['National_Id'] ?>" class="form-control" id="inputidnumber"required class="">
						   </div>
						 <div class="mb-3 tt">
						 	<input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="exampleInputgender"class="form-label">Gender</label>
								        <select  name="updatepatientgender" value="<?php echo $looprow['Gender'] ?>" class="form-control" >           
								              <option></option>
								              <option>Male</option>
								              <option>Female</option>
								        
								       </select>  
						  </div>
						  <div class="mb-3 tt">
						  	<input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="inputforidnumber "class="form-label">Phone</label>
						       <input type="Number" name="updatepatientphone" value="<?php echo $looprow['Phone'] ?>" class="form-control" id="inputidnumber"required class="">
						   </div>
						   <div class="mb-3 tt">
						   	<input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="inputforidpassword "class="form-label">Location</label>
						       <input type="form-text" name="updatepatientlocation" value="<?php echo $looprow['Location'] ?>" class="form-control" id="inputidpassword"required class="">
						   </div>

				
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>
				
			</div>
		</div>
	</div>
	

</div>



<?php 	
$con=mysqli_connect("localhost","root","","hmsbd");
if(isset($_POST['update'])){

$key=$_POST['id'];
	$nam=$_POST['updatepatientname'];
	$age=$_POST['updatepatientage'];
	$national=$_POST['updatepatientid'];
	$sex=$_POST['updatepatientgender'];
	$phone=$_POST['updatepatientphone'];
	$place=$_POST['updatepatientlocation'];

$variquery=mysqli_query($con,"UPDATE recepbiodatapatient  SET Name='$nam',National_Id='$national',Age='$age',Gender='$sex',Phone='$phone',Location='$place' WHERE id='$key'");

if ($variquery) {
   echo "<script type='text/javascript'>
    window.alert('DATA Updated SUCCESSFULLY');
    window.location.href='recepbiodatapatient.php';
 </script>";
}
}
 ?>
