<?php
include('database.php');
$sql = 'select * from main order by id desc limit 5';
$tmp = [];
$results = $db->query($sql);
while($row = mysqli_fetch_assoc($results)){
    $tmp[] = $row;
};
echo json_encode(
    $tmp
);