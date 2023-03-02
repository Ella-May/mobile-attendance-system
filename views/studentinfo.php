<?php
    session_start();

    require_once "../class/DB.php";
    require_once "../class/FacultyLoad.php";

    $studentinfo = new StudentInfo(DB::getInstance());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
</head>

    <!--Student information Page-->
<body>
    <main class = "studentinfo-main">
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
                <?php foreach($datas['studentInfos'] as $studentinfo): ?>
                <tr>
                    <td><?= $studentinfo['LRN'] ?></td>
                    <td><?= $studentinfo['stuLname'].", ".$studentinfo['stuFname']." ".$studentinfo['stuMname'] ?></td>
                    <td><?= $studentinfo['stuSex'] ?></td>
                    <td><?= $studentinfo['stuGrlvl']." - ".$studentinfo['stuSec'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        
        <!--Student Information Form-->
            <form class="studentInfo" method="post" action="../includes/studentinfo/studentinfo/php">
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
                <div>
                    <label for="Student Sex">Sex:</label> 
                    <select name = " Student Sex"> 
                        <option value= "Male">Male</option>
                        <option value= "Female">Female</option>
                    </select> 
                </div>    
                <div>
                    <label for="Student Address">Complete Address:</label> 
                    <input type="text" placeholder="Address" name = "Student Address">
                </div>
                <div>
                    <label for="Student Bday">Birthday:</label> 
                    <input type="date" placeholder="Birthday" name = "Student Bday">
                </div> 
                <div>
                    <label for="Student Strand">Strand:</label> 
                    <input type="text" placeholder="Strand" name = "Student Strand">    
                </div>  
                <div>
                    <label for="Student Grade Level">Grade Level:</label> 
                    <select name = "Student Grade Level"> 
                        <option value= "Grade 11">Grade 11</option>
                        <option value= "Grade 12">Grade 12</option>
                    </select> 
                </div>
                <div>
                    <label for="Student Section">Section:</label> 
                    <input type="text" placeholder="Section" name = "Student Section">
                </div>
                <div>
                    <label for="Student Contact Number">Contact Number:</label> 
                    <input type="text" placeholder="Contact Number" name = "Student Contact Number"  pattern="[0-9]{11}">
                </div>    
                <!-- Guardian Information -->
                <div>
                    <label for="Guardian Name">Guardian Name:</label> 
                    <input type="text" placeholder="Guardian Name" name = "Guardian Name">
                </div>
                <div>
                    <label for="Guardian Contact Number">Guardian Contact Number:</label> 
                    <input type="tel" placeholder="Guardian's Contact Number" name = "Guardian Contact Number" pattern="[0-9]{11}">
                </div>         
                <button type="submit">
                    <span>Submit</span>
                </button>
            </form>
        </div>
</body>
</html>
