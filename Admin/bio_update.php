


<div class="modal modal-dialog-scrollable" id="updatinguserinfo<?php echo $looprow['id'] ?>" >
	<div class="modal-dialog">
		<div class="modal-content"style="width: 160%;">
			<div class="modal-header bg-info">

			<?php 
			$user_update=mysqli_connect("localhost","root","","hmsbd");
$sql=mysqli_query($user_update,"select * from users where id='".$_SESSION['id']."'");
while($data=mysqli_fetch_array($sql))
{
?>
<h4><?php echo htmlentities($data['user_name']);?>'s Profile</h4>
<p><b>Profile Reg. Date: </b><?php echo htmlentities($data['creation_date']);?></p>
<?php if($data['updationdate']){?>
<p><b>Profile Last Updation Date: </b><?php echo htmlentities($data['updationdate']);?></p>
<?php } ?>
<hr />					
			</div>
			<div class="modal-body">

		
<form method="post" enctype="multipart/form-data">
                      
						  <div class="mb-3 tt">
						  	 <input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="inputforname"class="form-label">Name</label>
						       <input type="text" name="username" value="<?php echo $looprow['user_name'] ?>" class="form-control" required="" id="inputforname">
						  </div>

						  <div class="mb-3 tt">
						  	 <input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="inputforid "class="form-label">National ID</label>
						       <input type="number" name="userid" value="<?php echo $looprow['userid'] ?>" class="form-control" required class="" id="inputforid">
						   </div>
						<div class="mb-3 tt">
							 <input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="inputforphone "class="form-label">Phone Number</label>
						       <input type="Number" name="userphone" value="<?php echo $looprow['phone_number'] ?>" class="form-control" id="inputforphone"required class="">
						   </div>
					
						  <div class="mb-3 tt">
						  	 <input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						       <label for="inputforidemail "class="form-label">Email</label>
						       <input type="email" name="useremail" value="<?php echo $looprow['email'] ?>" class="form-control" id="inputidemail"required class="">
						   </div>

						   <div class="mb-3">
						   	 <input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						   	  <label for="inputforrole "class="form-label">Role</label>
								<select name="userrole" class="form-control">
									         		<option value="">Select Role</option>
									 <?php 
									//db connection for looping the items in the table
									$mgusercat=mysqli_connect("localhost","root","","hmsbd");

									$mgusercatloop=mysqli_query($mgusercat,"SELECT *FROM manageusercategory");

									while($data=mysqli_fetch_array($mgusercatloop)){
									 ?>

									 <option><?php echo htmlentities ($data['Title']);?>


									  </option>
									<?php } ?>
						       </select>
						    </div>

                            <div class="mb-3 tt">
                            	   <input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						    	  <label for="inputforpass" class="form-label">User Password</label>
                                  <input type="password"  class="form-control" value="<?php echo $looprow['password'] ?>" name="userpass" id="inputforpass" >

						    </div>


						   <div class="mb-3">
						   	 <input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
						    	  <label for="inputfordept "class="form-label">Department</label>
						   	    <select  name="userdept" value="<?php echo $looprow['department'] ?>"  class="form-control" >
						   	    	         		<option value="">Select Department</option>
				                 <?php 
									//db connection for looping the items in the table
									$mgdepart=mysqli_connect("localhost","root","","hmsbd");
									$mgdepartloop=mysqli_query($mgdepart,"SELECT *FROM managedepartments");
									while($data=mysqli_fetch_array($mgdepartloop)){
									 ?>
									  <option> <?php echo htmlentities ($data['Title']);?>
								

									</option>
									    	<?php } ?>

						   	  </select>

						 
						       
						    </div>

					<div class="mb-3 tt">
						  	 <input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
                           <label for="inputforpicture"class="form-label">Picture</label>
                           <input type="file" name="userpicture" value="<?php echo $looprow['picture'] ?>"class="form-control" id="inputforpicture">
                      </div>

<?php } ?>
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>
				
			</div>
		</div>
	</div>
	 

</div>



<!-- database connection -->






<?php   
$user_update=mysqli_connect("localhost","root","","hmsbd");
if (isset($_POST['update'])) {

$key=$_POST['id'];

$name=$_POST['username'];
$id=$_POST['userid'];
$phone=$_POST['userphone'];
$email=$_POST['useremail'];
$role=$_POST['userrole'];
$pass=$_POST['userpass'] ;
$dept=$_POST['userdept'];


if($_FILES['userpicture']['name']==""){

$varqury=mysqli_query($user_update,"UPDATE users SET user_name='$name',userid='$id',phone_number='$phone',email='$email',role='$role',password='$pass',department='$dept' WHERE id='$key'");

 echo "<script type='text/javascript'>
    window.alert('Data successfully updated');
    window.location.href='users_db.php';
    

 </script>";

}

else{ 
$imagename=$_FILES['userpicture']['name'];
$imagelocation=$_FILES['userpicture']['tmp_name'];
move_uploaded_file($imagelocation, "uploadusers/".$imagename);

$variqury=mysqli_query($user_update,"UPDATE users SET user_name='$name',userid='$id',phone_number='$phone',email='$email',role='$role',password='$pass',department='$dept', picture='$imagename' WHERE id='$key'");


echo "<script type='text/javascript'>
    window.alert(' Data  and File  have been updated successfuly');
      window.location.href='users_db.php';
 </script>";
}

}


 ?>







