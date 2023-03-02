<?php  
    session_start();

    //include_once "../includes/facultyload/facultyload.php"

    require_once "../class/DB.php";
    require_once "../class/FacultyLoad.php";

    $facultyload = new FacultyLoad(DB::getInstance());
    $datas = $facultyload->index();
?>

<!DOCTYPE html>
<html lang = en>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Load</title>
    <link rel="stylesheet" href="../public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header></header>
    <main></main>
    <aside></aside>
    <table class="table">
        <thead>
            <tr>
                <th>Subject Name</th>
                <th>Grade Level</th>
                <th>Strand</th>
                <th>Section</th>
                <th>Day</th>
                <th>Time</th>
                <th>Teacher</th>
            </tr>
        </thead>
            <tbody>
                <?php foreach($datas['facultyLoads'] as $facultyload): ?>
                    <tr>
                        <td><?= $facultyload['subjName'] ?></td>
                        <td><?= $facultyload['subjGradelevel'] ?></td>
                        <td><?= $facultyload['subjStrand'] ?></td>
                        <td><?= $facultyload['subjSec'] ?></td>
                        <td><?= $facultyload['subjDay'] ?></td>
                        <td><?= $facultyload['subjTimeStart']." - ".$facultyload['subjTimeEnd'] ?></td>
                        <td><?= $facultyload['perLname'].", ".$facultyload['perFname']." ".$facultyload['perMname']?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            <i class="fa-solid fa-plus"></i>
            <span>Add New Subject</span>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Subject Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="subjInfo" method="post" action="../includes/facultyload/facultyload.php">
                <select class="form-select" aria-label="Default select example" name="personnel">
                    <option selected>Open this select menu</option>
                    <?php foreach($datas['personnelInfos'] as $personnel): ?>
                        <option value="<?=  $personnel['perID'] ?>"><?=  $personnel['perLname'].", ".$personnel['perFname']." ".$personnel['perMname'] ?></option>
                    <?php endforeach; ?>
                </select>
                    <div class="mb-3">
                        <label class="form-label" for="subjName">Subject Name:</label>
                        <input class="form-control" id="subjName" type="text" placeholder="Subject Name" name="subjName">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="subjGradeLevel">Grade Level:</label>
                        <input class="form-control" id="subjGradeLevel" type="text" placeholder="Grade Level" name ="subjGradeLevel">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="subjStrand">Strand:</label>
                        <input class="form-control" id="subjStrand" type="text" placeholder="Strand" name="subjStrand">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="subjSection">Section:</label>
                        <input class="form-control" id="subjSection" type="text" placeholder="Section" name ="subjSection"> 
                    </div>  
                    <div class="mb-3">
                        <label class="form-label" for="subjDay">Day:</label>
                        <input class="form-control" id="subjDay" type="text" placeholder="Day" name ="subjDay">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="subjTimeStart">Subject Time Start:</label>
                        <input class="form-control" id="subjTimeStart" type="time" placeholder="Time" name ="subjTimeStart">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="subjTimeEnd">Subject Time End:</label>
                        <input class="form-control" id="subjTimeEnd" type="time" placeholder="Time" name ="subjTimeEnd">     
                    </div>     
                </form>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" form="subjInfo" name="submitSubj">Save changes</button>
            </div>
            </div>
        </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- <script src="../public/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../public/assets/bootstrap/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>