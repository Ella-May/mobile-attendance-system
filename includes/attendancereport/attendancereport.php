<?php

    require_once "../../class/DB.php";
    require_once "../../class/AttendanceReport.php";

    $attendreport = new AttendanceReport(DB::getInstance());
    $data = $attendreport->index();