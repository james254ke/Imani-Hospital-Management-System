<?php include 'includes/header.php' ?>


<?php 	

$key=$_GET['we_deleteappoint'];

$appointdbz=mysqli_connect("localhost","root","","hmsbd");

$del=mysqli_query($appointdbz,"DELETE FROM appointment WHERE id='$key'");

echo "<script type='text/javascript'>
window.location.href='appointment.php';
</script>";



 ?>

<?php include 'includes/footer.php'	 ?>