<?php
require_once  "CrewsTableModule.php";
class CrewsActions extends CrewsTableModule
{
    public static function processRequest()
    {

        $result = array();
        $obj = new CrewsTableModule();

            if (isset($_POST['crews_button']) && $_POST['action'] == 'create') {
                $obj->create();
                header('Location: crews.php');
            }
            if (isset($_POST['crews_button']) && isset($_POST['editid']) ) {
                $id = mysqli_real_escape_string(Database::connection(), $_POST['editid']);
                $obj->delete($id);
                $obj->create();
                header('Location: crews.php');
            }
            if (isset($_GET['del'])) {
                $id = mysqli_real_escape_string(Database::connection(), $_GET['del']);
                $obj->delete($id);
            }

            $result = $obj->read();
            return $result;



    }
}
