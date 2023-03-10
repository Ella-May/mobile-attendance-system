<?php 

class AttendanceReport {

    private $conn;

    public function __construct(private DB $db)
    {
        $this->conn = $db->getConnection();
    }
    
    public function index()
    {
        $stmt = $this->conn->query("SELECT * FROM attendreport_tbl");
        $attendReport = $stmt->fetchAll();

        $stmt2 = $this->conn->query("SELECT * FROM useracc_tbl");
        $userAcct = $stmt2->fetchAll();

        $stmt3 = $this->conn->query("SELECT * FROM facultyload_tbl");
        $facultyLoad = $stmt3->fetchAll();

        $data = ['attendReport'=>$attendReport, 'userAcct'=>$userAcct, 'facultyLoad'=>$facultyLoad];
        return $data;
    }

}
