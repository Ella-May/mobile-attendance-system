<?php

class Login
{
    private $conn;

    public function __construct(private DB $db)
    {
        $this->conn = $db->getConnection();
    }
    public function index($data = [])
    {
        if(empty($data['username']) || empty($data['password']))
        {
            echo 'Please enter username and password';
            exit();
        }

        $stmt = $this->conn->prepare('SELECT * FROM user_accounts WHERE username = :username');

        $stmt->bindParam('username', $data['username']);

        try
        {
            $stmt->execute();
            
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
            if($row)
            {
                if($row['password'] != $data['password'])
                {
                    echo 'Wrong username or password';
                    exit();
                }

                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                // Create session here.
                header('Location: ../views/dashboard.php');
                exit();
            }

            echo 'Wrong username or password';
            exit();
    
        } catch(PDOException $e)
        {
            echo $e->getMessage();
        }

     
    }
}