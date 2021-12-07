<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'crud.php';
include_once 'header.php';
$object = new Crud();
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
                        <?php $object->showCrews();
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-4"><button class="btn btn-primary" type="submit" name="submit_edit">Отправить</button>	</div>

        </form>
    </div>
    <div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div>


<?php
$object->editCollector();
include_once 'footer.php';
