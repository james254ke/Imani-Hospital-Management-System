


<div class="modal modal-dialog-scrollable" id="updatedept<?php  echo $looprow['id'] ?>" >
	<div class="modal-dialog">
		<div class="modal-content"style="width: 160%;">
			<div class="modal-header">
				<h4>Update Department Info</h4>
			</div>

			<div class="modal-body">
				<form method="post" enctype="multipart/form-data">
  <div class="mb-3 tt">
       <input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
       <label for="inputfortitle"class="form-label">Title</label>
       <input type="form-text" name="managedeparttitle" value="<?php echo $looprow['Title'] ?><?php $looprow['Title'] ?>" class="form-control" id="inputfortitle">
  </div>

<div class="mb-3 form-check">
        <label class="form-check-label"  for="exampleCheck1">Check me out</label>
        <input type="checkbox" name="box" class="form-check-input" id="exampleCheck1">
  </div>

  <button type="submit" name="depart" class="btn btn-primary">Submit</button>
</form>

	<!--end of form  -->
			</div>
		</div>
	</div>
	

</div>



<?php   
if(isset($_POST['depart'])){

$key=$_POST['id'];
$titl=$_POST['managedeparttitle'];

$mgdeparts=mysqli_connect("localhost","root","","hmsbd");
$variquery=mysqli_query($mgdeparts,"UPDATE managedepartments  SET Title='$titl' WHERE id='$key'");


if ($variquery) {
   echo "<script type='text/javascript'>
    window.alert('DATA Updated SUCCESSFULLY');
    window.location.href='managedepartments.php';
 </script>";
}



}


 ?>