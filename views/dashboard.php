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
            <div class="main">main
                <div class="box">
                    <ul>
                        <li><a>NO. OF PRESENT STUDENT</a></li>
                        <li><a></a>NO.OF ABSENT STUDENTS</li>
                        <li><a>TOTAL NO.STUDENT</a></li>
                        
                    </ul>
                </div>
    
            </div>
            
        </div>
    </div>
</body>

</html>