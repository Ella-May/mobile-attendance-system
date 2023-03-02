<?php

    require_once "../../class/DB.php";
    require_once "../../class/FacultyLoad.php";

    $facultyload = new FacultyLoad(DB::getInstance());
    $facultyload->store($_POST['submitSubj']);
