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
    <link rel="stylesheet" href="../public/css/dashboard.css">
 <!--  <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">   -->
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
    </div>
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
        
<!-----------==========================MID PANEL===================-->

        <div class="main">
            <h1></br>Dashboard</h1> 
            <div class"date-time>
                <span id='day'></span>
                <span id='month'></span>
                <span id='year'></span>
                <span id='hours'></span>
                <span id='minutes'></span>
                <span id='seconds'></span>
            </div>
            

            <div class="StatBox">

                <div class="info">NO. OF PRESENT STUDENTS</div>
                <div class="info">NO. OF ABSENT STUDENTS</div>
                <div class="info">TOTAL NO. OF STUDENTS</div>
                   
            </div>     
                
        </div>
        </div>
        
        <script>
                var d = new Date();
                document.getElementById('day').innerHTML=d.getDate();
                var m = new Date();
                document.getElementById('month').innerHTML=m.getMonth()+1;
                var y = new Date();
                document.getElementById('year').innerHTML=y.getFullYear()+1;
                var h = new Date();
                document.getElementById('hours').innerHTML=h.getHours()+1+" :";
                var m = new Date();
                document.getElementById('minutes').innerHTML=m.getMinutes();
                var s = new Date();
                document.getElementById('seconds').innerHTML=s.getSeconds();
        </script>
</body>

</html>