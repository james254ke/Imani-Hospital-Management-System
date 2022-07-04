<?php include'includes/header.php' ?>








<?php 

$key=$_GET['we_delete'];

$servdb=mysqli_connect("localhost","root","","hmsbd");

 $del=mysqli_query($servdb,"DELETE FROM service WHERE id='$key'");

echo "<script type='text/javascript'>
 	window.location.href='service.php';
 </script>";



 ?>

<?php include'includes/footer.php' ?>