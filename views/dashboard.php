<?php
    session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheets/dashboard.css" rel="stylesheet">
    <title>Dashboard</title>
    <link rel="stylesheet" href="stylesheets/dashboard.css">
    <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="../public/assets/img/nashs-logo.PNG" alt="Nashs Logo">
            </div>
            <div class="nashs">
                Ninoy Aquino Senior High School
            </div>
            <div class="profile">Hello User!   <img src="../public/assets/img/sampleimg.PNG" alt="User Profile"></div>
        </header>
        <div class="panel">
            <div class="aside1">
                <div class="funcKeys">
                    <ul>
                        <li><a>User Accounts</a></li>
                        <li><a>Student Information</a></li>
                        <li><a>School Personnel</a></li>
                        <li><a>Faculty Loads</a></li>
                        <li><a>Attendance Report</a></li>
                    </ul>
                </div>
                <button class="logoutBtn">Logout</button>
            </div>
        </div>
<!-----------==========================MID PANEL===================-->

        <div class="col-sm-6 dashboard">
            <h1></br>Dashboard</h1>      
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid ullam a adipisci quibusdam quidem ut doloremque maiores ipsa eum culpa! Numquam quisquam provident minima autem est fugiat amet vel rerum?.</p> 
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, vel dignissimos vitae perspiciatis dolorum nihil reiciendis facere explicabo non saepe a incidunt veritatis veniam quae adipisci, eum quo beatae id!</p>         
        </div>
    </div>
</body>

</html>