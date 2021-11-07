<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'collectorsdb';

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );

$sql = "SELECT *,collectors.id FROM collectors INNER JOIN crews ON collectors.id_crew = crews.id";


if(isset($_GET['submit'])) {


    $id = mysqli_real_escape_string($conn,$_GET['id']);
    $name = mysqli_real_escape_string($conn,$_GET['name']);
    $crew = mysqli_real_escape_string($conn,$_GET['crew']);
    $characteristic = mysqli_real_escape_string($conn,$_GET['characteristic']);

    $from_date = mysqli_real_escape_string($conn,$_GET['from_date']);
    $fdate = strtotime($from_date);
    $fdate = date("Y-m-d", $fdate);

    $to_date = mysqli_real_escape_string($conn,$_GET['to_date']);
    $tdate = strtotime($to_date);
    $tdate = date("Y-m-d", $tdate);

    $conditions = array();

    if (!empty($id)) {
        $conditions[] = "collectors.id='$id'";
    }
    if (!empty($name)) {
        $conditions[] = "name  LIKE '%$name%'";
    }
    if (!empty($crew)) {
        $conditions[] = "crew='$crew'";
    }
    if (!empty($characteristic)) {
        $conditions[] = "characteristic LIKE '%$characteristic%'";
    }
    if (!empty($from_date) && !empty($to_date)) {
        $conditions[] = "birth_date>='$fdate' && birth_date<='$tdate'";

    }
    if (!empty($from_date)) {
        $conditions[] = "birth_date>='$fdate'";
    }
    if (!empty($to_date)) {
        $conditions[] = " birth_date<='$tdate'";
    }

    if (count($conditions) > 0) {
        $sql .= " WHERE " . implode(' AND ', $conditions);

    }


}

if (isset($_GET['clearFilter'])){
    $_GET['id']=null;
    $_GET['name']=null;
    $_GET['characteristic']=null;
    $_GET['crew']=null;
    $_GET['to_date']=null;
    $_GET['from_date']=null;
}


$crewsql = "SELECT crew FROM crews";
$crewdata = mysqli_query($conn, $crewsql) or die(mysqli_error($conn));

$crews = array();

if(isset($crewdata))
    if(mysqli_num_rows($crewdata))
        while($row = mysqli_fetch_assoc($crewdata))
            $crews[]=$row['crew'];



$data = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$dataarray=array();

if(isset($data)) {
    if (mysqli_num_rows($data))
        while ($row = mysqli_fetch_assoc($data))
            $dataarray[] = $row;
}






