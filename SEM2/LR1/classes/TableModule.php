<?php
require_once 'Database.php';
error_reporting(E_ERROR | E_PARSE);
abstract class TableModule
{
    abstract  protected function getTableName():string;
    abstract  protected function getFields():string;
    abstract  protected function getVars():string;

    public function read($crewfilter='default'){

        $query= 'SELECT * FROM '.$this->getTableName();

        if ($crewfilter !== 'default') {
            $query= 'SELECT * FROM '.$this->getTableName(). ' WHERE id_crew='. $crewfilter;
        }

        $queryresult = mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));

       $result=array();
       if(isset($queryresult))
       {
           if (mysqli_num_rows($queryresult))
               while ($row = mysqli_fetch_assoc($queryresult))
                   $result[] = $row;
       }
       return $result;
   }
    public  function create()
    {
         $query = "INSERT INTO ".$this->getTableName()."(".$this->getFields().")"." VALUES "."(".$this->getVars().")";
         $result = mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));
    }
    public function delete($id){
        $query = 'DELETE FROM '. $this->getTableName() . ' WHERE id='. $id;
        $result = mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));
    }
    public function getImage():string {
        $uploadDir =$_SERVER['DOCUMENT_ROOT'].'/SEM2/LR1/inc/images/'; //
        $filename=basename($_FILES['img_path']['name']); //
        $uploadFile = $uploadDir.$filename;//
        $type=pathinfo($uploadFile, PATHINFO_EXTENSION); //

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','');

            if (in_array($type, $allowTypes)) {
                move_uploaded_file($_FILES["img_path"]["tmp_name"], $uploadFile);
                $check = 1;
            }

        return  $filename;
    }

   public function deleteImage($id){
       $remove_img_query= 'SELECT * FROM '. $this->getTableName(). ' WHERE id='.$id;
       $remove_img_result= mysqli_query(Database::connection(), $remove_img_query) or die(mysqli_error(Database::connection()));
       $remove_img_result=mysqli_fetch_assoc($remove_img_result);
       if (file_exists($_SERVER['DOCUMENT_ROOT'].'/SEM2/LR1/inc/images/'.$remove_img_result['img_path']))
           unlink($_SERVER['DOCUMENT_ROOT'].'/SEM2/LR1/inc/images/'.$remove_img_result['img_path']);
   }
    public  function getRecord($id){

        $id_query= 'SELECT * FROM '. $this->getTableName(). ' WHERE id='.$id;;
        $result=mysqli_query(Database::connection(),$id_query) or die(mysqli_error(Database::connection()));
        return mysqli_fetch_assoc($result);
    }


}