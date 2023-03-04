<?php
session_start() ;
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_style.css">
    <link rel="stylesheet" href="about_us.css">
    <script src="https://kit.fontawesome.com/c14f451072.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>About us</title>
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
                        <li>
                            <p style="color:yellow">
                            <i class="fa-solid fa-user"></i>
                            <?php
                                echo "Welcome,".$username ;  
                            ?>
                            </p>
                        </li>
                        <li> <a href="index_page.php"><i class="fa-solid fa-house"></i> Home </a></li>
                        <li> <a href="about_us.php" class="active"><i class="fa-solid fa-user-group"></i> About us </a></li>
                        <li> <a href="Shooping/index.php"><i class="fa-solid fa-cart-shopping"></i> Shopping </a></li>
                        <li> <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <br>
    <br><br>
    <div class="team-section">
        <div class="team-container">
                <div class="row">
                    <div class="col">
                        <h1 style="color:crimson;text-align:center;"> Who are we ? </h1>
                    </div>
                </div>
                <div class="row">   
                    <div class="col"><h4 style="color:purple"> We are founders of Watchkart </h5></div>
                </div>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <hr style="height:2px;border-width:0;color:crimson;background-color:crimson;width:100%">
                    </div>
                    <div class="col-1"></div>
                </div>

        </div>
    
    <div class="team-card">
        <div class="row">
        <div class="col-xl-5">
        <div class="card">
            <div class="img-section">
                <img src="image/yash.jpeg" alt="">
            </div>
            <div class="content">
                <h1 style="color:crimson"> Yash Vataliya </h1>
                <h4> CO-FOUNDER & CEO </h4>
				<p><a href="https://www.linkedin.com/in/yash-vataliya-4953aa227" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.github.com/yash5604" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.instagram.com/yash__0419" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJfrLDtVBdpNzbkzfmCGxFrMNDcWwWbgtpWVfnMZfMLnBPCSWxcfKfXzqVvnGSKVfscSgML" target="_blank"><i class="fas fa-envelope email-icon"></i></a>
                </p>
                <h3><i class="fas fa-map-marker-alt location-icon"></i>Bareja,Ahemdabad 382425 </h3>
            </div>
        </div>
        </div>
        <div class="col-xl-1"></div>
        <div class="col-xl-5">
        <div class="card">
            <div class="img-section">
                <img src="image/pritesh.jpeg" alt="">
            </div>
            <div class="content">
                <h1 style="color:crimson"> Pritesh Umraniya </h1>
                <h4> CO-FOUNDER & CTO </h4>
				<p><a href="https://www.linkedin.com/in/pritesh-umraniya-802a2b23a" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.github.com/pritesh2564u" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.instagram.com/pritesh_2564u" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://mail.google.com/mail/u/0/#inbox?compose=cSRfBTZPfqjzLkZmHbkRvgngmcrjkhXGnMZDnkCHZLpjzrSmBtZbhRVLcJPwvZsbfZdgSnTGvCmhDPMfHTLBtczVVGGlwMmFbpZNpjscDhGbgGnnjwddphtWbqRzJwTTqtTsQvFGdsqhggjXNzpCqnCmkmbjxRxq" target="_blank"><i class="fas fa-envelope"></i></a>
                </p>

                    
                    <h3><i class="fas fa-map-marker-alt"></i>Petlad,Anand 388450 </h3>    
            </div>
        </div>
        </div>
        <div class="col-xl"></div>
        </div>
        </div>
        
    </div>
    </div>
    <script src="script.js"></script>
    
</body>
</html>