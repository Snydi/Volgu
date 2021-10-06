<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'collectorsdb';




$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName );


if(isset($_GET['submit'])) {

    $id = $_GET['id'];
    $name = $_GET['name'];
    $crew = $_GET['crew'];
    $characteristic = $_GET['characteristic'];

    $from_date = $_GET['from_date'];
    $fdate = strtotime($from_date);
    $fdate = date("Y-m-d",$fdate);

    $to_date = $_GET['to_date'];
    $tdate = strtotime($to_date);
    $tdate = date("Y-m-d",$tdate);

    $query = "SELECT *,collectors.id FROM collectors INNER JOIN crews ON collectors.id_crew = crews.id ";

    $conditions = array();


    if(! empty($id)) {
        $conditions[] = "collectors.id='$id'";
    }
    if(! empty($name)) {
        $conditions[] = "name  LIKE '%$name%'";
    }
    if(! empty($crew)) {
        $conditions[] = "crew='$crew'";
    }
    if(! empty($characteristic)) {
        $conditions[] = "characteristic LIKE '%$characteristic%'";
    }
    if(! empty($from_date) && ! empty($to_date)) {
        $conditions[] = "birth_date>='$fdate' && birth_date<='$tdate'";

    }
    if(! empty($from_date) ) {
        $conditions[] = "birth_date>='$fdate'";
    }
    if(  ! empty($to_date)) {
        $conditions[] = " birth_date<='$tdate'";
    }

    $sql = $query;

    if (count($conditions) > 0) {
        $sql .= " WHERE " . implode(' AND ', $conditions);
    }

    $data = mysqli_query($conn,$sql) or die(mysqli_error($conn));


    if(mysqli_num_rows($data)) {
        while($row = mysqli_fetch_assoc($data)) {
            $id = $row['id'];
            $img_path = $row['img_path'];
            $name = $row['name'];
            $crew = $row['crew'];
            $birth_date = $row['birth_date'];
            $characteristic = $row['characteristic'];
            ?>
            <tr>
                <td><?php echo $id;?></td>
                <td> <img style="max-width: 150px" src="<?php echo $img_path;?>" > </td>
                <td><?php echo $name;?></td>
                <td><?php echo $crew;?></td>
                <td><?php echo $characteristic;?></td>
                <td><?php echo $birth_date;?></td>
            </tr>
            <?php

        }
    }
    else{?>
        <tr>
            <td>Not found!</td>
        </tr>
        <?php

    }


}
else {
    $query = "SELECT *,collectors.id FROM collectors INNER JOIN crews ON collectors.id_crew = crews.id group by collectors.id";

    $data = mysqli_query($conn,$query) or die(mysqli_error($conn));

    if(mysqli_num_rows($data)) {
        while ($row = mysqli_fetch_assoc($data)) {
            $id = $row['id'];
            $img_path = $row['img_path'];
            $name = $row['name'];
            $crew = $row['crew'];
            $birth_date = $row['birth_date'];
            $characteristic = $row['characteristic'];

            ?>
            <tr>
                <td><?php echo $id;?></td>
                <td> <img style="max-width: 150px" src="<?php echo $img_path;?>" > </td>
                <td><?php echo $name;?></td>
                <td><?php echo $crew;?></td>
                <td><?php echo $characteristic;?></td>
                <td><?php echo $birth_date;?></td>
            </tr>

            <?php

        }
    }

}


?>
