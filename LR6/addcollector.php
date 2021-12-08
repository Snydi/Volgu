<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'crud.php';
include_once 'header.php';
$object = new Crud();
$dbh = new Dbh();
$conn = $dbh->connect();
?>

<div class="container">

    <h1>Добавить сборщика</h1>

    <form class="row row-cols-lg-auto g-3 align-items-center " name="addStudent" method="post" action="addcollector.php" enctype="multipart/form-data">
        <div class="col-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="ФИО" name="name" maxlength="60" title="Имя сборщика">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Год рождения" name="birth_date" maxlength="60" title="Год рождения">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Характеристика" name="characteristic" maxlength="60" title="Образование">
            </div>
        </div>
        <div class="col-4">
            <div class="input-group">
                <input type="file" class="form-control" name="photo" title="Фото">
            </div>
        </div>
        <?php $crews = $object->showCrews($conn);
        ?>
        <div class="col-4">
            <div class="input-group">
                 <select name="id_crew" class="form-control">
                     <option value="" selected=""> Бригада </option>
                     <?php
                     if (isset($crews)){
                     foreach ($crews as $item) {?>
                     <option value="<?php echo htmlspecialchars($item)?>"
                         <?php
                         if ($_GET['id_crew']==htmlspecialchars($item)) {?>
                             selected="selected"
                         <?php }?>
                     >
                         <?php echo htmlspecialchars($item)?>
                         <?php }
                         }
                     ?>
                </select>
            </div>
        </div>
        <div class="col-4"><button class="btn btn-primary" type="submit" name="submit_add_collector">Отправить</button>	</div>
    </form>
</div>
    <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div>

<?php
if (isset($_POST['submit_add_collector'])) {
    $add_collector_param = array();
    $add_collector_param[] =  mysqli_real_escape_string($conn, $_POST['name']);
    $add_collector_param[] =  mysqli_real_escape_string($conn, $_POST['birth_date']);
    $add_collector_param[] =  mysqli_real_escape_string($conn, $_POST['characteristic']);
    $add_collector_param[] =  mysqli_real_escape_string($conn, $_POST['id_crew']);
    $add_collector_param[] =  $object->importPhoto();
    $object->addCollector($conn,$add_collector_param);
}

include_once 'footer.php';
