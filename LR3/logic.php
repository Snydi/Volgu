<?php
require_once 'dbh.php';


$query = "SELECT *,collectors.id FROM collectors INNER JOIN crews ON collectors.id_crew = crews.id";
$sql = $query;


$crewsql = "SELECT crew FROM crews";
$crewdata = mysqli_query($conn, $crewsql) or die(mysqli_error($conn));

$authimage = "gang";


if(isset($_GET['db-submit'])) {


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

$data = mysqli_query($conn, $sql) or die(mysqli_error($conn));






