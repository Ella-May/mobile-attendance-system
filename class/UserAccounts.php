<?php

class UserAccounts {

    private $conn;

    public function __construct(private DB $db)
    {
        $this->conn = $db->getConnection();
    }

    public function index()
    {
       $stmt =  $this->conn->query("SELECT * FROM useracc_tbl");
       $userAccounts = $stmt->fetchAll();
       
       $userAccount = ['userAccounts'=>$userAccounts];
       
       return $userAccount;
    }
}