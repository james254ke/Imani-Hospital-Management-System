  
<?php 
session_start();
include 'includes/header.php' ;



if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<body>


<div class="container-fluid">
  <div class="alert alert-success" id="dismiss">
    <span class="alert-dismiss"data-bs-dismiss="alert" data-bs-target="dismiss">x</span> 
    <div class="alert-body">
    <p class="greeting"> Hello <?php echo $_SESSION['user_name']; ?>,Your Access has been  Denied! </p>
    </div>
  </div>
</div>



<h1 class="text-center">404</h1>




<?php 


}else{
    header("Location:index_login.php");
            exit();
} ?>


      
<?php include 'includes/footer.php' ?>
