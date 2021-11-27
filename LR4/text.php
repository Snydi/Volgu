<?php
error_reporting(E_ERROR | E_PARSE);
include_once  'header.php';
include_once  'preset.php';
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
     echo task5and8($html);
     task11($html);
     echo task20($html);
}
include_once 'footer.php';

