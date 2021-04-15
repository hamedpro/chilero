<?php
include("database.php");
$sql = "select * from main";
$results = $db->query($sql);
$tmp = [];
while($row = mysqli_fetch_assoc($results)){
    $tmp[] = $row["number"];
}
echo json_encode($tmp);