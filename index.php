<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add details</title>
        

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--Adding the bootstrap links-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<!--The main body-->.
<body class="whole">
     <?php include "includes/header.php"; ?>
    <div class="container bk">
        <div class="row">
            

            <div class="col-sm-5">
                <!--Making the form-->.
                <h2 style="color:coral">ADD DETAIL</h2>
                <!--The Form class-->
                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Product_Name" name="Pname" required>
                        </div>

                        
                                                
                        <div class="form-group col-sm-10">
                            <input class="form-control" placeholder="Product_Id" name="Id" required>
                            <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                                ?>
                        </div>

                        <div class="form-group col-sm-10">
                                <input class="form-control" placeholder="Amount" name="Amt" required>
                        </div>

                                

                        <div class="form-group col-sm-10">
                            <input  type="Number" class="form-control"  placeholder="Quantity" name="Qty"  required >
                        </div>
                        
                       <div class="form-group col-sm-10">
                           <input  type="file" class="form-control"  placeholder="Upload pic" name="uploadfile"  value="" />
                           
                        </div>
                            
                                    
                        

                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>  
                        

                </form>
        </div>
    </div>
    </div>
    
    </body>
</html>
