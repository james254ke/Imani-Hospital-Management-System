<?php include'includes/header.php' ?>


<?php 

$key=$_GET['delete_patientbio'];

$recepatientbio=mysqli_connect("localhost","root","","hmsbd");

 $del=mysqli_query($recepatientbio,"DELETE FROM recepbiodatapatient WHERE id='$key'");

echo "<script type='text/javascript'>
 	window.location.href='recepbiodatapatient.php';
 </script>";



 ?>

<?php include'includes/footer.php' ?>