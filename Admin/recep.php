
<?php 
session_start();
include'access.php';

access('RECEPTION');
include 'includes/header.php' ;


$con=mysqli_connect("localhost","root","","hmsbd");

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<body>


<div class="container-fluid">
  <div class="alert alert-success" id="dismiss">
    <span class="alert-dismiss"data-bs-dismiss="alert" data-bs-target="dismiss">x</span> 
    <div class="alert-body">
    <p class="greeting"> Hello, <?php echo $_SESSION['user_name']; ?> You're Logged in the Reception page </p>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h1 class="mainTitle">Reception | Dashboard</h1>
                                  
    </div>
  </div>
</div>






<div class="container-xxl py-5">
        <div class="container-fluid">
                <div class="row">
                      <div class="col-md-4 " >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Patients Bio-data
                                  <br>
                                  <?php $patients= mysqli_query($con,"SELECT * FROM recepbiodatapatient");
$num_rows2 = mysqli_num_rows($patients);
{
?>
                      Total Patients:<?php echo htmlentities($num_rows2);  } ?>  </h6>
                            
                                <a href="recepbiodatapatient.php" class="btn btn-primary" style="margin: 20px auto;display: block;">Patients</a>
                              </div>
                      </div>
                      </div>


                      <div class="col-md-4 " >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Appointments
                                                       <br>
                                  <?php $sql= mysqli_query($con,"SELECT * FROM appointment");
$num_rows2 = mysqli_num_rows($sql);
{
?>
                      Total Appointments:<?php echo htmlentities($num_rows2);  } ?>  </h6>
                                <a href="appointment.php"  class="btn btn-primary" style="margin: 20px auto;display: block;">Appointments</a>
                              </div>
                      </div>
                      </div>


                      <div class="col-md-4 " >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Inquiries


  <a href="#"class=""data-bs-toggle="dropdown"><i class="bi bi-bell"></i></a>  
  <ul class="dropdown-menu"></ul>

                                  <style type="text/css">
                                    
                                    .bi-bell {
                                      font-size:20px;
                                    position: absolute;
                                    top: -10px;
                                    right: -10px;
                                    padding: 10px 15px;
                                    border-radius: 50%;
                                    background-color: red;
                                    color: white;
                                  }
                                  </style>



                                                       <br>
                                  <?php $inquiry= mysqli_query($con,"SELECT * FROM contacts");
$num_rows2 = mysqli_num_rows($inquiry);
{
?>
                      Total Inquiries:<?php echo htmlentities($num_rows2);  } ?>  </h6>
                                <a href="inquiry.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-doctor"></i>Inquires</a>
                              </div>
                      </div>
                      </div>



                   




                </div>
       </div>
</div>



<?php 


}else{
    header("Location:index_login.php");
            exit();
} ?>


      
<?php include 'includes/footer.php' ?>
