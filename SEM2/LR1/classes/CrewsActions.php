<?php
require_once  "CrewsTableModule.php";
class CrewsActions extends CrewsTableModule
{
    public static function processRequest()
    {
        $obj = new CrewsTableModule();
        $values[] =  mysqli_real_escape_string(Database::connection(),$_POST["crew"]);

            if (isset($_POST['crews_button']) && $_POST['action'] == 'create' &&  isset($values))
            {
                $obj->create($values);
                header('Location: crews.php');
            }
            if (isset($_POST['crews_button']) && isset($_POST['editid'])  &&  isset($values))
            {
                $id = mysqli_real_escape_string(Database::connection(), $_POST['editid']);
                $obj->update($id,$values);
                header('Location: crews.php');
            }
            if (isset($_GET['crewsdeleteid'])) {
                $id = mysqli_real_escape_string(Database::connection(), $_GET['crewsdeleteid']);
                $obj->delete($id);
                header('Location: crews.php');
            }

            $result = $obj->read();
            return $result;



    }
}
