<?php 
    include('php/db.php');
    unset($_SESSION[admin_user][id]);
    header("location: home.php");  
?>