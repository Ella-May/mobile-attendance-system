<?php
    session_start();

    require_once "../class/DB.php";
    require_once "../class/StudentInfo.php";

    $studentinfo = new StudentInfo(DB::getInstance());
    $studentInfos = $studentinfo->index();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="stylesheet" href="../public/css/studentinfo.css">
    <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

    <!--Student information Page-->
<body>
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
                        <li><a>User Accounts</a></li>
                        <li><a href="studentinfo.php">Student Information</a></li>
                        <li><a href="schoolpersonnel.php">School Personnel</a></li>
                        <li><a href="facultyload.php">Faculty Loads</a></li>
                        <li><a href="attendancereport.php">Attendance Report</a></li>
                    </ul>
                </div>
                <button class="logoutBtn">Logout</button>
            </div>

    <div class = "main">
        <div class = "stuinfo-table-con">
            <h1>Student Information</h1>
        </div>    

        <!--Display table-->
        <table class = "table">
            <thead>
                <tr>
                    <th>LRN</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Grade Level & Section</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach($studentInfos['studentInfos'] as $studentinfo): ?>
                <tr>
                    <td><?= $studentinfo['LRN'] ?></td>
                    <td><?= $studentinfo['stuLname'].", ".$studentinfo['stuFname']." ".$studentinfo['stuMname'] ?></td>
                    <td><?= $studentinfo['stuSex'] ?></td>
                    <td><?= $studentinfo['stuGrlvl']." - ".$studentinfo['stuSec'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            <i class="fa-solid fa-plus"></i>
            <span>Add Student Information</span>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Student Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--Student Information Form-->
                <form id="studentInfo" method="post" action="../includes/studentinfo/studentinfo.php">
                <div class="mb-3">
                    <label class="form-label" for="Student Last Name">Last Name:</label> 
                    <input class="form-control" type="text" placeholder="Last Name" name = "Student Last Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Student First Name">First Name:</label> 
                    <input class="form-control" type="text" placeholder="First Name" name = "Student First Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Student Middle Name">Middle Name:</label> 
                    <input class="form-control" type="text" placeholder="Middle Name" name = "Student Middle Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Student Sex">Sex:</label> 
                    <select class="form-control" name = " Student Sex"> 
                        <option value= "Male">Male</option>
                        <option value= "Female">Female</option>
                    </select> 
                </div>    
                <div class="mb-3">
                    <label class="form-label" for="Student Address">Complete Address:</label> 
                    <input class="form-control" type="text" placeholder="Address" name = "Student Address">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Student Bday">Birthday:</label> 
                    <input class="form-label" type="date" placeholder="Birthday" name = "Student Bday">
                </div> 
                <div class="mb-3">
                    <label class="form-label" for="Student Strand">Strand:</label> 
                    <input class="form-control" type="text" placeholder="Strand" name = "Student Strand">    
                </div>  
                <div class="mb-3">
                    <label class="form-label" for="Student Grade Level">Grade Level:</label> 
                    <select class="form-control" name = "Student Grade Level"> 
                        <option value= "Grade 11">Grade 11</option>
                        <option value= "Grade 12">Grade 12</option>
                    </select> 
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Student Section">Section:</label> 
                    <input class="form-control" type="text" placeholder="Section" name = "Student Section">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Student Contact Number">Contact Number:</label> 
                    <input type="text" placeholder="Contact Number" name = "Student Contact Number"  pattern="[0-9]{11}">
                </div>    
                <!-- Guardian Information -->
                <div class="mb-3">
                    <label class="form-label" for="Guardian Name">Guardian Name:</label> 
                    <input class="form-control" type="text" placeholder="Guardian Name" name = "Guardian Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Guardian Contact Number">Guardian Contact Number:</label> 
                    <input class="form-control" type="tel" placeholder="Guardian's Contact Number" name = "Guardian Contact Number" pattern="[0-9]{11}">
                </div>         
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="Submmit" class="btn btn-primary" form="studentInfo" name="submitStudent">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
