<?php
require_once 'classes/CrewsActions.php';
require_once 'classes/CollectorsActions.php';
require_once 'header.php';
$collectorsresult = CollectorsActions::processRequest();
$crewsresult = CrewsActions::processRequest();
if ($_GET['action'] !== "create" && $_GET['action'] !== "edit") {
?>
<div class="main py-5" >
    <div class="container text-center mt-3" >
        <table class="table" >
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Фотография</th>
                <th scope="col">ФИО</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Характеристика</th>
                <th scope="col">Бригада</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                $count = 0;
                if(isset($collectorsresult)) {
                    foreach ($collectorsresult as $item ) {
                        echo '<tr>';
                        echo '<td>' . $item['id'] . '</td>';
                        echo '<td>' . '<img style="height:150px;width:150px;" src="https://localhost/SEM2/LR1/inc/images/' . $item['img_path'] . '"/>' . '</td>';
                        echo '<td>' . $item['name'] . '</td>';
                        echo '<td>' . $item['birth_date'] . '</td>';
                        echo '<td>' . $item['characteristic'] . '</td>';
                        echo '<td>' . $crewsresult[$item['id_crew']]['crew'] . '</td>';
                        echo '<td>' . '<a class="btn btn-primary" type="button" id="edit" href="?action=edit&editid=' . $item['id'] . '">Редактировать</a>' . '</td>';
                        echo '<td>' . '<a type="button" onclick="deletionCheck();" class="btn btn-danger delete" href ="?collectorsdeleteid=' . $item['id'] . '">Удалить</a>' . '</td>';
                        echo '</tr>' . " ";
                    }
                }
                ?>
            </tr>
            </tbody>
        </table>
    </div>
    <a class="btn btn-primary" type="button" id="edit" href="?action=create">Создать</a>
</div>
<?php } else {
$_POST['editid'] = $_GET['editid'];
$_POST['action'] = $_GET['action'];
    ?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="collectors.php">Сборщики</a></li>
            <li class="breadcrumb-item active" aria-current="page">Создание/Редактирование</li>
        </ol>
    </nav>
    <h1>Добавить/изменить сборщика</h1>
    <form class="row row-cols-lg-auto g-3 align-items-center" name="crews" method="post" action="collectors.php" enctype="multipart/form-data">
            <div class="col-4">
                <div class="input-group">
                    <input type="text" required class="form-control" placeholder="ФИО" name="name" maxlength="60"
                           value="<?php if(isset($collectorsresult[$_POST['editid']]['name'])) echo htmlspecialchars($collectorsresult[$_POST['editid']]['name']);
                           else echo htmlspecialchars($_POST['name']);?>">
                </div>
                    <div class="input-group">
                        <input type="file" value="gang" required class="form-control" name="img_path" title="Фото">
                    </div>
                <div class="input-group">
                    <input type="text" required class="form-control" placeholder="Дата рождения" name="birth_date" maxlength="60"
                           value="<?php if(isset($collectorsresult[$_POST['editid']]['birth_date'])) echo htmlspecialchars($collectorsresult[$_POST['editid']]['birth_date']);
                           else echo htmlspecialchars($_POST['birth_date']);?>">
                </div>
                <div class="input-group">
                    <input type="text" required class="form-control" placeholder="Характеристика" name="characteristic" maxlength="60"
                           value="<?php if(isset($collectorsresult[$_POST['editid']]['characteristic'])) echo htmlspecialchars($collectorsresult[$_POST['editid']]['characteristic']);
                           else echo htmlspecialchars($_POST['characteristic']);?>">
                </div>
            <select  name="id_crew" required  class="form-control">
                <option value="<?php  echo htmlspecialchars($collectorsresult[$_POST['editid']]['id_crew']).'"';  if($_POST['action']== 'create') echo "disabled"?>   selected="">
                    <?php
                    if($_POST['action']== 'edit') {
                        $index = array_search($collectorsresult[$_POST['editid']]['id_crew'], array_column($crewsresult, 'id'));
                        echo htmlspecialchars($crewsresult[$index + 1]['crew']);
                    }
                    else echo "Бригада";
                    ?>
                </option>
                <?php
                if(isset($crewsresult))
                    foreach ($crewsresult as $item) {
                        echo '<option  value="'.$item['id'];
                        if ($_GET['id_crew'] == $item['id']) {
                           ?> selected="selected" <?php
                        }
                        echo '">'.$item['crew'].'</option>';
                    }
                ?>
            </select>
            <div class="input-group">
                <input type="text" hidden class="form-control" placeholder="editid" name="editid" maxlength="60"
                       value="<?php if(isset($_POST['editid'])) echo htmlspecialchars($_POST['editid']); else echo ""?>">
            </div>
                <div class="input-group">
                    <input type="text" hidden class="form-control" placeholder="action" name="action" maxlength="60"
                           value="<?php if(isset($_POST['action'])) echo htmlspecialchars($_POST['action']); else echo ""?>">
                </div>
        <div class="input-group">
            <div class="col-4">
                <button class="btn btn-primary"  formmethod="POST" type="submit" name="collectors_button">Сохранить</button></div>
        </div>
            </div>
            <?php } ?>
    </form>
</div>
<?php require_once 'footer.php';
