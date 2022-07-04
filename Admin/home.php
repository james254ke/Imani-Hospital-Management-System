
<?php 
session_start();
include 'includes/header.php' ;
include'access.php';


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<body>


<div class="container-fluid">
  <div class="alert alert-success" id="dismiss">
    <span class="alert-dismiss"data-bs-dismiss="alert" data-bs-target="dismiss">x</span> 
    <div class="alert-body">
    <p class="greeting"> Hello, <?php echo $_SESSION['user_name']; ?> You're Logged in</p>
    </div>
  </div>
</div>








<div class="container-xxl py-5">
        <div class="container-fluid">
                




        
       </div>
</div>



<?php 


}else{
    header("Location:index_login.php");
            exit();
} ?>


      
<?php include 'includes/footer.php' ?>
