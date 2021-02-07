<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
   
<head>
        <title>E-mobile</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="./css/style.css">
    
</head>
   
<body style="padding-top: 50px;" class="back">
            <!-- Header file -->
    <?php
        include 'includes/header.php';
    ?>
                   
    <div class="container new">
       
        <h1><center><strong>DATABASE</strong></center></h1>
    <hr>
     
        <div class="row">
            <div class="col-sm-3" >
               <div class="panel-group">
               
               <div class="panel panel-default">
                    <div class="panel-heading color">
                        <h3 style="color:orange"><strong>BRANDS</strong></h3>
                    </div>
                    <div class="panel-body">
                       <div class="rmvb">
                           <!--Trying to make a filter -->.
                           <p><a href="#ios"><span style="color:black">APPLE</span></a></p>
                           <p><a href="#samsung"><span style="color:black">SAMSUNG</span></a></p>
                           <p><a href="#oneplus"><span style="color:black">ONEPLUS</span></a></p>
                            <p><a href="#xiaomi"><span style="color:black">XIAOMI</span></a></p>
                             <p><a href="#realme"><span style="color:black">REALME</span></a></p>
                              <p><a href="#redmi"><span style="color:black">REDMI</span></a></p>
                        </div>
                    </div>
                </div>
               <br>
             
                </div>
            </div>
            
            
            <div class="col-sm-9 text-center">
                <div class="panel-group">
                  <!----------------------------------------------------The Database----------------------------------->
                   <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:crimson"><strong>THE DATABASE</strong></h3>
                        </div>
                       
                           <div class="table-responsive">
                                <table border="3" class="table table-hover">
                                    <tr><!--making the the row-->
                                        <th><strong>ID</strong></th><!--making the the coloumns of the row-->
                                        <th><strong>Product Name</strong></th>
                                        <th><strong>Price</strong></th>
                                        <th><strong>Quantity</strong></th>
                                        <th><strong>Pic</strong></th>
                                    </tr>
                           
                   <!--Linking it with php-->
                           <?php
                            $query = "SELECT * from product_details";
                            $data = mysqli_query($con, $query);
                            $total = mysqli_num_rows($data);
                            
                            if($total !=0){
                                while ($result= mysqli_fetch_assoc($data))
                                {
                                    echo "
                                        <tr>
                                        <td>".$result['Id']."</td>
                                        <td>".$result['Pname']."</td>
                                        <td>".$result['Amt']."</td>
                                        <td>".$result['Qty']."</td>
                                        <td><img src='".$result['Img_src']."' height='100' width='100'/></td>
                                        </tr>
                                        ";
                                    
                                }
                            }
                            else{
                                echo "No record found";
                                
                            }
                           
                           
                           ?>
                       </table>
                       
                       </div>      
                   
                    </div>
                </div>     
              </div>
           </div>
     </div>
</body>
</html>
    