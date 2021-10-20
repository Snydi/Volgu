<?php
include_once 'logic.php';
include_once 'header.php';


if (!isset($_SESSION["userid"])) {?>
    <div class="mainbody">
        <h1> Вы не авторизованы.</h1>
        <a href="signup-page.php" class="btn btn-success">Зарегистрироваться</a>
        <a href="login-page.php" class="btn btn-success">Войти</a>
    </div>
<?php
}
else{
?>


<div class="main py-5" >
    <div class="container text-center" style = max-width:80%; >
        <form action="secret-page.php" method="GET"  >

            <div class="mb-3" >
                <label>ID</label>
                <input type="text" name="id" placeholder="ID" value="" class="form-control">

            </div>

            <div class="mb-3" >
                <label>Дата рождения:</label>
                <input type="text" name="from_date" placeholder="От" value="" class="form-control">
                <input type="text" name="to_date" placeholder="До" value="" class="form-control">
            </div>

            <div class="mb-3" >
                <label>Фильтрация по ФИО работника:</label>
                <input type="text" name="name" placeholder="Введите ФИО работника" value="" class="form-control">
            </div>

            <div class="mb-3">
                <label>Фильтрация по бригаде:</label>
                <select name="crew" class="form-control">
                    <option value="" selected="">Выберите бригаду:</option>
                    <?php
                    if(mysqli_num_rows($crewdata)) {
                        while ($row = mysqli_fetch_assoc($crewdata)){
                            $crew = $row['crew'];?>
                            <option><?php echo $crew; ?></option> <?php

                        }
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label>Фильтрация по личной характеристике:</label>
                <textarea class="form-control" placeholder="Введите характеристику сборщика" name="characteristic"></textarea>
            </div>

            <input type="submit" name="db-submit" value="Применить фильтр" class="btn btn-success">
            <input type="submit" name="clearFilter" value="Очистить фильтр" class="btn btn-danger">
        </form>
    </div>

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

            </tr>
            </thead>

            <tbody>



            <?php if(mysqli_num_rows($data)) {
                while ($row = mysqli_fetch_assoc($data)) {
                    $id = $row['id'];
                    $img_path = $row['img_path'];
                    $name = $row['name'];
                    $crew = $row['crew'];
                    $birth_date = $row['birth_date'];
                    $characteristic = $row['characteristic'];
                    ?>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td>  <?php echo '<img id="gang" src="https://localhost/LR3/assets/dbimages/'.$img_path.'"/>' ;?></td>
                        <td><?php echo $name;?></td>
                        <td><?php echo $crew;?></td>
                        <td><?php echo $characteristic;?></td>
                        <td><?php echo $birth_date;?></td>
                    </tr>

                    <?php

                }
            }
            ?>
            </tbody>
        </table>


    </div>
</div>




<?php
}
include_once 'footer.php';
?>
