<?php include'includes/header.php' ?>



<?php 

$key=$_GET['we_edit'];

$servdb=mysqli_connect("localhost","root","","hmsbd");

$servloop=mysqli_query($servdb,"SELECT *FROM service WHERE id='$key'");


$looprow=mysqli_fetch_array($servloop);


 ?>

 <button class="btn btn-primary" name="buttons" data-bs-toggle="modal"data-bs-target="#updates" >update service </button>

 <div class="modal modal-dialog-scrollable" id="updates">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Update edit service</h2>
        </div>

        <div class="modal-body">
            <div class="container">
    <!-- start of form -->
<form method="post" >
  <div class="mb-3 tt">
       <label for="inputfortitle"class="form-label">Title</label>
       <input type="form-text" name="servtitle" value="<?php echo $looprow['Title'] ?> <?php $looprow['Title'] ?>" class="form-control" id="inputfortitle">
  </div>

  <div class="mb-3 tt">
       <label for="inputforcategory"class="form-label">Description</label>
       <input type="form-text" name="servdescri" value="<?php echo $looprow['Description'] ?> <?php $looprow['Description'] ?>" class="form-control" id="inputforcategory">
  </div>

<div class="mb-3 tt">
       <label for="inputforfileimage"class="form-label">File</label>
       <input type="file" name="servpic" value="<?php echo $looprow['Image'] ?> <?php $looprow['Image'] ?>" class="form-control" id="inputforauthor">
  </div>

  <div class="mb-3 form-check">
        <input type="checkbox" name="boxi" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label"  for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="editbtn" class="btn btn-primary">update</button>
</form>

<!-- end of form -->
</div>

        </div>
        </div>
    </div>
 </div>
 



<?php  include 'includes/footer.php' ?>



 <?php 

if(isset($_POST['editbtn'])) {

// use other variables names aside from what you have used
    $titl=$_POST['servtitle'];
    $descrip=$_POST['servdescri'];
    $imagename=$_POST['servpic'];

$varquery=mysqli_query($servdb,"UPDATE service SET Title='$titl',Description='$descrip',Image='$imagename' WHERE id='$key'");












echo "<script type='text/javascript'>
    window.location.href='service.php';
 </script>";













}





  ?>
<?php include'includes/footer.php' ?>