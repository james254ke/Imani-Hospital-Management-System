
<?php include'includes/header.php' ?>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-primary"style="height: 100px;">
            <h2 class="text-center text-uppercase " style="padding:25px;color: white;">Patient Bio-Data</h2>
        </div>
    </div>
</div>


<button class="btn btn-info" data-bs-toggle="modal" style="margin-top: 20px;" data-bs-target="#input">Enter Patient Bio-data</button>

<div class="container">
	<table class="table table-striped">
       <thead>
       	<tr>
       		<th scope="col">Id</th>
       		<th scope="col">Name</th>
       		<th scope="col">Age</th>
       		<th scope="col">National_Id</th>
       		<th scope="col">Gender</th>
            <th scope="col">Phone</th>
       		<th scope="col">Location</th>
       		<th scope="col">Creation Date</th>
       		<th scope="col">Updation Date</th>
       		<th scope="col">Action</th>
       	</tr>
       </thead>

       <tbody>
      
<?php 	

// since we want to loop and echo items that are in the table we need to connect the database tables for this particular set of data

$no=1;
$recepatientbio=mysqli_connect("localhost","root","","hmsbd");
$patientloop=mysqli_query($recepatientbio,"SELECT *FROM recepbiodatapatient");

while($looprow=mysqli_fetch_array($patientloop)){

 ?>

 <tr>
       	<th scope="row"> <?= $no ?></th>
       	<td><?php echo $looprow['Name'] ?></td>
       	<td><?php echo $looprow['Age'] ?></td>
       	<td><?php echo $looprow['National_Id'] ?></td>
       	<td> <?php echo $looprow['Gender'] ?></td>
        <td><?php echo $looprow['Phone'] ?></td>
       	<td><?php echo $looprow['Location'] ?></td>
       	<td><?php echo $looprow['creation_date'] ?></td>
       	<td><?php echo $looprow['updation_date'] ?></td>
       
      
				<td>
      

		<a href=""name="button" data-bs-toggle="modal" data-bs-target="#updatingpatientinfo<?php echo $looprow['id'] ?>" class="btn btn-transparent btn-xs " tooltip-placement="top" tooltip="Edit"><i class="fa fa-edit"></i></a>
       

      <a href="deletepatientbio.php?delete_patientbio=<?php echo $looprow['id'] ?> "onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
  </td>

  <?php include 'editpatientbioreception.php' ?>
 </tr>
 <?php $no++;} ?>
      </tbody>
	</table>
	
</div>


<!-- start of modal -->
<div class="modal modal-dialog-scrollable" id="input" >
	<div class="modal-dialog">
		<div class="modal-content"style="width: 160%;">
			<div class="modal-header bg-info">
				<h4>Patient Bio-Data</h4>
			</div>

			<div class="modal-body">

						<form method="post" enctype="multipart/form-data">

						  <div class="mb-3 tt">
						       <label for="inputforname"class="form-label">Name</label>
						       <input type="form-text" name="patientname" class="form-control" required="" id="inputforname">
						  </div>

						  <div class="mb-3 tt">
						       <label for="inputforname "class="form-label">Age</label>
						       <input type="number" name="patientage" class="form-control" required class="" id="inputforname">
						   </div>
						<div class="mb-3 tt">
						       <label for="inputforidnumber "class="form-label">National ID</label>
						       <input type="Number" name="patientid" class="form-control" id="inputidnumber"required class="">
						   </div>
						 <div class="mb-3 tt">
						       <label for="exampleInputgender"class="form-label">Gender</label>
								        <select  name="patientgender" class="form-control" required class="">           
								              <option></option>
								              <option>Male</option>
								              <option>Female</option>
								        
								       </select>  
						  </div>
						  <div class="mb-3 tt">
						       <label for="inputforidnumber "class="form-label">Phone</label>
						       <input type="Number" name="patientphone" class="form-control" id="inputidnumber"required class="">
						   </div>
						   <div class="mb-3 tt">
						       <label for="inputforidpassword "class="form-label">Location</label>
						       <input type="form-text" name="patientlocation" class="form-control" id="inputidpassword"required class="">
						   </div>



						  <button type="submit" name="sendpatientbio" class="btn btn-primary">Submit</button>
						</form>
										
			</div>
		</div>
	</div>
	

</div>
<!-- end of modal -->


<!-- database connection -->

<?php 	

$recepatientbio=mysqli_connect("localhost","root","","hmsbd");

if (isset($_POST['sendpatientbio'])) {
	$name=$_POST['patientname'];
	$age=$_POST['patientage'];
	$national=$_POST['patientid'];
	$sex=$_POST['patientgender'];
	$phone=$_POST['patientphone'];
	$place=$_POST['patientlocation'];


$patientloop=mysqli_query($recepatientbio,"SELECT *FROM recepbiodatapatient WHERE National_Id='$national' ");
// in the above column we are looping the biodata specifically the id column
$numrowcheck=mysqli_num_rows($patientloop);
echo $numrowcheck;

// in the above line we are checking if the id of a patient exists 

if ($numrowcheck>0) {
	echo  "<script type='text/javascript'>
	window.alert('DATA ALREADY EXISTS !!);
	</script>";
}

else{

$varquery=mysqli_query($recepatientbio,"INSERT INTO recepbiodatapatient(Name,Age,National_Id,Gender,Phone,Location) values('$name','$age','$national','$sex','$phone','$place')");
 
 if ($varquery) {
      
      echo "<script type='text/javascript'>
      window.alert('DATA SENT SUCCESSFULLY');
      window.location.href='recepbiodatapatient.php';
      </script>";
 }
}

	





}






 ?>
















<?php include'includes/footer.php' ?>