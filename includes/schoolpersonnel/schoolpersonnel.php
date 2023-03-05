<?php

    require_once "../../class/DB.php";
    require_once "../../class/SchoolPersonnel.php";

    $schoolpersonnel = new SchoolPersonnel(DB::getInstance());
    $schoolpersonnel->store($_POST['submitPersonnel']);

