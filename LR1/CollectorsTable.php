<?php
require_once 'Database.php';
error_reporting(E_ERROR | E_PARSE);
class CollectorsTable
{
    public static function createQuery($name,$birth_date,$characteristic,$id_crew)
    {
        $img_path=self::getRelativeFilePath();

        if (!$img_path) return "Проблемы с файлом, проверьте его тип!";
        if (self::CheckPostData($name,$birth_date,$characteristic,$id_crew)) {
            self::removeSqlInjection($name, $birth_date, $characteristic, $img_path,$id_crew);
            $query = "INSERT INTO collectors(name, birth_date,characteristic, img_path, id_crew ) 
					        VALUES ('$name', '$birth_date', '$characteristic','$img_path','$id_crew')";
            $result = mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));
        }
        if (isset($result)) return "Запись успешно добавлена!";
        return "При добавлении записи произошла ошибка, проверьте данные!";
    }
    public static function updateQuery(
        $name,$birth_date,$characteristic,$id_crew)
    {
        $defunct_id=self::getId();
        self::deleteImage($defunct_id);
        $img_path=self::getRelativeFilePath();
        if (!$img_path) return "Проблемы с файлом, проверьте его тип!";
        if (self::CheckPostData($name,$birth_date,$characteristic,$id_crew)) {
            self::removeSqlInjection($name, $birth_date, $characteristic, $img_path, $id_crew);

            $query = "UPDATE collectors SET 
                    name='$name', 
                    birth_date='$birth_date',
                    characteristic='$characteristic',
                    img_path='$img_path',
                    id_crew='$id_crew' WHERE id='$defunct_id'";
            $result = mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));
        }
        if (isset($result)) return "Запись успешно обновлена!";
        return "При обновлении записи произошла ошибка, проверьте данные!";
    }
    public static function deleteQuery(){
        $id=self::getId();
        self::deleteImage($id);
        $query = "DELETE FROM collectors WHERE id='$id'";
        $result = mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));
    }
    private static function getId(){
        return $_GET['id'];
    }
    private static function getCrew(){
        return $_GET['crew'];
    }
    private static function deleteImage($id){
        $remove_img_query="SELECT * FROM collectors WHERE id='$id'";
        $remove_img_result= mysqli_query(Database::connection(), $remove_img_query) or die(mysqli_error(Database::connection()));
        $remove_img_result=mysqli_fetch_assoc($remove_img_result);
        if (file_exists($_SERVER['DOCUMENT_ROOT'].'/SEM2/LR1/inc/images/'.$remove_img_result['img_path']))
        unlink($_SERVER['DOCUMENT_ROOT'].'/SEM2/LR1/inc/images/'.$remove_img_result['img_path']);
    }
    public static function getRecord(){
        $defunct_id=self::getId();
        $id_query="SELECT * FROM collectors WHERE id='$defunct_id'";
        $defunct=mysqli_query(Database::connection(),$id_query) or die(mysqli_error(Database::connection()));
        return mysqli_fetch_assoc($defunct);
    }

    private static function CheckPostData($name, $birth_date,$characteristic,$id_crew): bool
    {
    if (isset($name)&&is_string($name) &&isset($id_crew) &&isset($birth_date)&&strtotime($birth_date) &&isset($characteristic)&&is_string($characteristic))
       {return true;}
        else return false;
    }
    private static function removeSqlInjection(string &$name,string &$birth_date,string &$characteristic,string &$img_path,string &$id_crew){
        $name=mysqli_real_escape_string(Database::connection(),$name);
        $birth_date=mysqli_real_escape_string(Database::connection(),$birth_date);
        $characteristic=mysqli_real_escape_string(Database::connection(),$characteristic);
        $img_path=mysqli_real_escape_string(Database::connection(),$img_path);
        $id_crew=mysqli_real_escape_string(Database::connection(),$id_crew);
    }
    public static function getAllData(){
        $query="SELECT *,collectors.id FROM collectors INNER JOIN crews ON collectors.id_crew = crews.id";
        $crew=self::getCrew();
        if (isset($crew)) {
            $query = "SELECT *,collectors.id FROM collectors INNER JOIN crews ON collectors.id_crew = crews.id WHERE crew = '$crew'";
        }
        if (Database::connection()) {
            $queryresult = mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));
        }
        $result=array();
        if(isset($queryresult)) {
            if (mysqli_num_rows($queryresult))
                while ($row = mysqli_fetch_assoc($queryresult))
                    $result[] = $row;
        }

        return $result;
    }
    public static function getCrewData():mysqli_result{ //функция берет информацию ТОЛЬКО для дропдауна
        $query="SELECT crew FROM crews";
        if (Database::connection()) {
            $result = mysqli_query(Database::connection(), $query) or die(mysqli_error(Database::connection()));
        }
        return $result;
    }
    private static function getRelativeFilePath():string {
        $uploadDir =$_SERVER['DOCUMENT_ROOT'].'/SEM2/LR1/inc/images/'; //
        $filename=basename($_FILES['setDefunctPhoto']['name']); //
        $uploadFile = $uploadDir.$filename;//
        $type=pathinfo($uploadFile, PATHINFO_EXTENSION); //

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','');
        $check = 0;
        while ($check == 0) {
            if (in_array($type, $allowTypes)) {
                move_uploaded_file($_FILES["setDefunctPhoto"]["tmp_name"], $uploadFile);
                $check = 1;
            } else {
                echo "Неверный формат файла.";
                exit();
            }
        }
        return  $filename;
    }
}