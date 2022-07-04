
<?php 	include 'includes/header.php' ?>

<?php 	

$key=$_GET['we_deletecontact'];
$contactdbz=mysqli_connect("localhost","root","","hmsbd");
$delet=mysqli_query($contactdbz,"DELETE FROM contacts WHERE id='$key' ");


echo "<script type='text/javascript'>
 	window.location.href='inquiry.php';
 </script>";








 ?>




<?php 	include 'includes/footer.php' ?>