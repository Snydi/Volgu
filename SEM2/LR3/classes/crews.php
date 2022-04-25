<?php
require_once "tableModule.php";

class Crews extends TableModule
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