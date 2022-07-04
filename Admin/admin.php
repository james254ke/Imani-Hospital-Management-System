
<?php 
session_start();
include'access.php';

access('ADMIN');

include 'includes/header.php';

$con=mysqli_connect("localhost","root","","hmsbd");

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<body>


<div class="container-fluid">
  <div class="alert alert-success" id="dismiss">
    <span class="alert-dismiss"data-bs-dismiss="alert" data-bs-target="dismiss">x</span> 
    <div class="alert-body">
    <p class="greeting"> Hello, <?php echo $_SESSION['user_name']; ?> You're Logged in the Admin page</p>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h1 class="mainTitle">Admin | Dashboard</h1>
                                  
    </div>
  </div>
</div>


<!-- first row -->

        <div class="container">
                <div class="row">
                      <div class="col-md-4" >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">HMS USERS BIO DATA
                                  <br>
                                    <?php $users= mysqli_query($con,"SELECT * FROM users");
$num_rows2 = mysqli_num_rows($users);
{
?>
                      Total Patients:<?php echo htmlentities($num_rows2);  } ?>  </h6>
                              
                                <a href="users_db.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-reception-1"></i>Users Info</a>
                              </div>
                      </div>
                      </div>

                      <div class="col-md-4 " >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">DEPARTMENTS
                                <br>
                                     <?php $sql= mysqli_query($con,"SELECT * FROM managedepartments");
$num_rows3 = mysqli_num_rows($sql);
{
?>
                      Total Departments:<?php echo htmlentities($num_rows3);  } ?>  </h6>
                                <a href=" managedepartments.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-doctor"></i>Dept</a>
                              </div>
                      </div>
                      </diV>


                   <div class="col-md-4 " >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Roles
                                   <br>
                                     <?php $sqlcon= mysqli_query($con,"SELECT * FROM manageusercategory");
$num_rows3 = mysqli_num_rows($sqlcon);
{
?>
                      Total Roles:<?php echo htmlentities($num_rows3);  } ?>  </h6>

                                <a href="Manageusercat.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-doctor"></i>Ranks</a>
                              </div>
                      </div>
                      </div>


                </div>
       </div>


<!-- end of row 1 -->
<br>
<!-- start of row 2 -->
        <div class="container">
                <div class="row">
                      <div class="col-md-4" >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Manage Index page</h6>
                                <a href="manage_index_footer.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-reception-1"></i>Home Page & Footer</a>
                              </div>
                      </div>
                      </div>

                      <div class="col-md-4 " >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Manage About</h6>
                                <a href=" manage_about.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-doctor"></i>About page</a>
                              </div>
                      </div>
                      </diV>


                   <div class="col-md-4 " >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Manage Service</h6>
                                <a href="manage_service.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-doctor"></i>Service Page</a>
                              </div>
                      </div>
                      </div>


                </div>
       </div>

<!-- end of row 2 -->

<br>

<!-- start of row 3 -->
        <div class="container">
                <div class="row">
                      <div class="col-md-4" >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Manage Careers</h6>
                                <a href="manage_careers.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-reception-1"></i>Career Page</a>
                              </div>
                      </div>
                      </div>

                      <div class="col-md-4 " >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Manage Contact</h6>
                                <a href=" manage_contacts.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-doctor"></i>Career page</a>
                              </div>
                      </div>
                      </diV>


                   <div class="col-md-4 " >
                      <div class="card" style="width:18rem;">
                              <div class="card-body">
                                <h6 class="card-title text-center">Manage Blog</h6>
                                <a href="manage_blog.php"  class="btn btn-primary" style="margin: 20px auto;display: block;"> <i class="bi bi-doctor"></i>Blog Page</a>
                              </div>
                      </div>
                      </div>


                </div>
       </div>
</div>


<!-- end of row 3 -->


<?php 


}else{
    header("Location:index_login.php");
            exit();
} ?>


      
<?php include 'includes/footer.php' ?>
