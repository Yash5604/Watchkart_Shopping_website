<?php

    session_start() ;
    if(isset($_SESSION['username'])){
        header('location:user_index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/c14f451072.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Home</title>
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
                            <li> <a href="#" class="active" ><i class="fa-solid fa-house"></i> Home </a></li>
                            <li> <a href="about_us.php"><i class="fa-solid fa-user-group"></i> About us </a></li>
                            <li> <a href="shooping/index.php"><i class="fa-solid fa-cart-shopping"></i> Shopping </a></li>
                            <li> <a href="login_form.php" ><i class="fa-solid fa-right-to-bracket"></i> login </a></li>
                            <li> <a href="register_form.php"><i class="fa-solid fa-right-to-bracket"></i> Signup </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

    <!-- carousel for frontend of website -->
    <div class="container-fluid">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" ></li>
                <li data-target="#myCarousel" data-slide-to="2" ></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="2000">
                    <div class="row align-items-center">
                        <div class="col-xd py-2">
                            <img src="Shooping/upload/watch3.webp"  alt="img-1">
                        </div>
                        <div class="col-md py-2">
                        <h1 style="color:lightblue;font-weight:bold">Hello Customers,</h1>
                        <h1 style="color:lightblue;font-weight:bold">Welcome to Watchkart</h1><br>
                        <h4 style="color:yellow"> Everyone looks at your watch and it represents <br> who you are, your values and your personal style.</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-interval="2000">
                <div class="row align-items-center">
                        <div class="col-xd py-2">
                            <img src="Shooping/upload/watch10.webp"  alt="img-2">
                        </div>
                        <div class="col-md py-2">
                        <h4 style="color:yellow"> Once time has passed , you can't get it back. so make sure you spend every moment of it doing what you love.
                        <p id="rem"class="rem-por">to not waste time you should buy watch to know time</p></h5>
                        <a href="shooping/index.php"><button style="background:lightblue;border-radius:5px;color:blue" class="btn-count" id="buy-btn">Buy now</button></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <div class="row align-items-center">
                        <div class="col-xd py-2">
                            <img src="Shooping/upload/watch16.webp"  alt="img-3">
                        </div>
                        <div class="col-md py-2">
                        <h4 style="color:yellow"> Watches are so named as reminder if you dont watch carefully what you do with your time it can slip away from you.</p>
                        </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
            <a href="#myCarousel" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a href="#myCarousel" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>

    <!-- website-visitors section  -->
    <br><br><br><br>
        <div class="row">
            <div class="col">
                <h1 style="font-weight:bold;color:crimson;text-align:center"> Why choose us ?</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <hr style="height:2px;border-width:0;color:crimson;background-color:crimson;width:auto">
            </div>
            <div class="col-1"></div>
        </div>
         
        <div class="container">
            <div class="box" style="background-color:#C0C0C0;cursor: pointer" id="box1">
            <div class="content">
                    <h4 style="text-align:center;padding-bottom:20px"> Website Visitors </h4>
                    <h3 id="count" style="padding-top:20px;text-align:center;margin-left:20px">0</h3>
            </div>
            </div>
            <div class="box" style="background-color:#C0C0C0; cursor: pointer" id="box2">
            <div class="content">
                <h4 style="text-align:center;width:100%;padding-bottom:20px"> Registered Users </h4>
                <h3 style="padding-top:20px;margin-left:20px;text-align:center">
                <?php
                @include 'config.php' ;
                
                $query = "select id from users_db order by id";
                $query_run = mysqli_query($conn,$query);
                $rows = mysqli_num_rows($query_run) ;
                echo "<h4 style='text-align:center;margin:1rem'>".$rows."</h4>" ;
                 ?>
                 </h3>
            </div>
            </div>
            <div class="box" style="background-color:#C0C0C0; cursor: pointer" id="box3">
            <div class="content">
                <h4 style="padding-bottom:20px"> Watch Available </h4>
                <h3 style="padding-top:20px;margin-left:20px">
                <?php
                $conn = mysqli_connect('localhost','root','','productdb') ;
                
                $query = "select id from producttb order by id";
                $query_run = mysqli_query($conn,$query);
                $rows = mysqli_num_rows($query_run) ;
                echo "<h4 style='text-align:center;margin:1rem'>".$rows."</h4>" ;
                 ?>
                 </h3>
            </div>
            </div>
        </div>
    <!-- counting elements in website -->
    <button type="button" id='btn' class="btn-count"> Count 
    </button>
    <!-- <div class="container-like">
        <div class="btn">
            <h1>Like !</h1>
            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
        </div>
    </div>     -->
    <br> <br>
    <div class="web-footer" style="background-color:dodgerblue">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                    <h4 style="color:white"> Made with ❤️ in India | Copyright &#169; Watchkart 2022 </h4>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

            
        <script>
                
            let count = document.getElementById('count') ;

            function visits_count(){
                fetch('https://api.countapi.xyz/update/laptop/shopping/?amount=1') 
                .then((res) => res.json())
                .then((res) => {
                count.innerHTML = res.value ;
            }) ;
            }
            visits_count() ;
        </script>
        <script src="script.js"></script>
        

</body>
</html>