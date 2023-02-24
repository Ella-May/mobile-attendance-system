<?php

session_start();

require_once "../class/Login.php";
require_once "../class/DB.php";

$data = [
    'username' => $_POST['username'],
    'password' => $_POST['password'],
];

$login = new Login(DB::getInstance());
$login->index($data);