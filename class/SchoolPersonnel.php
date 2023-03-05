<?php

class SchoolPersonnel {

    private $conn;

    public function __construct(private DB $db)
    {
        $this->conn = $db->getConnection();
    }

    public function index()
    {
        $stmt = $this->conn->query("SELECT * FROM personnelinfo_tbl");
        $schoolPersonnels = $stmt->fetchAll();

        $schoolPersonnel = ['schoolPersonnels'=>$schoolPersonnels];

        return $schoolPersonnel;
    }

    public function store($button2)
    {
        if($_SERVER['REQUEST_METHOD']=== 'POST'){
            
            if(isset($button2))
            {

            }
        }
    }
}