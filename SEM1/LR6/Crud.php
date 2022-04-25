<?php
include_once 'dbh.php';
// Все теперь по требованиям. Dbh не наследуется. Все $_POST и $_GET записываются в массив и передаются в параметрах.
// Echo оставил только универсальные. Только информационные сообщения.
class Crud {

    function importPhoto(){
        $targetDir = "inc/images/";
        $fileName = basename($_FILES["photo"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','');
        $check = 0;
        while ($check == 0) {
            if (in_array($fileType, $allowTypes)) {
                move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFilePath);
                $check = 1;
            } else {
                echo "Неверный формат файла.";
                exit();
            }
        }

        return  $fileName;
    }

    function showTable($conn) {

        $sql = "SELECT *,collectors.id FROM collectors INNER JOIN crews ON collectors.id_crew = crews.id";
        $data = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $dataarray=array();

        if(isset($data)) {
            if (mysqli_num_rows($data))
                while ($row = mysqli_fetch_assoc($data))
                    $dataarray[] = $row;
        }
        return $dataarray;

    }
    function showCrews($conn)
    {
        $crewsql = "SELECT id FROM crews";
        $crewdata = mysqli_query($conn, $crewsql) or die(mysqli_error($conn));
        $crews = array();

        if(isset($crewdata)) {
            if (mysqli_num_rows($crewdata)) {
                while ($row = mysqli_fetch_assoc($crewdata)) {
                    $crews[] = $row['id'];
                }
            }
        }
        return $crews;
    }

    function addCollector($conn,$add_collector_param) {
        $name = $add_collector_param[0];
        $birth_date = $add_collector_param[1];
        $characteristic = $add_collector_param[2];
        $id_crew = $add_collector_param[3];
        $img_path = $add_collector_param[4];
            if (!empty($name) && !empty($id_crew) && !empty($img_path) && !empty($birth_date) && !empty($characteristic) ) {
                $query = "INSERT INTO `collectors` (`id`, `name`, `id_crew`, `img_path`, `birth_date`, `characteristic`) VALUES (NULL, '$name', '$id_crew', '$img_path', '$birth_date', '$characteristic')";
                mysqli_query($conn, $query) or die(mysqli_error($conn));
                echo "Запись успешно добавлена.";
            }
            else {
                echo "Заполните все поля";
                exit();
                }

        }

        function editCollector($conn,$edit_collector_param) {
            $name = $edit_collector_param[0];
            $birth_date = $edit_collector_param[1];
            $characteristic = $edit_collector_param[2];
            $id_crew = $edit_collector_param[3];
            $img_path = $edit_collector_param[4];
            $id = $edit_collector_param[5];

            $query = "UPDATE collectors SET name='$name', id_crew='$id_crew', birth_date='$birth_date', characteristic='$characteristic',img_path='$img_path' WHERE id='$id'";
            mysqli_query($conn,$query);
            echo "Редактировано";
       }

        function deleteCollector($conn,$delete_collector_param) {
        $id = $delete_collector_param[0];
        $imgname = $delete_collector_param[1];
            if (!empty($id)) {
                $imgdir = $_SERVER['DOCUMENT_ROOT'] . '/LR6/inc/images/'.$imgname;
                unlink($imgdir);
                mysqli_query($conn, "DELETE FROM `collectors` WHERE `collectors`.`id` = $id");
                echo "Удалено.";
            }
        }


    }












