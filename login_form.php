<?php

@include 'config.php' ;

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']) ;
    $pass = mysqli_real_escape_string($conn ,$_POST['password']);

    $select = "SELECT * FROM users_db WHERE Username ='$username' && Password ='$pass' ";

    $result = mysqli_query($conn, $select) ; 
    
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result) ;

        session_start() ;
        $_SESSION['username'] = $username ;
        header('location:index_page.php') ;
    }
    else{
        $error[] = 'incorrect username or password' ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="index_style.css">
    <script src="https://kit.fontawesome.com/c14f451072.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Login</title>
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
                        <li> <a href="shopping.php"><i class="fa-solid fa-cart-shopping"></i> Shopping </a></li>
                        <li> <a href="#" class="active" ><i class="fa-solid fa-right-to-bracket"></i> login </a></li>
                        <li> <a href="register_form.php"><i class="fa-solid fa-right-to-bracket"></i> Signup </a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <div class="form-container">
        <form action="" method="post">
             <h3 style="color:darkblue">Login </h3>
             <div class="input">
                <input  type="text" name="username" style="font-family:FontAwesome" placeholder=" &#xf007;  Username" required>
            </div>
            <div class="input-box">  
                <input  type="password" name="password" style="font-family:FontAwesome" id="pass" placeholder=" &#xf023;   Password" required>
                <span>
                    <i class="fa-regular fa-eye-slash eye-icon" onclick="toggle()"></i>
                </span>   
                
            </div>
            <br>    
             

        <input type="submit" name="submit" value="login" class="form-btn">      
        <p style="color:yellow"> Don't have an account ? <a href="register_form.php">Register here</a></p>
        </form>
    </div>
    <script src="script.js"></script>

</body>
</html>