<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Attendance Portal </title>
    <link rel="stylesheet" href="../public/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!--FONTS-->
        <!--Comfortaa-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
        <!--Jost-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <main class="login-main"> 
        <div class="login-con">
            <!--LOG IN-->
            <div class="login-form-con"> 
                <div class="login-title-form">
                    <h1 class="login-con-title">Login</h1>
                    <form class="login-form" method="post" action="../includes/login.php">
                        <input type="text" name="username" placeholder="Username" name="username"/> 
                        <input type="password" name="password" placeholder="Password" name="password"/>
                        <button type="submit">
                            <span>Login</span>
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="img-con">
                <img src="../public/assets/img/sampleimg.PNG" alt="School Bag">
            </div>
        </div>
    </main>
</body>
</html>