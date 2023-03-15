<?php
    session_start();

    require_once "../class/DB.php";
    require_once "../class/UserAccounts.php";

    $useraccount = new UserAccounts(DB::getInstance());
    $useraccount = $useraccount->index();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="stylesheets/dashboard.css" rel="stylesheet">
    <title>Dashboard</title>
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
            <div class="profile">Hello <?= $useraccount['userName'] ?>! <img src="../public/assets/img/sampleimg.PNG" alt="User Profile"></div>
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
        
<!-----------==========================MID PANEL===================-->

        <div class="main">
            <h1></br>Dashboard</h1> 
            <h2>
                <span id='day'></span>
                <span id='month'></span>
                <span id='year'></span>
                <span id='hours'></span>
                <span id='minutes'></span>
                <span id='seconds'></span>
            </h2>
            
            

            <div class="StatBox">

                <div class="info">NO. OF PRESENT STUDENTS</div>
                <div class="info">NO. OF ABSENT STUDENTS</div>
                <div class="info">TOTAL NO. OF STUDENTS</div>
                   
            </div>     
                
        </div>
        </div>
        <!-- Clock -->
        <script type="text/javascript">
            function updateClock(){
                var now= new Date;
                var mon = now.getMonth();
                var day = now.getDate();
                var year = now.getFullYear();
                var hrs = now.getHours();
                var mins = now.getMinutes();
                    sec= now.getSeconds();
                document.getElementById('month').innerHTML=mon+1;
                
                document.getElementById('day').innerHTML=day;
                
                document.getElementById('year').innerHTML=year;
                
                document.getElementById('hours').innerHTML=hrs+" :";
                
                document.getElementById('minutes').innerHTML=mins;
                document.getElementById('seconds').innerHTML=sec;
            }

            function rtClock(){
                updateClock();
                window.setInterval("updateClock()",1);
            }
        </script>
</body>

</html>