<?php  include 'includes/header.php' ?>


<?php 	

$key=$_GET['delete_usercat'];
$mgusercat=mysqli_connect("localhost","root","","hmsbd");
$delet=mysqli_query($mgusercat,"DELETE FROM manageusercategory WHERE id='$key' ");


echo "<script type='text/javascript'>
 	window.location.href='Manageusercat.php';
 </script>";








 ?>




<?php  include 'includes/footer.php' ?>