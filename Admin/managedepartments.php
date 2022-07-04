<?php include'includes/header.php' ?>


<button class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#Managedepartments'><h5>Manage Departments</h5></h3></button>


<div class="container text-uppercase">
	<table class="table table-striped" >
       <thead>
       	<tr>
       		<th scope="col">Id</th>
       		<th scope="col">Title</th>
       		<th scope="col">Action</th>
       	</tr>
       </thead>

       <tbody>
      
<?php 
//db connection for looping the items in the table

$no=1;
$mgdepart=mysqli_connect("localhost","root","","hmsbd");

$mgdepartloop=mysqli_query($mgdepart,"SELECT *FROM managedepartments");

while($looprow=mysqli_fetch_array($mgdepartloop)){
 ?>

 <tr>
       	<th scope="row"> <?= $no ?></th>
       	<td><?php echo $looprow['Title'] ?></td>
<td>

        <a href=""name="button" data-bs-toggle="modal" data-bs-target="#updatedept<?php echo $looprow['id'] ?>" class="btn btn-transparent btn-xs " tooltip-placement="top" tooltip="Edit"><i class="fa fa-edit"></i></a>

     <a href="deletedepartment.php?delete_depart=<?php echo $looprow['id'] ?>"onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>

  </td>

  <?php  include'updatedept.php' ?>
 </tr>
<?php $no++; } ?>
      </tbody>
	</table>
	
</div>


<div class="modal modal-dialog-scrollable" id="Managedepartments" >
	<div class="modal-dialog">
		<div class="modal-content"style="width: 160%;">
			<div class="modal-header">
				<h4>Manage Departments</h4>
			</div>

			<div class="modal-body">

<form method="post" enctype="multipart/form-data">
  <div class="mb-3 tt">
       <label for="inputfortitle"class="form-label">Title</label>
       <input type="form-text" name="managedeparttitle" class="form-control" id="inputfortitle">
  </div>

<div class="mb-3 form-check">
        <label class="form-check-label"  for="exampleCheck1">Check me out</label>
         <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
  </div>

  <button type="submit" name="managedepartbutton" class="btn btn-primary">Submit</button>
</form>
				
			</div>
		</div>
	</div>
	

</div>

<?php include'includes/footer.php' ?>



<?php 	

//db connection 

$mgdepart=mysqli_connect("localhost","root","","hmsbd");

if(isset($_POST['managedepartbutton'])) {


$titl=$_POST['managedeparttitle'];


$mgdepartloop=mysqli_query($mgdepart,"SELECT * FROM  managedepartments WHERE Title='$titl'");
$numrowcheck=mysqli_num_rows($mgdepartloop);
echo $numrowcheck;

if ($numrowcheck>0) {
	echo "<script type='text/javascript'>
    window.alert('DATA ALREADY EXISTS !!');
 </script>";
}

else{
$variquery=mysqli_query($mgdepart,"INSERT INTO managedepartments values ('','$titl')");

if ($variquery) {
   echo "<script type='text/javascript'>
    window.alert('DATA SENT SUCCESSFULLY');
    window.location.href='managedepartments.php';
 </script>";
}

}


}

 ?>




