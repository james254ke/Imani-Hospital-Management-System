<?php include'includes/header.php' ?>
<?php session_start(); ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-primary"style="height: 100px;">
            <h2 class="text-center text-uppercase " style="padding:25px;color: white;">	User Bio-Data</h2>
        </div>
    </div>
</div>


<button class="btn btn-info" data-bs-toggle="modal" style="margin-top: 20px;" data-bs-target="#inputuser">Enter User Bio-data</button>


<div class="container">
	<table class="table table-striped">
       <thead>
       	<tr>
       		<th scope="col">Id</th>
       		<th scope="col">Name</th>
       		<th scope="col">National ID</th>
       		<th scope="col">Phone</th>
       		<th scope="col">Email</th>
            <th scope="col">Role</th>
       		<th scope="col">Department</th>
       	<!-- 	<th scope="col">Picture</th> -->
       		<th scope="col">Action</th>
       	</tr>
       </thead>

       <tbody>
      
<?php 	

// since we want to loop and echo items that are in the table we need to connect the database tables for this particular set of data

$no=1;
$userbio=mysqli_connect("localhost","root","","hmsbd");
$loop=mysqli_query($userbio,"SELECT *FROM users");

while($looprow=mysqli_fetch_array($loop)){

 ?>

 <tr>
       	<th scope="row"> <?= $no ?></th>
       	<td><?php echo $looprow['user_name'] ?></td>
       	<td><?php echo $looprow['userid'] ?></td>
       	<td> <?php echo $looprow['phone_number'] ?></td>
        <td><?php echo $looprow['email'] ?></td>
       	<td><?php echo $looprow['role'] ?></td>
       	<td><?php echo $looprow['department'] ?></td>
       <!--  	<td><img src="uploadusers/<?php echo $looprow['picture'] ?>" style="width:30px; border-radius:50%;"></td> -->
       
      
				<td>


		<a href=""name="button" data-bs-toggle="modal" data-bs-target="#updatinguserinfo<?php echo $looprow['id'] ?>" class="btn btn-transparent btn-xs " tooltip-placement="top" tooltip="Edit"><i class="fa fa-edit"></i></a>

     <a href="deleteusers.php?delete_userbio=<?php echo $looprow['id'] ?>"onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
  </td>

  <?php include 'bio_update.php' ?>
 </tr>
 <?php $no++;} ?>
      </tbody>
	</table>
	
</div>
</div>


<!-- start of modal -->
<div class="modal modal-dialog-scrollable" id="inputuser" >
	<div class="modal-dialog">
		<div class="modal-content"style="width: 160%;">
			<div class="modal-header bg-info">
				<h4>User Bio-Data</h4>
			</div>

			<div class="modal-body">

						<form method="post" enctype="multipart/form-data">

						  <div class="mb-3 tt">
						       <label for="inputforname"class="form-label">Name</label>
						       <input type="text" name="username" class="form-control" required="" id="inputforname">
						  </div>

						  <div class="mb-3 tt">
						       <label for="inputforid "class="form-label">National ID</label>
						       <input type="number" name="userid" class="form-control" required class="" id="inputforid">
						   </div>
						<div class="mb-3 tt">
						       <label for="inputforphone "class="form-label">Phone Number</label>
						       <input type="Number" name="userphone" class="form-control" id="inputforphone"required class="">
						   </div>
					
						  <div class="mb-3 tt">
						       <label for="inputforidemail "class="form-label">Email</label>
						       <input type="email" name="useremail" class="form-control" id="inputidemail"required class="">
						   </div>

						   <div class="mb-3">
						   	  <label for="inputforrole "class="form-label">Role</label>
						   	  <select name="userrole" value="<?php echo $looprow['role'] ?>" class="form-control">
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
						    	  <label for="inputforpass" class="form-label">User Password</label>
                                  <input type="password" name="userpass" class="form-control" id="inputforpass" required="">
						    </div>

						   <div class="mb-3">
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
                           <label for="inputforimage"class="form-label">Picture</label>
                           <input type="file" name="userpicture" class="form-control" id="inputforpicture"required class="">
                      </div>
 

						  <button type="submit" name="submititems" class="btn btn-primary">Submit</button>
						</form>
										
			</div>
		</div>
	</div>
	

</div>
<!-- end of modal -->


<!-- database connection -->

<?php 	

$user_bio=mysqli_connect("localhost","root","","hmsbd");

if (isset($_POST['submititems'])) {
$name=$_POST['username'];
$id=$_POST['userid'];
$phone=$_POST['userphone'];
$email=$_POST['useremail'];
$role=$_POST['userrole'];
$pass=md5($_POST['userpass']);
$dept=$_POST['userdept'];


$loop=mysqli_query($user_bio,"SELECT * FROM  users WHERE email='$email'");
$numrowcheck=mysqli_num_rows($loop);
echo $numrowcheck;

if ($numrowcheck>0) {
	echo "<script type='text/javascript'>
    window.alert('DATA ALREADY EXISTS !!');
 </script>";
}

else{

$imagename=$_FILES['userpicture']['name'];
$imagelocation=$_FILES['userpicture']['tmp_name'];

move_uploaded_file($imagelocation,"uploadusers/".$imagename);


$variquery=mysqli_query($user_bio, "INSERT INTO users(user_name,userid,phone_number,email,role,password,department) values('$name','$id','$phone','$email','$role','$pass','$dept','$imagename')");

if ($variquery) {
   echo "<script type='text/javascript'>
    window.alert('DATA SENT SUCCESSFULLY');
    window.location.href='users_db.php';
 </script>";
}

}


}

 ?>


















<?php include'includes/footer.php' ?>