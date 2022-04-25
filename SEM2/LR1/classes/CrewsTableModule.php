<?php
require_once  "TableModule.php";
class CrewsTableModule extends TableModule
{
    protected function getTableName(): string
    {
      return "crews";
    }
    protected function getFields(): array
    {
        $fields[] = 'crew';
        return $fields;
    }
}