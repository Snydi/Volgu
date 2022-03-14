<?php
require_once 'classes/CrewsActions.php';
require_once 'header.php';
$crewsresult = CrewsActions::processRequest();
if ($_GET['action'] !== "create" && $_GET['action'] !== "edit") {
?>
<div class="main py-5" >
    <div class="container text-center mt-3" >
        <table class="table" >
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Бригада</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                if(isset($crewsresult))
                    foreach ($crewsresult as $item) {
                        echo '<tr>';
                        echo '<td>'. $item['id']. '</td>';
                        echo '<td>'.'<a  type="submit"  href="/SEM2/LR1/collectors.php?crewfilter='.$item['id'].'">'.$item['crew'].'</a>' .'</td>';
                        echo '<td>'.'<a class="btn btn-primary" type="submit"  href="?action=edit&editid='.$item['id'].'">Редактировать</a>' .'</td>';
                        echo '<td>'.'<a type="submit" onclick="deletionCheck();"  class="btn btn-danger delete" href ="?crewsdeleteid='.$item['id'].'&img='.$item['img_path'].'">Удалить</a>'.'</td>';
                        echo '</tr>' . " ";
                    }
                ?>
            </tr>
            </tbody>
        </table>
    </div>
    <a class="btn btn-primary" type="button" href="/SEM2/LR1/crews.php?action=create">Создать</a>
</div>
<?php } // отсюда идет создание/редактирование
else {
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
<h1>Добавить/изменить бригаду</h1>
<form class="row row-cols-lg-auto g-3 align-items-center" name="crews" method="post" action="crews.php" enctype="multipart/form-data">

     <div class="col-4">
            <div class="input-group">
            <input type="text" required class="form-control" placeholder="Бригада" name="crew" maxlength="60"
                   value="<?php if(isset($crewsresult[$_POST['editid']]['crew'])) echo htmlspecialchars($crewsresult[$_POST['editid']]['crew']);
                   else echo htmlspecialchars($_POST['crew']);?>">
            </div>
            <div class="input-group">
            <input type="text" hidden class="form-control" placeholder="editid" name="editid" maxlength="60"
                   value="<?php if(isset($_POST['editid'])) echo htmlspecialchars($_POST['editid']); else echo ""?>">
            </div>
            <div class="input-group">
                <input type="text" hidden class="form-control" placeholder="action" name="action" maxlength="60"
                       value="<?php if(isset($_POST['action'])) echo htmlspecialchars($_POST['action']); else echo ""?>">
            </div>

        <div class="col-4"><button class="btn btn-primary" formmethod="POST" type="submit" name="crews_button">Сохранить</button></div>
     </div>
        <?php } ?>
</form>
    </div>
<?php require_once 'footer.php';

