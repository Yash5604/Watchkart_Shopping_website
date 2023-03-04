<?php

@include 'config.php' ;

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn,$_POST['username']) ;
    $first_name = mysqli_real_escape_string($conn , $_POST['first_name']) ;
    $last_name = mysqli_real_escape_string($conn , $_POST['last_name']) ;
    $email = mysqli_real_escape_string($conn , $_POST['email']) ;

    $pass = mysqli_real_escape_string($conn ,$_POST['pass']);
    $cpass = mysqli_real_escape_string($conn , $_POST['cpass']);

    $select = "SELECT * FROM users_db WHERE  Username = '$username' && Email ='$email' && Password ='$pass' ";

    $result = mysqli_query($conn, $select) ; 
    
    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exist' ;
    }
    else{

        if($pass != $cpass){
            $error[] = 'Password not matched!' ;
        }
        else{
            $insert = "INSERT INTO `users_db`(`Username`,`First name`, `Last Name`, `Email`, `Password`) VALUES ('$username','$first_name','$last_name','$email','$pass')" ;
            mysqli_query($conn,$insert) ;
            header('location:login_form.php') ;
        }   
    }
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c14f451072.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>   
    <header class="header">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="logo">
                        <h1 style="color:white">Watchkart</h1>
                    </div>
                    <button type="button" class="nav-toggler">
                        <span></span>
                    </button>
                    <nav class="nav">
                        <ul>
                            <li> <a href="index_page.php"><i class="fa-solid fa-house"></i> Home </a></li>
                            <li> <a href="about_us.php"><i class="fa-solid fa-user-group"></i> About us </a></li>
                            <li> <a href="Shooping/index.php"><i class="fa-solid fa-cart-shopping"></i> Shopping </a></li>
                            <li> <a href="login_form.php" ><i class="fa-solid fa-right-to-bracket"></i> login </a></li>
                            <li> <a href="#" class="active"><i class="fa-solid fa-right-to-bracket"></i> Signup </a></li>

                        </ul>
                    </nav>
                </div>
            </div>
    </header>
    <div class="form-container">
        <form action="" method="post">
             <h3 style="color:darkblue">Register</h3>
             <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>' ;
                    }
                };
             ?>
             <br>
             <input type="text" style="font-family:'FontAwesome'" name="username" placeholder=" &#xf007;  Username" required>
             <input type="text" style="font-family:'FontAwesome'" name="first_name" placeholder=" &#xf007; First name" required>
             <input type="text" style="font-family:'FontAwesome'" name="last_name" placeholder=" &#xf007; Last name" required >
             <input type="email" style="font-family:'FontAwesome'" name="email" placeholder=" &#xf0e0;  email" required>

             <div class="input-box">
             <input type="password" style="font-family:'FontAwesome'" name="pass" id="pass" placeholder=" &#xf023; Password" required>
                <span>
                    <i class="fa-regular fa-eye-slash eye-icon" onclick="toggle()"></i>
                </span>
            </div>
            <div class="input-box">
             <input type="password" style="font-family:'FontAwesome'"name="cpass" id="cpass" placeholder=" &#xf023; Confirm  Password" required>
                <span>
                    <i class="fa-regular fa-eye-slash eye-icon" onclick="toggle2()"></i>
                </span>
            </div>

        <input type="submit" name="submit" id="submit" value="Register" class="form-btn">      
        <p style="color:yellow">Already have an account ? <a href="login_form.php">login now</a></p>
        </form>
        
    </div>
    <script src="script.js"></script>

</body>
</html>