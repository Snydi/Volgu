<?php
require_once  "CollectorsTableModule.php";
class CollectorsActions extends CollectorsTableModule
{
    public static function processRequest()
    {
        $result = array();
        $obj = new CollectorsTableModule();

        if (isset($_POST['collectors_button']) && $_POST['action'] == 'create')
        {
            $obj->create();
            header('Location: collectors.php');
        }
        if (isset($_POST['collectors_button']) &&  isset($_POST['editid']))
        {
            $id = mysqli_real_escape_string(Database::connection(), $_POST['editid']);
            $obj->deleteImage($id);
            $obj->update($id);
            header('Location: collectors.php');
        }
        if (isset($_GET['collectorsdeleteid']))
        {
            $id = mysqli_real_escape_string(Database::connection(), $_GET['collectorsdeleteid']);

            $obj->delete($id);
            header('Location: collectors.php');
        }
            $crewfilter = "default";
            if (isset($_GET['crewfilter'])) {
                $crewfilter = $_GET['crewfilter'];
            }
            $result = $obj->read($crewfilter);
            return $result;

    }


}