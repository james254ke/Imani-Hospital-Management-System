  
<?php 
session_start();
include'access.php';
access('DOCTOR');
include 'includes/header.php' ;



if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<body>


<div class="container-fluid">
  <div class="alert alert-success" id="dismiss">
    <span class="alert-dismiss"data-bs-dismiss="alert" data-bs-target="dismiss">x</span> 
    <div class="alert-body">
    <p class="greeting"> Hello, <?php echo $_SESSION['user_name']; ?> You're Logged in the Doctor page</p>
    </div>
  </div>
</div>





<?php 


}else{
    header("Location:index_login.php");
            exit();
} ?>


      
<?php include 'includes/footer.php' ?>
