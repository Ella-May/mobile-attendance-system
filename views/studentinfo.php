<?php
    session_start();
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
        <div class = "display-stuinfo-table">
            <table class = "stuinfo-table">
                <tr>
                    <th>LRN</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Grade Level & Section</th> 
                </tr>
                <tr>
                    <td><?php echo $rows['stuLRN']; ?></td>
                </tr>
            </table>
        </div>
        
        <!--Student Information Form-->
        <div class = "add-stu-personalinfo-con">
            <form class = "add-stu-personalinfo-form" method = "post">
                <label for="Student Last Name">Last Name:</label> 
                    <input type="text" placeholder="Last Name" name = "Student Last Name">
                <label for="Student First Name">First Name:</label> 
                    <input type="text" placeholder="First Name" name = "Student First Name">
                <label for="Student Middle Name">Middle Name:</label> 
                    <input type="text" placeholder="Middle Name" name = "Student Middle Name">
                <label for="Student Extension Name">Extension Name:</label> 
                    <input type="text" placeholder="Extension Name" name = "Student Extension Name">
                <label for="Student Sex">Sex:</label> 
                    <select name = " Student Sex"> 
                        <option value= "Male">Male</option>
                        <option value= "Female">Female</option>
                    </select> 
                <label for="Student Address">Complete Address:</label> 
                    <input type="text" placeholder="Address" name = "Student Address">
                <label for="Student Bday">Birthday:</label> 
                    <input type="date" placeholder="Birthday" name = "Student Bday">
                <label for="Student Strand">Strand:</label> 
                    <input type="text" placeholder="Strand" name = "Student Strand">
                <label for="Student Grade Level">Grade Level:</label> 
                    <select name = "Student Grade Level"> 
                        <option value= "Grade 11">Grade 11</option>
                        <option value= "Grade 12">Grade 12</option>
                    </select> 
                <label for="Student Section">Section:</label> 
                    <input type="text" placeholder="Section" name = "Student Section">
                <label for="Student Contact Number">Contact Number:</label> 
                    <input type="text" placeholder="Contact Number" name = "Student Contact Number"  pattern="[0-9]{11}">
                <!-- Guardian Information -->
                <label for="Guardian Name">Guardian Name:</label> 
                    <input type="text" placeholder="Guardian Name" name = "Guardian Name">
                <label for="Guardian Contact Number">Guardian Contact Number:</label> 
                <input type="tel" placeholder="Guardian's Contact Number" name = "Guardian Contact Number" pattern="[0-9]{11}">
                <button type="submit">
                    <span>Submit</span>
                </button>
            </form>
        </div>
</body>
</html>
