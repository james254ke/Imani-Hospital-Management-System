<?php  include 'includes/header.php' ?>


<?php 	

$key=$_GET['delete_depart'];
$mgdepart=mysqli_connect("localhost","root","","hmsbd");
$delet=mysqli_query($mgdepart,"DELETE FROM managedepartments WHERE id='$key' ");


echo "<script type='text/javascript'>
 	window.location.href='managedepartments.php';
 </script>";








 ?>




<?php  include 'includes/footer.php' ?>