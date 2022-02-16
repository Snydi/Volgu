<?php
require_once 'logic.php';
require_once 'header.php'
?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="main.php">Сборщики</a></li>
            <li class="breadcrumb-item active" aria-current="page">Новый сборщик</li>
        </ol>
    </nav>
<h1>Добавить сборщика</h1>
<form class="row row-cols-lg-auto g-3 align-items-center" name="addDefunct" method="post" action="add_defunct.php" enctype="multipart/form-data">
    <div class="col-4">
        <div class="input-group">
            <input type="text" required class="form-control" placeholder="Имя сборщика" name="setDefunctName" maxlength="60"
            value="<?php if(isset($_POST['setDefunctName'])) echo htmlspecialchars($_POST['setDefunctName']); else echo ""?>">
        </div>
    </div>
    <div class="col-4">
        <div class="input-group">
            <input type="text" required class="form-control" placeholder="Дата рождения" name="setDefunctCollectorsBirth_date" maxlength="60"
                   value="<?php if(isset($_POST['setDefunctCollectorsBirth_date'])) echo htmlspecialchars($_POST['setDefunctCollectorsBirth_date']); else echo ""?>">
        </div>
    </div>
    <div class="col-5">
        <div class="input-group">
            <input type="text" required class="form-control" placeholder="Характеристика сборщика" name="setDefunctCharacteristic" maxlength="60"
                   value="<?php if(isset($_POST['setDefunctCharacteristic'])) echo htmlspecialchars($_POST['setDefunctCharacteristic']); else echo ""?>">
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
            <select class="form-select" name="setDefunctId_crew" required>
                <option value="" selected="">Выберите бригаду:</option>
                <?php
                $count = 0;
                if (isset($crews))
                foreach ($crews as $row) {
                    $count +=1;
                    ?>
                <option value="<?php echo $count ?>"
                    <?php
                    if ($_POST['id_crew']==htmlspecialchars($row)) {?>
                        selected="selected"
                    <?php }?>
                >
                    <?php echo htmlspecialchars($row)?>
                    <?php } ?>
            </select>
        </div>
    </div>
    <div class="col-4"><button class="btn btn-info1" type="submit" name="create">Создать</button></div>
    <p><?php if (isset($create_message)) {
            echo $create_message.PHP_EOL;
        } ?></p>
</form>
</div>
<?php

require_once 'footer.php'?>
