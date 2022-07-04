<?php include'includes/header.php' ?>


<button class="btn btn-primary" data-bs-toggle='modal' data-bs-target='#Manageusercat'><h5>Manage user Category</h5></h3></button>


<div class="container">
	<table class="table table-striped">
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
$mgusercat=mysqli_connect("localhost","root","","hmsbd");

$mgusercatloop=mysqli_query($mgusercat,"SELECT *FROM manageusercategory");

while($looprow=mysqli_fetch_array($mgusercatloop)){
 ?>

 <tr>
       	<th scope="row"> <?= $no ?></th>
       	<td><?php echo $looprow['Title'] ?></td>
<td>

 <a href=""name="button" data-bs-toggle="modal" data-bs-target="#updating<?php echo $looprow['id'] ?>" class="btn btn-transparent btn-xs " tooltip-placement="top" tooltip="Edit"><i class="fa fa-edit"></i></a>

     <a href="deleteusercat.php?delete_usercat=<?php echo $looprow['id'] ?>"onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>

  </td>
  <?php include 'modalupdateusercat.php' ?>
 </tr>
<?php $no++; } ?>
      </tbody>
	</table>
	
</div>




<?php include'includes/footer.php' ?>



<?php 	

//db connection 

$mgusercat=mysqli_connect("localhost","root","","hmsbd");

if(isset($_POST['manageusercatbutton'])) {


$titl=$_POST['manageusercattitle'];


$mgusercatloop=mysqli_query($mgusercat,"SELECT * FROM  manageusercategory WHERE Title='$titl'");
$numrowcheck=mysqli_num_rows($mgusercatloop);
echo $numrowcheck;

if ($numrowcheck>0) {
	echo "<script type='text/javascript'>
    window.alert('DATA ALREADY EXISTS !!');
 </script>";
}

else{
$variquery=mysqli_query($mgusercat,"INSERT INTO manageusercategory values ('','$titl')");

if ($variquery) {
   echo "<script type='text/javascript'>
    window.alert('DATA SENT SUCCESSFULLY');
    window.location.href='Manageusercat.php';
 </script>";
}

}


}

 ?>





<div class="modal modal-dialog-scrollable" id="Manageusercat" >
    <div class="modal-dialog">
        <div class="modal-content"style="width: 160%;">
            <div class="modal-header">
                <h4>Manage User Category</h4>
            </div>

            <div class="modal-body">

<form method="post" enctype="multipart/form-data">
  <div class="mb-3 tt">
       <label for="inputfortitle"class="form-label">Title</label>
       <input type="form-text" name="manageusercattitle" class="form-control" id="inputfortitle">
  </div>

<div class="mb-3 form-check">
        <input type="checkbox" name="boxi" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label"  for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" name="manageusercatbutton" class="btn btn-primary">Submit</button>
</form>
                
            </div>
        </div>
    </div>
    

</div>
