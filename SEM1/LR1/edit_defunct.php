<?php
require_once 'logic.php';
require_once 'header.php';
require_once 'Database.php';
require_once 'CollectorsTable.php';
$defunct=CollectorsTable::getRecord();
?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="main.php">Сборщики</a></li>
            <li class="breadcrumb-item active" aria-current="page">Редактирование данных сборщика</li>
        </ol>
    </nav>
    <h1>Редактировать сборщика</h1>
    <form class="row row-cols-lg-auto g-3 align-items-center " name="editStudent" method="post" action="edit_defunct.php?id=<?= $defunct['id']?>" enctype="multipart/form-data">
        <div class="col-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Имя cборщика" name="updateDefunctName" maxlength="60"
                       value="<?php if(isset($defunct['name'])&&isset($edit_message)&&$edit_message==="При обновлении записи произошла ошибка, проверьте данные!")
                           echo $_POST['updateDefunctName'];
                       else
                           echo $defunct['name']; ?>">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Дата рождения" name="updateDefunctBirth_date" maxlength="60"
                       value="<?php if(isset($defunct['birth_date'])&&isset($edit_message)&&$edit_message==="При обновлении записи произошла ошибка, проверьте данные!")
                           echo $_POST['updateDefunctBirth_date'];
                       else
                           echo $defunct['birth_date']; ?>">
            </div>
        </div>
        <div class="col-5">
            <div class="input-group">
                <input type="text" required class="form-control" placeholder="Характеристика сборщика" name="updateDefunctCharacteristic" maxlength="60"
                       value="<?php if(isset($defunct['characteristic'])&&isset($edit_message)&&$edit_message==="При обновлении записи произошла ошибка, проверьте данные!")
                           echo $_POST['updateDefunctCharacteristic'];
                       else
                           echo $defunct['characteristic']; ?>">
            </div>
        </div>
        <div class="col-3">
            <div class="input-group">
                <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
                <input type="file" required class="form-control" name="setDefunctPhoto">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group">
                <select class="form-select" name="updateDefunctId_crew" >
                    <option value="<?php echo  $defunct['id_crew']?>" selected=""><?php if (isset($crews)) print_r($crews[$defunct['id_crew']-1]) ?></option>
                    <?php
                    $count = 0;
                    if (isset($crews))
                    foreach ($crews as $row) {
                    $count +=1;
                    if ($defunct['id_crew']!= $count ) {
                    ?>
                    <option value="<?php echo $count ?>"
                        <?php
                        if ($_POST['updateDefunctId_crew']==htmlspecialchars($row)) {?>
                            selected="selected"
                        <?php }?>
                    >
                        <?php echo htmlspecialchars($row)?>
                        <?php } } ?>
                    </option>
                </select>
            </div>
        </div>
        <div class="col-4"><button class="btn btn-info1" type="submit" name="edit">Обновить</button></div>
        <p><?php if (isset($edit_message)) {
                echo $edit_message.PHP_EOL;
            } ?></p>
    </form>
</div>
<?php require_once 'footer.php'?>
