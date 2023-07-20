<?php
    include("connection.php")


    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql= "SELECT * FROM registration WHERE email = '$email' and password='$password'";
        $result=mysqli_master_query($conn,$sql);
        $num= mysqli_num_rows($result);

        if($num > 0){
            header("location:dashboard.php");
        }
        else{
            echo '<script>alert("Email and password is not machting")</script>';
        }
    }
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login form</title>
    <link rel="stylesheet"  href="styles.css">
    <script src="https://kit.fontawesome.com/a4831b3c74.js" crossorigin="anonymous"></script>

   
    </script>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1>Login</h1>
            <form method="POST">
                <div class="input-gp">
                    

                     <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email">

                    </div>

                     <div class="input-field">
                       <i class="fa-solid fa-lock"></i>
                        <input type="Password" placeholder="Password">

                    </div>
                    <p>If you not registered  &nbsp;<a href="#">Sign up</a></p>

                </div>
                <div class="btn-field">
                    <button type="button" >Login</button>
                    
                </div>
            </form>
        </div>
    </div>

</body>
</html>

