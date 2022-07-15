<?php
class Dbconnect
{
    public array $dbservername;
    public array $dbname;
    public array $dbusername;
    public array $dbpassword;

    public function __construct(array $dbservername, array $dbname, array $dbusername, array $dbpassword)
    {
        $this->dbservername = $dbservername;
        $this->dbname = $dbname;
        $this->dbusername = $dbusername;
        $this->dbpassword = $dbpassword;
    }

    protected function connection()
    {
        try {
            $conn = new PDO("mysql:host=$this->dbservername;dbname=" . $this->dbname, $this->dbusername, $this->dbpassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
}
