<?php
require_once "database.php";

abstract class TableModule
{
	abstract protected function getTableName(): string;


	public function delete($id)
	{

        $query = 'DELETE FROM '. $this->getTableName() . ' WHERE id='. $id;
        mysqli_query(Database::connection(), $query) or die("You  cannot delete that.");


	}
    public function deleteImage($id)
    {
        $remove_img_query= 'SELECT * FROM '. $this->getTableName(). ' WHERE id='.$id;
        $remove_img_result= mysqli_query(Database::connection(), $remove_img_query) or die(mysqli_error(Database::connection()));
        $remove_img_result=mysqli_fetch_assoc($remove_img_result);
        if (file_exists($_SERVER['DOCUMENT_ROOT'].'/Volgu/SEM2/LR3/API/inc/images/'.$remove_img_result['img_path'])) {
            unlink($_SERVER['DOCUMENT_ROOT'] . '/Volgu/SEM2/LR3/API/inc/images/' . $remove_img_result['img_path']);
        }
    }

	public function read($needcrews = false,$crewfilter='default')
	{

        $fields = array();
        $sql = "SELECT * FROM " . $this->getTableName();
        if ($needcrews === true)
        {

            $sql = "SELECT collectors.*,crews.crew FROM collectors LEFT JOIN crews ON collectors.id_crew = crews.id ";
        }
        if ($crewfilter !== 'default')
        {
            $sql.=  ' WHERE id_crew='. $crewfilter;
        }


        foreach ($fields as $key => $field) {
            $sql .= "AND " . $key . "=" . $field . " ";
        }

        $queryresult = mysqli_query(Database::connection(), $sql);
        $result = array();
        while ($slice =mysqli_fetch_assoc($queryresult)) {
            $result[] = $slice;
        }
        return $result;
	}


	public function create($message)
	{
        $fields =  array_keys($message);
        $values = $message;
        $query = "INSERT INTO ".$this->getTableName(). " (";
        foreach($fields as $column)
        {
            $query .= $column;
            $query .= ", ";
        }
        $query = substr($query, 0, -2);
        $query .= ")"."VALUES "."(";
        foreach($values as $column)
        {
            $query .= "'";
            $query .= $column;
            $query .= "', ";
        }
        $query = substr($query, 0, -2);
        $query .=  ")";
        mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));
	}
	public function update($message)
	{
        $fields =  array_keys($message);

        $values = $message;
        var_dump($values);
        $id = $message["id"];
        $count = 0;
        $query = "UPDATE ".$this->getTableName(). " SET ";
        foreach($fields as $column)
        {
            $keys = array_keys($values);
            $keys = $keys[array_search("id",$keys)+$count];

            $query .= $column. " = "."'".$values[$keys];
            $query .= "', ";
            $count++;
        }
        $query = substr($query, 0, -2);
        $query .= " WHERE id=". $id;
        mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));
	}

	/**
	 * @param int $id
	 * @return bool
	 */
	public function exists($id): bool
	{
        $queryresult = mysqli_query(Database::connection(),'SELECT * FROM ' . $this->getTableName() . ' WHERE id=' . $id);
        $find = mysqli_fetch_assoc($queryresult);
		return boolval($find);
	}
	/**
	 * @return int
	 */
	public function lastID():int
	{
        $query = "SELECT MAX(ID) FROM " . $this->getTableName();
        $queryresult = mysqli_query(Database::connection(), $query);
		$find = mysqli_fetch_assoc($queryresult);
		return intval($find["MAX(ID)"]);
	}

    function uploadImage(){

        $uploadDir = $_SERVER['DOCUMENT_ROOT'].'/Volgu/SEM2/LR3/API/inc/images/';
        $filename=basename($_FILES['file']['name']);
        $uploadFile = $uploadDir.$filename;
        $type=pathinfo($uploadFile, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','');
        if (in_array($type, $allowTypes)) {
            move_uploaded_file($_FILES["file"]["tmp_name"], $uploadFile);
        }
        return  $filename;
    }
}