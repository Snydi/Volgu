<?php
require_once 'header.php';
require_once 'logic.php'?>
<div class="container">
    <h1>Список сборщиков</h1>
    <table class="table table-hover table-responsive">
        <thead>
        <tr>
            <th>ID</th>
            <th>ФИО</th>
            <th>Дата рождения </th>
            <th>Характеристика</th>
            <th>Фото</th>
            <th>Бригада</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        <div class="col-4"><a href="main.php"><button class="btn btn-danger" type="submit">Очистить фильтр</button></a></div>
        <?php  if(isset($alltabledata))
        foreach ($alltabledata as $row) {?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['birth_date'];?></td>
                        <td><?php echo $row['characteristic'];?></td>
                        <th><?php echo '<img style="height:150px;width:150px;" src="https://localhost/SEM2/LR1/inc/images/'.$row['img_path'].'"/>'?></th>
                        <td><a href="main.php?crew=<?=$row['crew'] ?>"><button class="btn " type="submit"><?php echo $row['crew'];?></button></a></td>
                        <td><div class="col-4"><a href="edit_defunct.php?id=<?= $row['id'] ?>"><button class="btn btn-primary" type="submit">Редактировать</button></a></div></td>
                        <td><div class="col-4"><a href="delete_defunct.php?id=<?=$row['id'] ?>"><button class="btn btn-danger" type="submit">Удалить</button></a></div></td>
                    </tr>
                    <?php


        }?>
        </tbody>
    </table>
    <a class="btn btn-info1" type="button" href="add_defunct.php">Добавить</a></div>
<?php require_once 'footer.php'?>
