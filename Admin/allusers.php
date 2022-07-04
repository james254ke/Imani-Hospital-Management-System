<?php include 'includes/header.php' ?>

<div class="container-fluid">
<div class="row">
      <div class="col-md-3" style="padding: 15PX;">
      <div class="card" style="width: 18rem;">
              <div class="card-body">
                <h6 class="card-title text-center">Appointments</h6>
                <a href="appointment.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-paperclip"></i> View Appointments</a>
              </div>
      </div>
      </div>

      <div class="col-md-3 " >
      <div class="card" style="width: 18rem;margin: 15px;">
              <div class="card-body">
                <h6 class="card-title text-center">Inquiries</h6>
                <a href="inquiry.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-inbox"></i> View inquiries</a>
              </div>
      </div>
      </div>



      <div class="col-md-3 " >
      <div class="card" style="width: 18rem;margin: 15px;">
              <div class="card-body">
                <h6 class="card-title text-center">Record Patient Bio-Data</h6>
                    
              
                <a href="recepbiodatapatient.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-person-fill"></i>Patient Data</a>
              </div>
      </div>
      </div>

</div>
</div>

<?php 	

$userspanel= intval($_GET['userpanel']);

$recepdb=mysqli_connect("localhost","root","","hmsbd");

$receploop=mysqli_query($recepdb,"SELECT *FROM patient WHERE id='$userspanel'");

$looprow=mysqli_fetch_array($receploop);

 ?>










<?php include 'includes/footer.php' ?>
