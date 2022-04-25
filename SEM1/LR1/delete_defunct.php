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
            <li class="breadcrumb-item active" aria-current="page">Удаление сборщика</li>
        </ol>
    </nav>
    <h1>Удалить сборщика</h1>
    <form class="row row-cols-lg-auto g-3 align-items-center " name="editStudent" method="post" action="delete_defunct.php?id=<?= $defunct['id']?>" enctype="multipart/form-data">
        <div class="col-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Имя сборщика" maxlength="60"
                       value="<?php if(isset($defunct['name'])) echo $defunct['name']; ?>">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Дата рождения"  maxlength="60"
                       value="<?php if(isset($defunct['birth_date'])) echo $defunct['birth_date']; ?>">
            </div>
        </div>
        <div class="col-5">
            <div class="input-group">
                <input type="text" required class="form-control" placeholder="Характеристика" maxlength="60"
                       value="<?php if(isset($defunct['characteristic'])) echo $defunct['characteristic']; ?>">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group">
                <select class="form-select" name="id_crew" >
                    <option value="<?php echo  $defunct['id_crew']?>" selected=""><?php if (isset($crews)) print_r($crews[$defunct['id_crew']-1]) ?></option>
                    <?php
                    $count = 0;
                    if (isset($crews))
                    foreach ($crews as $row) {
                    $count +=1;
                    ?>
                    <option value="<?php echo $count ?>"
                        <?php
                       if ($defunct['id_crew']!= $count ) {
                        if ($_POST['id_crew']==htmlspecialchars($row)) {?>
                            selected="selected"
                        <?php }?>
                    >
                        <?php echo htmlspecialchars($row)?>
                        <?php } } ?>
                    </option>
                </select>
            </div>
        </div>
        <div class="col-4"><button class="btn btn-danger" type="submit" name="delete">Удалить</button></div>
    </form>
</div>
<?php
require_once 'footer.php'?>