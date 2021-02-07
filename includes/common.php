<?php
    $con = mysqli_connect("localhost", "root", "", "new_mobiles")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>