<?php 
class DbConnect
{
    private $servername = '127.0.0.1';
    private $db   = 'studentdb';
    private $username = 'root';
    private $password = 'password';
   
    public function AddStudent($student)
    {
        try 
        {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->db", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $stmt = $conn->prepare("INSERT INTO students (name, address) 
            VALUES (:name, :address)");

            $studentname = 'abhinav';
            $studentaddress = 'someaddress';   
            
            $stmt->bindParam(':name', $studentname);
            $stmt->bindParam(':addresss', $studentaddress);

           

            
            if($stmt->execute())
                echo "New record created successfully";
            else
                echo "failed to insert";
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            $conn = null;
        }
    }

}
