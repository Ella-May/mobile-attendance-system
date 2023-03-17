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

    public function store($stu_btn)
    {
        if (isset($_POST[$stu_btn])){
            $LRN = $_POST['LRN'];
            $lastname = $_POST['stuLname'];
            $firstname = $_POST['stuFname'];
            $midname = $_POST['stuMname'];
            $stu_sex = $_POST['stuSex'];
            $stu_bday = $_POST['stuBday'];
            $age = $_POST['stuAge'];
            $address = $_POST['stuAddr'];
            $con_number = $_POST['stuCnum'];
            $stu_gradelvl = $_POST['stuGrlvl'];
            $stu_strand = $_POST['stuStrand'];
            $section = $_POST['stuSec'];
            $gur_name = $_POST['stuGur'];
            $gur_number = $_POST['stuGnum'];
            
            $sql = "INSERT INTO 'studentinfo_tbl' ('LRN','stuLname','stuFname','stuMname','stuSex','stuBday','stuAge','stuAddr','stuCnum','stuGrlvl'
            'stuStrand','stuSec','stuGur','stuGnum') VALUES ('".$LRN."','".$lastname."','".$firstname."','".$midname."','".$stu_sex."','".$stu_bday."',
            '".$age."','".$address."','".$con_number."','".$stu_gradelvl."','".$stu_strand."','".$section."','".$gur_name."','".$gur_number."')";

            $result = $this->conn->query($sql);

            if ($result == TRUE){
                echo "New Student Information added successfully.";
            }
            else {
                echo "Error";
            }
        }
    }
}
