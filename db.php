<?php

class myDB {
    private $DBHostName;
    private $DBUserName;
    private $DBPassword;
    private $DBName;

    public function __construct() {
        $this->DBHostName = "localhost";
        $this->DBUserName = "root";
        $this->DBPassword = "";
        $this->DBName = "providerdetails"; // Change this to your database name
    }

    // Create a connection object
    public function connectionObject() {
        $conn = new mysqli($this->DBHostName, $this->DBUserName, $this->DBPassword, $this->DBName);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
    public function insert($conn, $table,$name, $email, $phone, $nationalId, $dob, $address, $password)
    {
        $query = "INSERT INTO $table (name,email,phone,national_id,dob,address,password)
                  VALUES ('$name', '$email', '$phone', '$nationalId', '$dob', '$address', '$password')";
        $result = $conn->query($query);
        if ($result == false) {
            return $conn->error;
        } else {
            return true;
        }
    }

        

       

    // Insert data into the `businfo` table
     function insertBusInfoData($conn,$table,$busBrand, $modelYear, $color, $engineNo, $chesisNo,$email) {
        // Prepare the SQL query to insert bus information
        $qrystring = "INSERT INTO $table (Brand, ModelYear, Colour, ChesisNo, EngineNo, email) 
                      VALUES ('$busBrand', '$modelYear', '$color', '$chesisNo', '$engineNo', '$email')";
        $result = $conn->query($qrystring);
        if ($result == false) {
            return $conn->error;
        } else {
            return true;
        }
    }

    // Close the database connection
    public function closeCon($conn) {
        $conn->close();
    }
}
