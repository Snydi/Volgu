<?php
require_once  "TableModule.php";
class CrewsTableModule extends TableModule
{
    protected function getTableName(): string
    {
      return "crews";
    }
    protected function getFields(): string
    {
        return 'crew';
    }
    protected function getVars(): string
    {
        $crewsresult = "'";
        $crewsresult .=  mysqli_real_escape_string(Database::connection(),$_POST["crews"]);
        $crewsresult .="'";;
        return $crewsresult;
    }


}