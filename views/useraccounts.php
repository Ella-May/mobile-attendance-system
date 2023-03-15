<?php
    session_start();
    
    require_once "../../class/DB.php";
    require_once "../../class/UserAccounts.php";

    $useraccount = new UserAccounts(DB::getInstance());
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheets/dashboard.css" rel="stylesheet">
    <title>User Accounts</title>
    <link rel="stylesheet" href="../public/css/dashboard.css">
 <!--  <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">   -->
 </head>
<body onload="rtClock()">

    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="../public/assets/img/nashs-logo.PNG" alt="Nashs Logo">
            </div>
            <div class="nashs">
                Ninoy Aquino Senior High School
            </div>
            <div class="profile">Hello User! <img src="../public/assets/img/sampleimg.PNG" alt="User Profile"></div>
        </header>
    </div>
        <div class="panel">
            <div class="aside1">
                <div class="funcKeys">
                    <ul>
                        <li><a href="useraccounts.php">User Accounts</a></li>
                        <li><a href="studentinfo.php">Student Information</a></li>
                        <li><a href="schoolpersonnel.php">School Personnel</a></li>
                        <li><a href="facultyload.php">Faculty Loads</a></li>
                        <li><a href="attendancereport.php">Attendance Report</a></li>
                    </ul>
                </div>
                <button class="logoutBtn">Logout</button>
            </div>

    <!-- User Accounts table-->
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>Personnel Name</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Try</td>
                <td>Try</td>
                <td>Try</td>
                <td>Try</td>
            </tr>
        </tbody>
    </table>
</body>
</html>