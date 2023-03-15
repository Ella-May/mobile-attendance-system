<?php
    session_start();

    require_once "../../class/DB.php";
    require_once "../../class/AttendanceReport.php";

    $attendreport = new AttendanceReport(DB::getInstance());
    $datas = $attendreport->index();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Report</title>
    <link rel="stylesheet" href="../../public/css/attendancereport.css">
    <link rel="stylesheet" href="../../public/assets/bootstrap/css/bootstrap.min.css">
</head>   
<body>
    <!-- Modules Tab -->
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="../../public/assets/img/nashs-logo.PNG" alt="Nashs Logo">
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
    <!-- Attendance Report table -->
    <div class="attendreport-tbl">
        <div>
            <h3>Attendance Report</h3>
            <p>For the Month of </p>
            <select>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Subject Name</th>
                    <th>Grade Level & Section</th>
                    <th>Faculty Member</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datas['attendReports'] as $attendreport): ?>
                <tr>
                    <td><?= $attendreport['subjName'] ?></td>
                    <td><?= $attendreport['subjGrlvl']." - ".$attendreport['subjSec'] ?></td>
                    <td><?= $attendreport['perLname'].", ".$attendreport['perFname']." ".$attendreport['perMname']?></td>
                    <td>
                        <button>Generate</button>
                        <button>Print</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>