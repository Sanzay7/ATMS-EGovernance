<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-************" crossorigin="anonymous" />
</head>

<body>

    <header>
    <h1>AIRLINE TRAFFIC MANAGEMENT SYSTEM</h1>
    </header>
    
    <div class="container-main">
        <div class="container-left">
            <img src="./Images/logo.png" alt="logo" class="images">
            <h3>Welcome to the Pilot Login Portal!</h3>
            <form action="#" method="post">
                <div class="form-field">
                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                </div>
                <div class="form-field">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                </div>
                <div class="form-field">
                    <a href="#" class="forgot">Forgot Password?</a>
                </div>
                <div class="form-field">
                    <input type="submit" name="login" value="login">
                </div>
            </form>
            
        </div>
        <div class="container-right">
            <img src="./Images/pilot.jpg" alt="pilot" >
        </div>
    </div>
<?php
include("connection.php");
if(isset($_POST['login']))
{
    $username=$_POST['email'];
    $pwd = $_POST['password'];
    $query= "SELECT * FROM id_pass WHERE email='$username' && password='$pwd'";
    $result = mysqli_query($conn,$query);
    $total= mysqli_num_rows($result);
    if($total == 1)
    {
?>

        <meta http-equiv = "refresh" content = "0; url = http://localhost/ATMS-Egovernance/eg/" />
    
<?php
    }
    else{

        echo' <h1 style="text-align: center; color: red; font-family: "Wibledon", sans-serif; justify-content: flex-end;"> LOGIN FAILED!!</h1>';
    
    }
}
?>
</body>

</html>

<!-- http://localhost/ATMS-Egovernance/FinalFolder/aeroplane.html -->
