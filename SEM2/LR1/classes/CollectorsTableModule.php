<?php
require_once  "TableModule.php";
class CollectorsTableModule extends TableModule
{
    protected function getTableName(): string
    {
        return 'collectors';
    }
    protected function getFields(): array
    {
        $fields[] = 'name';
        $fields[] = 'birth_date';
        $fields[] = 'characteristic';
        $fields[] = 'img_path';
        $fields[] = 'id_crew';
        return $fields;
    }
    protected function getValues(): array
    {
        $values[] =  mysqli_real_escape_string(Database::connection(), $_POST['name']);
        $values[] =  mysqli_real_escape_string(Database::connection(), $_POST['birth_date']);
        $values[] =  mysqli_real_escape_string(Database::connection(), $_POST['characteristic']);
        $values[] =  mysqli_real_escape_string(Database::connection(),$this->getImage());
        $values[] =  mysqli_real_escape_string(Database::connection(), $_POST['id_crew']);
        return $values;
    }
}