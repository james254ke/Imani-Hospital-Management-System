<?php

function access($role,$redirect =true )
{
    if(isset($_SESSION["ACCESS"]) && !$_SESSION["ACCESS"][$role])
    

    {
    	if($redirect){


    	echo "<script type='text/javascript'>
    window.alert('Access Denied');
    window.location.href='access_denied.php';
     </script>";
     die; 
     }


    return false;
    }

   return true; 
}




// ADD ACCESS LEVELS DOWN HERE

// $admin=isset($_SESSION['role']) && trim( $_SESSION['role'])=="Admin";

$_SESSION ["ACCESS"]["ADMIN"]=isset($_SESSION['role']) && trim( $_SESSION['role'])=="Admin"; 

// $doctor=isset($_SESSION['role']) &&trim($_SESSION['role'])  =="Doctor";
$_SESSION["ACCESS"]["DOCTOR"]=isset($_SESSION['role']) &&trim($_SESSION['role'])  =="Doctor"||trim( $_SESSION['role'])=="Admin" ;

// $receptionist=isset($_SESSION['role']) && trim($_SESSION['role'] )=="Reception Desk";

$_SESSION["ACCESS"]["RECEPTION"]=isset($_SESSION['role']) && trim($_SESSION['role'] )=="Reception" || trim( $_SESSION['role'])=="Admin";

//access rules for lab
$_SESSION["ACCESS"]["LABORATORY"]=isset($_SESSION['role']) && trim($_SESSION['role'] )=="Laboratory" || trim( $_SESSION['role'])=="Admin";

//access rules for HR
$_SESSION["ACCESS"]["HUMAN RESOURCE"]=isset($_SESSION['role']) && trim($_SESSION['role'] )=="HR" || trim( $_SESSION['role'])=="Admin";

// var_dump($receptionist);




 ?> 