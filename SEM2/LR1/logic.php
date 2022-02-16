<?php
require_once 'CollectorsTable.php';
require_once 'Database.php';

$db=new CollectorsTable();
//Добавление записи
if (isset($_POST['create'])){
    $create_message=$db->createQuery(
        $_POST['setDefunctName'],
        $_POST['setDefunctCollectorsBirth_date'],
        $_POST['setDefunctCharacteristic'],
        $_POST['setDefunctId_crew']
    );
    if ($create_message==="Запись успешно добавлена!")
        header('Location:index.php');
}
//Изменение записи
if (isset($_POST['edit'])){
    $edit_message=$db->updateQuery(
        $_POST['updateDefunctName'],
        $_POST['updateDefunctBirth_date'],
        $_POST['updateDefunctCharacteristic'],
        $_POST['updateDefunctId_crew']
    );
    if ($edit_message==="Запись успешно обновлена!")
        header('Location:main.php');
}
//Удаление записи
if (isset($_POST['delete'])) {
    $db->deleteQuery();
    header('Location:main.php');
}


$alltabledata=$db->getAllData();

$crews_result=$db->getCrewData();
$crews = array();
if(isset($crews_result))
    if(mysqli_num_rows($crews_result))
        while($row = mysqli_fetch_assoc($crews_result))
            $crews[]=$row['crew'];

if (isset($_GET['clearFilter'])){
    $_GET['crew']=null;
}





