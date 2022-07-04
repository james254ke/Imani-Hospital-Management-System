


<div class="modal modal-dialog-scrollable" id="updating<?php echo $looprow['id'] ?>" >
	<div class="modal-dialog">
		<div class="modal-content"style="width: 160%;">
			<div class="modal-header">
				<h4>Manage User Category</h4>
			</div>

			<div class="modal-body">

<form method="post" enctype="multipart/form-data">
  <div class="mb-3 tt">
  	<input type="text" value="<?php echo $looprow['id'] ?>" name="id" hidden>
       <label for="inputfortitle"class="form-label">Title</label>
       <input type="form-text" name="manageusercattitle" value="<?php echo $looprow['Title'] ?>" class="form-control" id="inputfortitle">
  </div>

<div class="mb-3 form-check">
        <input type="checkbox" name="boxi" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label"  for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" name="nm" class="btn btn-primary">Submit</button>
</form>
				
			</div>
		</div>
	</div>
	

</div>

<?php 	

if(isset($_POST['nm'])){

$key=$_POST['id'];
$titl=$_POST['manageusercattitle'];



$mgudb=mysqli_connect("localhost","root","","hmsbd");
$variquery=mysqli_query($mgudb,"UPDATE manageusercategory  SET Title='$titl' WHERE id='$key'");


if ($variquery) {
   echo "<script type='text/javascript'>
    window.alert('DATA Updated SUCCESSFULLY');
    window.location.href='Manageusercat.php';
 </script>";
}


}


 ?>