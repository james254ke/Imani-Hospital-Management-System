<?php   

session_start();


if (isset($_SESSION['email']))

 {
    unset($_SESSION['email']);
}

if (isset($_SESSION['user_name']))

 {
    unset($_SESSION['user_name']);
}



echo "
    <script>

    window.alert('You are now logged out');
    window.location.href='index_login.php?.$checkrow.';
    </script>";



 ?>
