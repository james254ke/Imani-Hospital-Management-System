<?php include'includes/header.php' ?>


<?php 

$key=$_GET['delete_userbio'];

$users_bio=mysqli_connect("localhost","root","","hmsbd");

 $del=mysqli_query($users_bio,"DELETE FROM users WHERE id='$key'");

echo "<script type='text/javascript'>;
    window.location.href='users_db.php';
 </script>";



 ?>

<?php include'includes/footer.php' ?>