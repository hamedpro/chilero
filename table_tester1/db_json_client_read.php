<?php
$user='tester1';


$servername = "mpkchiller.com";
$username = "mpkchill_user1";
$password = "commodore64128";
$dbname = "mpkchill_MPK";
$conn = mysqli_connect($servername, $username, $password, $dbname);



$tablename="table_".$user."_data";
$sql = "SELECT * FROM ".$tablename;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_close($conn);

$Obj=(object)array(); 

$Obj->j_Company = $row["j_Company"];
$Obj->j_Start_button = $row["j_Start_button"];
$Obj->j_Setpoint = $row["j_Setpoint"];
$Obj->j_Airtemp = $row["j_Airtemp"];
$Obj->j_witemp = $row["j_witemp"];
$Obj->j_wotemp = $row["j_wotemp"];
$Obj->j_Ecosetpoint = $row["j_Ecosetpoint"];
$Obj->j_Eco = $row["j_Eco"];
$Obj->j_Autostart = $row["j_Autostart"];
$Obj->j_error = $row["j_error"];

$Obj->j_hostpage = $row["j_hostpage"];
$Obj->i_trigger = $row["i_trigger"];

$Obj->i_reset = $row["i_reset"];




$myJSON = "[".json_encode($Obj)."]";

echo $myJSON;



?>