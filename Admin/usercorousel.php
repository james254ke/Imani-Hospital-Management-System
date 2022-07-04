<?php include 'includes/header.php' ?>



<button class="btn btn-primary" type="services" data-bs-toggle='modal' data-bs-target='#corousel'>Corousel Images</button>

<div class="container">
<table class="table table-success table-striped">
 
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>

  </thead>
  <tbody>
<?php 	

$no=1;
$dbs=mysqli_connect("localhost","root","","hmsbd");
$rowloop=mysqli_query($dbs,"SELECT *from corousel");
while($looprow=mysqli_fetch_array($rowloop)){
?>	

   <tr>
	         		<th scope="row"><?= $no ?></th>
	         		
	         		<td><img src="uploadcorousel/<?php echo $looprow['Images'] ?>"style="width: 100px;"></td>
				 
				<td>
       <button class="btn btn-success"><a href="editservice.php?we_edit=<?php echo $looprow['id'] ?>" >Edit</a></button>
      <button class="btn btn-danger"><a href="deleteservice.php?we_delete=<?php echo $looprow['id'] ?>">Delete</a></button>
					
			    </td>
         	    </tr>
<?php $no++; } ?>
     
   
  </tbody>
</table>
</div>

<!-- modal -->
<div class="modal modal-dialog-scrollable" id="corousel">
  <div class="modal-dialog">
  	<div class="modal-content"style="width: 160%;">
  		<div class="modal-header">
  			<h1>Corousel Images</h1>
  		</div>

  		<div class="modal-body">
  			
<!-- start form -->
<form method="post" enctype="multipart/form-data">
  <div class="mb-3 tt">
       <label for="inputforpic"class="form-label">Images</label>
       <input type="file" name="corouselimage" class="form-control" id="inputforpic">
  </div>


<div class="mb-3 form-check">
        <input type="checkbox" name="boxi" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label"  for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" name="button" class="btn btn-primary">Submit</button>
</form>
<!-- end of form -->

  		</div>
  	</div>
  </div>
  </div>
<!-- modal end  -->





<?php include 'includes/footer.php' ?>

<?php 	

//db connection 

$db=mysqli_connect("localhost","root","","hmsbd");

if(isset($_POST['button'])){



	// $rowloop=mysqli_query($db,"SELECT *from corousel where Image='$imagename'");

	// $numrows=mysqli_num_rows($rowloop);
	// echo $numrows;

	// if($numrows>0){
 //   echo "<script type='text/javascript'>
 //   window.alert('DATA ALREADY EXISTS');
 //   </script>";
	// }


$imagename=$_FILES['corouselimage']['name'];
$imagelocation=$_FILES['corouselimage']['tmp_name'];

move_uploaded_file($imagelocation, "uploadcorousel/".$imagename);

$varquery=mysqli_query($db,"INSERT INTO corousel values('','$imagename')");

if ($varquery) {
   echo "<script type='text/javascript'>
    window.alert('DATA SENT SUCCESSFULLY');
     window.location.href='usercorousel.php';
 </script>";
}



}








 ?>























<!-- Modal -->

