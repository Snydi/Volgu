<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'crud.php';
include_once 'header.php';
$object = new Crud();
$dbh = new Dbh();
$conn = $dbh->connect();
?>

    <div class="container">

        <h1>Редактировать запись</h1>

        <form class="row row-cols-lg-auto g-3 align-items-center " name="addStudent" method="post" action="edit.php" enctype="multipart/form-data">
            <div class="col-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ФИО" name="name" maxlength="60" title="Имя сборщика" value="">
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
            <div class="col-4">
                <div class="input-group">
                    <select name="id_crew" class="form-control">
                        <option value="" selected=""> Бригада </option>
                        <?php
                        $crews = $object->showCrews($conn);
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
            <div class="col-4"><button class="btn btn-primary" type="submit" name="submit_edit">Отправить</button>	</div>

        </form>
    </div>
    <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div>


<?php
if(isset($_GET['editid'])) {
    $_SESSION['editid'] = $_GET['editid'];
}
if (isset($_POST['submit_edit'])) {

    $edit_collector_param = array();
    $edit_collector_param[] =  mysqli_real_escape_string($conn, $_POST['name']);
    $edit_collector_param[] =  mysqli_real_escape_string($conn, $_POST['birth_date']);
    $edit_collector_param[] =  mysqli_real_escape_string($conn, $_POST['characteristic']);
    $edit_collector_param[] =  mysqli_real_escape_string($conn, $_POST['id_crew']);
    $edit_collector_param[] =  $object->importPhoto();
    $edit_collector_param[] = $_SESSION['editid'];
    $object->editCollector($conn, $edit_collector_param);
    unset($_SESSION['editid']);
}
include_once 'footer.php';
