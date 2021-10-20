<?php
require_once 'login-script.php';
include_once 'header.php';
?>

<?php
if(isset($_GET["error"])) {
    if ($_GET["error"] == "none") {
        echo "<H1 class='center'> Регистрация прошла успешно. Пожалуйста, авторизуйтесь: </H1>";
    }
}
?>

<div class="container text-center" style = max-width:50%; >
    <form action="login-page.php" method="POST"  >
        <div class="mb-3" >
            <input type="text" name="login-email" placeholder="Логин" value="<?php echo isset($_POST['login-email']) ? $_POST['login-email'] : '' ?>" class="form-control">
        </div>

        <div class="mb-3" >
            <input type="password" name="login-password" placeholder="Пароль" value="<?php echo isset($_POST['login-password']) ? $_POST['login-password'] : '' ?>" class="form-control">
        </div>

            <input type="submit" name="login-submit" value="Войти" class="btn btn-success">
            <a href="signup-page.php" class="btn btn-success">Зарегистрироваться</a>
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
