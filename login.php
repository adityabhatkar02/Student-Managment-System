<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>login form</title> 
    <link rel="stylesheet" href="Stud1.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    type="text/css" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <body>
        <?php include 'menu.php';?>
        <!---->
        <div class="login-box">
            <h1>login</h1>
            <form action="" action="index.php" method="post" class="p-4">
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="username" name="" value="" required>
            </div>    
            <div class="textbox">
                <i class="fa fa-key" aria-hidden="true"></i>

                <input type="password" placeholder="password" name="" value="" required>
            </div>
            <div class="form-group">
              <label for="userType"> <h5>I'm a:</h5> </label><br>
                <input type="radio" name="userType" value="student" class="custom-radio" required> Student |
                  <input type="radio" name="userType" value="Teacher" class="custom-radio" required> Teacher |
                <input type="radio" name="userType" value="Admin" class="custom-radio" required>Admin

            </div>
          
            
            <input class='btn btn-default btn-success' type="button" name="Signin" value="Sign in">
            
            </form>
        </div>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



    </body>
    </html>   