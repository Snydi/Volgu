<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'crud.php';
include_once 'header.php';
$object = new Crud();
$dbh = new Dbh();
$conn = $dbh->connect();
?>
<div class="main py-5" >

    <div class="container text-center mt-3" >
        <table class="table" >
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Изображение</th>
                <th scope="col">ФИО</th>
                <th scope="col">Бригада</th>
                <th scope="col">Характеристика</th>
                <th scope="col">Год рождения</th>
                <th scope="col">Редактирование</th>
                <th scope="col">Удаление</th>
            </tr>
            </thead>

           <tbody>
            <tr>
                <?php
                $delete_collector_param = array();
                $delete_collector_param[] = $_GET['del'];
                $delete_collector_param[] = $_GET['img'];
                $object->deleteCollector($conn,$delete_collector_param);

                $dataarray = $object->showTable($conn);

                if(isset($dataarray))
                    foreach ($dataarray as $item) {
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
                ?>
            </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" type="button" href="/LR6/addcollector.php">Добавить</a>
    </div>
</div>
<?php include_once 'footer.php';