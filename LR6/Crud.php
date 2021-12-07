<?php
include_once 'dbh.php';

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

class Crud extends Dbh {
    function showTable() {
        $conn = $this->connect();
        $sql = "SELECT *,collectors.id FROM collectors INNER JOIN crews ON collectors.id_crew = crews.id";
        $data = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $dataarray=array();

        if(isset($data)) {
            if (mysqli_num_rows($data))
                while ($row = mysqli_fetch_assoc($data))
                    $dataarray[] = $row;
        }

        if(isset($dataarray))
            foreach ($dataarray as $item) {
                print_r($item);
                echo '<tr>';
                echo '<td>'. $item['id']. '</td>';
                echo '<td>'.'<img style="height:150px;width:150px;" src="https://localhost/LR6/inc/images/'.$item['img_path'].'"/>'.'</td>';
                echo '<td>'.$item['name'].'</td>';
                echo '<td>'.$item['crew'].'</td>';
                echo '<td>'.$item['characteristic'].'</td>';
                echo '<td>'.$item['birth_date'].'</td>' ;
                echo '<td>'.'<a class="btn btn-primary" type="button" id="edit" href="/LR6/edit.php?editid='.$item['id'].'">Редактировать</a>' .'</td>';
                echo '<td>'.'<a type="button" class="btn btn-danger delete" href ="?del='.$item['id'].'&img='.$item['img_path'].'">Удалить</a>'.'</td>';
                echo '</tr>' . " ";
            }
    }
    function showCrews()
    {   $conn = $this->connect();
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
        if (isset($crews))
            foreach ($crews as $item) {?>
            <option value="<?php echo htmlspecialchars($item)?>"
                <?php
                if ($_GET['crew']==htmlspecialchars($item)) {?>
                    selected="selected"
                <?php }?>
            >
                <?php echo htmlspecialchars($item)?>
            <?php }
    }

    function addCollector() {
        $conn = $this->connect();
        if (isset($_POST['submit_add_collector'])) {
             $name = mysqli_real_escape_string($conn, $_POST['name']);
             $id_crew = mysqli_real_escape_string($conn, $_POST['id_crew']);
             $birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
             $characteristic = mysqli_real_escape_string($conn, $_POST['characteristic']);
             $img_path = importPhoto();
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
        }

        function editCollector() { // как-то надо передать данные из формы сюда + дать понять какую запись обрабатываем. Заменить чем-то GET из showCollector.
           $conn = $this->connect();
           if(isset($_GET['editid'])) {
              $_SESSION['editid'] = $_GET['editid'];
           }
           if (isset($_POST['submit_edit'])) {
                    $id = $_SESSION['editid'];
                    $name = mysqli_real_escape_string($conn, $_POST['name']);
                    $id_crew = mysqli_real_escape_string($conn, $_POST['id_crew']);
                    $birth_date = mysqli_real_escape_string($conn, $_POST['birth_date']);
                    $characteristic = mysqli_real_escape_string($conn, $_POST['characteristic']);
                    $img_path = importPhoto();
                    $query = "UPDATE collectors SET name='$name', id_crew='$id_crew', birth_date='$birth_date', characteristic='$characteristic',img_path='$img_path' WHERE id='$id'";
                    mysqli_query($conn,$query);
                    unset($_SESSION['editid']);
                    echo "Редактировано";
           }
       }

        function deleteCollector() {
            $conn = $this->connect();
            if (isset($_GET['del'])) {
                $id = $_GET['del'];
                $imgname = $_GET['img'];
                $imgdir = $_SERVER['DOCUMENT_ROOT'] . '/LR6/inc/images/'.$imgname;
                unlink($imgdir);
                mysqli_query($conn, "DELETE FROM `collectors` WHERE `collectors`.`id` = $id");
                echo "Удалено.";
            }
        }
    }












