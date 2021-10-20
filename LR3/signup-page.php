<?php
require_once 'signup-script.php';
include_once 'header.php';
?>

<div class="container text-center" style = max-width:50%; >

    <p>                                 Внимание!
        Пароль должен быть длиннее 6 символов, обязательно содержать большие латинские буквы,
        маленькие латинские буквы и спецсимволы.</p>

    <form  action="signup-page.php"  method="POST"  >
        <div class="mb-3" >
            <input type="text" name="signup-email" placeholder="Почта" class="form-control" value="<?php echo isset($_POST['signup-email']) ? $_POST['signup-email'] : '' ?>">
        </div>

        <div class="mb-3" >
            <input type="password" name="signup-password" placeholder="Пароль" value="<?php echo isset($_POST['signup-password']) ? $_POST['signup-password'] : '' ?>" class="form-control">
        </div>

        <div class="mb-3" >
            <input type="password" name="signup-passwordRepeat" placeholder="Повторите пароль" value="<?php echo isset($_POST['signup-passwordRepeat']) ? $_POST['signup-passwordRepeat'] : '' ?>" class="form-control">
        </div>

        <div class="mb-3" >
            <input type="text" name="signup-username" placeholder="ФИО"  value="<?php echo isset($_POST['signup-username']) ? $_POST['signup-username'] : '' ?>" class="form-control">
        </div>

        <div class="mb-3" >
            <input type="text" name="signup-birthdate" placeholder="Дата рождения" value="<?php echo isset($_POST['signup-birthdate']) ? $_POST['signup-birthdate'] : '' ?>" class="form-control">
        </div>
        <div class="mb-3" >
            <input type="text" name="signup-address" placeholder="Адрес" value="<?php echo isset($_POST['signup-address']) ? $_POST['signup-address'] : '' ?>" class="form-control">
        </div>

        <div class="mb-3">

            <select name="signup-sex" class="form-control">
                <option <?php
                if (!isset($_POST['signup-sex'])) {
                    $_POST['signup-sex']="Пол";
                }
                if ($_POST['signup-sex']=="Пол"){
                    echo ' selected ';
                } ?> disabled value="">Пол</option>

                <option <?php if ($_POST['signup-sex']=="Мужской"){
                    echo ' selected ';
                } ?> value="Мужской">Мужской</option>

                <option <?php if ($_POST['signup-sex']=="Женский"){
                    echo ' selected ';
                } ?> value="Женский">Женский</option>

            </select>
        </div>

        <div class="mb-3" >
            <input type="text" name="signup-interests" placeholder="Интересы" value="<?php echo isset($_POST['signup-interests']) ? $_POST['signup-interests'] : '' ?>" class="form-control">
        </div>

        <div class="mb-3">
            <input type="text" name="signup-link" placeholder="Ссылка на профиль ВК" value="<?php echo isset($_POST['signup-link']) ? $_POST['signup-link'] : '' ?>" class="form-control">
        </div>

        <div class="mb-3">

            <select name="signup-bloodtype" class="form-control">
                <option <?php
                if (!isset($_POST['signup-bloodtype'])) {
                    $_POST['signup-bloodtype']="Группа крови";
                }
                if ($_POST['signup-bloodtype']=="Группа крови"){
                    echo ' selected ';
                } ?> disabled value="">Группа крови</option>

                <option <?php if ($_POST['signup-bloodtype']=="Первая"){
                    echo ' selected ';
                } ?> value="Первая">Первая</option>

                <option <?php if ($_POST['signup-bloodtype']=="Вторая"){
                    echo ' selected ';
                } ?> value="Вторая">Вторая</option>

                <option <?php if ($_POST['signup-bloodtype']=="Третья"){
                    echo ' selected ';
                } ?> value="Третья">Третья</option>

                <option <?php if ($_POST['signup-bloodtype']=="Четвертая"){
                    echo ' selected ';
                } ?> value="Четвертая">Четвертая</option>

            </select>
        </div>

        <div class="mb-3">
            <select name="signup-bloodfactor" class="form-control">
                <option <?php
                if (!isset($_POST['signup-bloodfactor'])) {
                    $_POST['signup-bloodfactor']="Резус фактор";
                }
                if ($_POST['signup-bloodfactor']=="Резус фактор"){
                    echo ' selected ';
                } ?> disabled value="">Резус фактор</option>
                <option <?php if ($_POST['signup-bloodfactor']=="+"){
                    echo ' selected ';
                } ?> value="+">+</option>
                <option <?php if ($_POST['signup-bloodfactor']=="-"){
                    echo ' selected ';
                } ?> value="-">-</option>
            </select>
        </div>


        <input type="submit" name="signup-submit"  value="Зарегистрироваться" class="btn btn-success"">
        <a href="login-page.php" class="btn btn-success">Войти</a>
    </form>
</div>

<?php
if (isset($_GET['message'])) {
    echo '<h1 class="center" "> ' . $_GET['message'] . ' </h1>';
}
unset($_GET['message']);
?>


<?php
include_once 'footer.php';
?>
