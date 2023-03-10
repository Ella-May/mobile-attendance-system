<?php 

class AttendanceReport {

    private $conn;

    public function __construct(private DB $db)
    {
        $this->conn = $db->getConnection();
    }
    
    public function index()
    {
        $stmt = $this->conn->query("SELECT *
            FROM personnelinfo_tbl
            INNER JOIN facultyload_tbl ON personnelinfo_tbl.perID = facultyload_tbl.perID
            INNER JOIN attendreport_tbl ON personnelinfo_tbl.perID = attendreport_tbl.perID");
        $attendReports = $stmt->fetchAll();

        $stmt2 = $this->conn->query("SELECT * FROM personnelinfo_tbl");
        $userAccts = $stmt2->fetchAll();

        $stmt3 = $this->conn->query("SELECT * FROM facultyload_tbl");
        $facultyLoads = $stmt3->fetchAll();

        $data = ['attendReports'=>$attendReports, 'userAccts'=>$userAccts, 'facultyLoads'=>$facultyLoads];
        return $data;
    }

}
