<?php
class Dbh {
    private $dbServername = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName = "collectorsdb";

    function connect() {
        return mysqli_connect($this->dbServername,$this->dbUsername,$this->dbPassword,$this->dbName );
    }


}

