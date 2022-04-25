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
}