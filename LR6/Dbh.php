<?php
class Dbh {
    private $dbServername = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName = "collectorsdb";

    protected function connect() {
        $conn = mysqli_connect($this->dbServername,$this->dbUsername,$this->dbPassword,$this->dbName );
        return $conn;
    }


}

