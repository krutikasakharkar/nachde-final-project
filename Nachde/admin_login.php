<?php 
include('connection.php');

  
?> 
<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <!-- boostrap css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--css link-->
    <link rel="stylesheet" href="style.css">

    

<body>
<?php
    include "navbar.php";
?>
    <div class="container">
        <h2 class="text-center"> Admin Login</h2>
        <div class="row d-flex align-items-center justify-content-center mt-5" >
            <div class="col-lg-12 col-xl-6">
                <!-- /username feild -->
                <form method="POST" action="login1.php">
                <div class="form-outline mb-4">    
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter username" autocomplete="off" required="required">
                    

                <!-- password field -->
                
                <label class="form-label">Passoword</label>
                <input type="password" name="userpassword" class="form-control" placeholder="Enter password" autocomplete="off" required="required">
                <br>
               <button class="btn1">Login</button>
                </form>
                
            </div>
        </div>
    </div>
</body>
</html>
