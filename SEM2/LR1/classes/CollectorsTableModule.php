<?php
require_once  "TableModule.php";
class CollectorsTableModule extends TableModule
{
    protected function getTableName(): string
    {
        return 'collectors';
    }
    protected function getFields(): string
    {
        return "`name`, `birth_date`, `characteristic`, `img_path`, `id_crew`";
    }
    protected function getVars(): string
    {
        $count = 0;
        $collectorsresult = "'";
        $collectorsCE = array();
        $collectorsCE[] =  mysqli_real_escape_string(Database::connection(), $_POST['name']);
        $collectorsCE[] =  mysqli_real_escape_string(Database::connection(), $_POST['birth_date']);
        $collectorsCE[] =  mysqli_real_escape_string(Database::connection(), $_POST['characteristic']);
        $collectorsCE[] = $this->getImage();
        $collectorsCE[] =  mysqli_real_escape_string(Database::connection(), $_POST['id_crew']);
        foreach ($collectorsCE as $item){
            $collectorsresult .= $collectorsCE[$count];
            $collectorsresult .= "', '";
            $count ++;
        }
        $collectorsresult = substr($collectorsresult, 0, -3);
        return $collectorsresult;
    }
}