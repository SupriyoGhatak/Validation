<?php

require("includes/common.php");

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
  $Pname = $_POST['Pname'];
  $Pname = mysqli_real_escape_string($con, $Pname);

  $Id = $_POST['Id'];
  $Id = mysqli_real_escape_string($con, $Id);
  
  $Amt = $_POST['Amt'];
  $Amt = mysqli_real_escape_string($con, $Amt);
  
  $Qty = $_POST['Qty'];
  $Qty = mysqli_real_escape_string($con, $Qty);
  
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $file_extension = explode('.', $filename);
  $file_ext_check = strtolower(end($file_extension));
// allowed extensions
   $allowed_extensions = array('.jpg', 'jpeg', '.png', '.gif');

    if(!in_array($file_ext_check, $allowed_extensions)){

      echo "Failed";
    }//trying to check if there is any file existing with the given predifined array or not.
    
       $folder = "stored_img/".$filename;//The Image stored location
  //$folder = mysqli_real_escape_string($con, $folder);
  move_uploaded_file($tempname, $folder);

//Extracring fronm the database.
  $query = "SELECT * FROM product_details WHERE Id='$Id'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
 
//putting values to the databse
    $query = "INSERT INTO product_details(Pname, Id, Amt, Qty, Img_src)VALUES('" . $Pname . "','" . $Id . "','" . $Amt . "','" . $Qty ."','" . $folder . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['Id'] = $Id;
     header('location: products.php');
    
  
   
  
?>
