<?php
include_once  'header.php';
require_once 'logic.php';
?>

    <form action="text.php" method="POST"  >
            <div class="mb-3" >
                <label>Text</label>
                <textarea  name="text" placeholder="text" class="form-control"><?php echo $_POST['text']; ?></textarea>
                <input type="submit" name="submit" value="Войти" class="btn btn-success">
            </div>
    </form>

<?php


if (isset($_POST['submit'])) {

    $html =  $_SESSION['html'];
    $html = $_POST['text'];
    $html= str_replace(" - ","–",$html);
    $html= str_replace(" -- "," —",$html);
    echo $html;
    unset($_SESSION['html']);
}



?>


<?php




include_once 'footer.php';