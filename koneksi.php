<?php 

class dbObj
{
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $dbname = "tugas_api";
    var $conn;

    function connect() 
    {
        $con = mysqli_connect(
                    $this->servername, 
                    $this->username, 
                    $this->password, 
                    $this->dbname
        ) or die("Connection Failed: " . mysqli_connect_error());
        
        if (mysqli_connect_errno()) {
            printf("Connect Failed: %s\n", mysqli_connect_error());
            exit();
        } else {
            echo 'koneksi berhasil';
            $this->conn = $con;
        }

        return $this->conn;
    }
}


?>