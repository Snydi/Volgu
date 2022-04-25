<?php
require_once  "CollectorsTableModule.php";
class CollectorsActions extends CollectorsTableModule
{
    public static function processRequest()
    {
        $obj = new CollectorsTableModule();
        $values[] =  mysqli_real_escape_string(Database::connection(), $_POST['name']);
        $values[] =  mysqli_real_escape_string(Database::connection(), $_POST['birth_date']);
        $values[] =  mysqli_real_escape_string(Database::connection(), $_POST['characteristic']);
        $values[] =  mysqli_real_escape_string(Database::connection(),TableModule::getImage());
        $values[] =  mysqli_real_escape_string(Database::connection(), $_POST['id_crew']);
        if (isset($_POST['collectors_button']) && $_POST['action'] == 'create' && isset($values))
        {
            $obj->create($values);
            header('Location: collectors.php');
        }
        if (isset($_POST['collectors_button']) &&  isset($_POST['editid']) &&  isset($values))
        {
            $id = mysqli_real_escape_string(Database::connection(), $_POST['editid']);
            $obj->deleteImage($id);
            $obj->update($id,$values);

            header('Location: collectors.php');
        }
        if (isset($_GET['collectorsdeleteid']))
        {
            $id = mysqli_real_escape_string(Database::connection(), $_GET['collectorsdeleteid']);
            $obj->deleteImage($id);
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