<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stylesheets/dashboard.css">
    <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="container-fluid">
<div class="row container" >
        <div class="col-sm-3 p-3" >

<!-----------==========================LEFT PANEL===================-->
            <div class="p-3 Lpanel" >
                    <div class="prof_pic" >
                        <img src="blank-profile.webp" alt="profile picture" width="80px" height="80px">
                    </div>
                    <div class="username" ><h3>Juan Tamad</h3></div>
                
                <div class="nav_btn">
                    <ul id="modules-tab">
                        <li> <a href="studentinfo.php">Student Information</a></li>
                        <li> <a href="schoolpersonnel.php">School Personnel</a></li>
                        <li> <a href="facultyload.php">Faculty Loads</a></li>
                    </ul>
                </div>
            </div>
        </div>
<!-----------==========================MID PANEL===================-->

        <div class="col-sm-6 dashboard" >
            <h1></br>Dashboard</h1>      
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid ullam a adipisci quibusdam quidem ut doloremque maiores ipsa eum culpa! Numquam quisquam provident minima autem est fugiat amet vel rerum?.</p> 
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, vel dignissimos vitae perspiciatis dolorum nihil reiciendis facere explicabo non saepe a incidunt veritatis veniam quae adipisci, eum quo beatae id!</p>         
        </div>
<!-----------==========================RIGHT PANEL===================-->

        <div class="col-sm-3 R_panel">
            <h1>My right panel</h1>      
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, vel dignissimos vitae perspiciatis dolorum nihil reiciendis facere explicabo non saepe a incidunt veritatis veniam quae adipisci, eum quo beatae id!</p> 
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, vel dignissimos vitae perspiciatis dolorum nihil reiciendis facere explicabo non saepe a incidunt veritatis veniam quae adipisci, eum quo beatae id!</p> 
        </div>
    </div>    
</body>
</html>