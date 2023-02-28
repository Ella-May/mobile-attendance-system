<?php

class FacultyLoad
{
    private $conn;

    public function __construct(private DB $db)
    {
        $this->conn = $db->getConnection();
    }
    
    public function index()
    {
        $stmt = $this->conn->query("SELECT facultyload_tbl.*, personnelinfo_tbl.perFname, personnelinfo_tbl.perMname, personnelinfo_tbl.perLname FROM facultyload_tbl INNER JOIN personnelinfo_tbl ON facultyload_tbl.perID = personnelinfo_tbl.perID");
        $facultyLoads = $stmt->fetchAll();

        $stmt2 = $this->conn->query("SELECT * FROM personnelinfo_tbl");
        $personnelInfos = $stmt2->fetchAll();

        $data = ['facultyLoads'=>$facultyLoads,'personnelInfos'=>$personnelInfos];
        return $data;
    }

    public function store($button)
    {
        if($_SERVER['REQUEST_METHOD']==='POST'){
            //...
            if(isset($button))
            {
                //$stmt = $this->conn->
            }
        } 
    }   
}