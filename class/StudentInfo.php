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

        $studentInfo = ['studentInfos'=>$studentInfos];
    
        return $studentInfo;
    }

    public function store($button1)
    {
        if($_SERVER['REQUEST_METHOD']==='POST'){
            //...
            if(isset($button1))
            {
                //$stmt = $this->conn->
            }
        } 
    }   
}
