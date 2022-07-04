<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IMANI HMS lOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	    <link rel="stylesheet" href="icons/font/bootstrap-icons.css">
</head>
<body>

	<form action="login.php" method="post">
		<h2 style="color:skyblue;"> <i class="bi bi-hospital-fill me-2"></i>Imani HMS Login</h2>
              
              <?php if(isset($_GET['error'])) { ?>
              	<p class="error"> <?php echo $_GET['error']; ?></p>

              <?php } ?>

             <label>User Email</label>
             <input type="email" name="uemail" placeholder="Enter Email" >

             <label>User Password</label>
             <input type="password" name="upassword" placeholder="Enter Password" >

             <button type="submit">Login</button>



	</form>


</body>
</html>