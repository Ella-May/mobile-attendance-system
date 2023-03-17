<?php
    session_start();

    require_once "../../class/DB.php";
    require_once "../../class/StudentInfo.php";

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
    <link rel="stylesheet" href="../../public/css/studentinfo.css">
    <link rel="stylesheet" href="../../public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

    <!--Student information Page-->
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
            <div class="profile">Hello User! <img src="../../public/assets/img/sampleimg.PNG" alt="User Profile"></div>
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

    <div class = "main">
        <div class = "stuinfo-table-con">
            <h1>Student Information</h1>
        </div>    

    <div class="col-lg-4">
        <!-- Button Modal -->
        <button type="button" class="btn btn-block btn-gray-800 mb-3" data-bs-toggle="modal" data-bs-target="#modal-form-signup" onclick="clearData()">Add Student</button>
        <!-- Modal Content -->
        <div class="modal fade" id="modal-form-signup" tabindex="-1" role="dialog" aria-labelledby="modal-form-signup" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card p-3 p-lg-4">
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h4">Student Information</h1>
                            </div>
                            <form action="../../includes/studentinfo/studentinfo.php" class="mt-4">
                                <!-- Form -->
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Learner's Reference No.</label>
                                        <input class="form-control" type="text" id='LRN' name='LRN' placeholder="Learner's Reference No." required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text" id='lastname' name='lastname' placeholder="Student's Last Name" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text" id='firstname' name='firstname' placeholder="Student's First Name" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Middle Name</label>
                                        <input class="form-control" type="text" id='midname' name='midname' placeholder="Student's Middle Name">
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Sex</label>
                                        <select class="form-control" type="text" id='stu_sex' name='stu_sex' required>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Birthday</label>
                                        <input class="form-control" type="date" id='stu_bday' name='stu_bday' required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input class="form-control" type="text" id='age' name='age' placeholder="Student's Age" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Home Address</label>
                                        <input class="form-control" type="text" id='address' name='address' placeholder="Student's Address" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input class="form-control" type="text" id='con_number' name='con_number' placeholder="Student's Contact Number" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Grade Level</label>
                                        <select class="form-control" type="text" id='stu_gradelvl' name='stu_gradelvl' required>
                                            <option>Grade 11</option>
                                            <option>Grade 12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Strand</label>
                                        <input class="form-control" type="text" id='stu_strand' name='stu_strand' placeholder="Strand" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Section</label>
                                        <input class="form-control" type="text" id='section' name='section' placeholder="Section" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Guardian's Name</label>
                                        <input class="form-control" type="text" id='gur_name' name='gur_name' placeholder="Guardian's Full Name" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group">
                                        <label>Guardian's Contact Number</label>
                                        <input class="form-control" type="text" id='gur_number' name='gur_number' placeholder="Guardian's Contact Number" required>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-gray-800" id='submitStudent' name='submitStudent'>Sign up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Modal Content -->
            <script type="text/javascript">
                function clearData(){
                    document.getElementById('studentID').value = '';
                    document.getElementById('LRN').value = '';
                    document.getElementById('lastname').value = '';
                    document.getElementById('firstname').value = '';
                    document.getElementById('midname').value = '';
                    document.getElementById('stu_sex').value = '';
                    document.getElementById('stu_bday').value = '';
                    document.getElementById('age').value = '';
                    document.getElementById('address').value = '';
                    document.getElementById('con_number').value = '';
                    document.getElementById('stu_gradelvl').value = '';
                    document.getElementById('stu_strand').value = '';
                    document.getElementById('section').value = '';
                    document.getElementById('gur_name').value = '';
                    document.getElementById('gur_number').value = '';
                }
            </script>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
