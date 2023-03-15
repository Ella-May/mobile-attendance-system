<?php
    session_start();

    require_once "../../class/DB.php";
    require_once "../../class/SchoolPersonnel.php";

    $schoolpersonnel = new SchoolPersonnel(DB::getInstance());
    $schoolPersonnels = $schoolpersonnel->index();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Personnel</title>
    <link rel="stylesheet" href="../../public/css/schoolpersonnel.css">
    <link rel="stylesheet" href="../../public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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

    <!--Display School Personnel Info-->
        <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($schoolPersonnels['schoolPersonnels'] as $schoolpersonnel): ?>
            <tr>
                <td><?= $schoolpersonnel['perLname'].", ".$schoolpersonnel['perFname']." ".$schoolpersonnel['perMname'] ?></td>
                <td><?= $schoolpersonnel['perPosition'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            <i class="fa-solid fa-plus"></i>
            <span>Add School Personnel</span>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- School Personnel Info -->
                <form id="schoolpersonnelinfo" method="post" action="../includes/schoolpersonnel/schoolpersonnel.php">
                <div class="mb-3">
                    <label class="form-label" for="Personnel Last Name">Last Name:</label>
                    <input class="form-control" type="text" placeholder="Last Name" name = "Personnel Last Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Personnel First Name">First Name:</label>
                    <input class="form-control" type="text" placeholder="First Name" name = "Personnel First Name">
                </div>
                <div class="mb-3"> 
                    <label class="form-label" for="Personnel Middle Name">Middle Name:</label>
                    <input class="form-control" type="text" placeholder="Middle Name" name="Personnel Middle Name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="Personnel Address">Complete Address:</label>
                    <input class="form-control" type="text" placeholder="Address" name="Personnel Address">
                </div>   
                <div class="mb-3">
                    <label class="form-label" for="Personnel Contact Number"> Contact Number:</label>
                    <input class="form-control" type="tel" placeholder="Contact Number" name="Personnel Contact Number" pattern="[0-9]{11}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for = "Personnel Position">Position:</label>
                    <select class="form-control" name = "Personnel Position">
                        <option value = "Faculty">Faculty</option>
                        <option value = "Clinician">Clinician</option>
                        <option value = "Security">Security</option>
                    </select>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="Submit" class="btn btn-primary" form="schoolpersonnelinfo" name="submitPersonnel">Save changes</button>
            </div>
            </div>
        </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>