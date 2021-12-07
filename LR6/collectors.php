<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'crud.php';
include_once 'header.php';
$object = new Crud();
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
                $object->deleteCollector();
                $object->showTable();
                ?>
            </tr>
            </tbody>
        </table>
        <a class="btn btn-primary" type="button" href="/LR6/addcollector.php">Добавить</a>
    </div>
</div>
<?php include_once 'footer.php';