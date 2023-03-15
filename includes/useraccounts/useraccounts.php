<?php

    require_once "../../class/DB.php";
    require_once "../../class/UserAccounts.php";

    $useraccount = new UserAccounts(DB::getInstance());
    