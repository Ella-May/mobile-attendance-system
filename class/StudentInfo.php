<?php

class StudentInfo {

    private $conn;

    public function __construct(private DB $db)
    {
        $this->conn = $db->getConnection();
    }

    public function index()
    {
        $stmt = $this->conn->query("SELECT * FROM studentinfo_tbl");  
        $studentInfos = $stmt->fetchAll();

        return $studentInfos;
    }
}
?>