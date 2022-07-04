<?php 	

session_start();

// echo "hello"; after creating the index_login we start to create the form processor for our login sessions 

$databaz_con=mysqli_connect("localhost","root","","hmsbd");
 
if (!$databaz_con) {
	echo "Connection Failed!";
}

if (isset($_POST['uemail']) &&isset($_POST['upassword'])) {
  
  function validate($data){
  	$data=trim($data);
  	$data=stripcslashes($data);
  	$data=htmlspecialchars($data);
  	return $data;




  }

	$uemail=validate($_POST['uemail']);
	$upassword=validate($_POST['upassword']);

	if (empty($uemail)) {
		header("Location:index_login.php?error=User Email is Required");
	    exit();

	}else if(empty($upassword)){
		header("Location:index_login.php?error=User Password is Required");
	    exit();
  

	}else{
		
		$fetchdata=mysqli_query($databaz_con,"SELECT *FROM users WHERE email='$uemail' AND password='$upassword'");

		if(mysqli_num_rows($fetchdata)===1){
			$checkrow=mysqli_fetch_assoc($fetchdata);

			if($checkrow['email']===$uemail && $checkrow['password']===$upassword){

				$_SESSION['email']=$checkrow['email'];
				$_SESSION['user_name']=$checkrow['user_name'];
				$_SESSION['id']=$checkrow['id'];
				$_SESSION['role']=$checkrow['role'];


				echo "
    <script>

    window.alert('You are  logged in ');
    window.location.href='home.php?.$checkrow.';
    </script>";

				// header("Location:home.php");
				//     exit();


				
			 }else{
				header("Location:index_login.php?error=Incorrect Email or Password");
				    exit();

		}	

	}else{
		header("Location:index_login.php?error=Incorrect Email or Password");
	    exit();

	}
}

	
}else{
	header("Location:index_login.php");
	exit();
}


 ?>