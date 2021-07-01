<?php
$user='tester1';




$servername = "mpkchiller.com";
$username = "mpkchill_user1";
$password = "commodore64128";
$dbname = "mpkchill_MPK";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//=================================================================
$tablename="table_".$user."_data";
$sql="DROP TABLE ".$tablename;
if (mysqli_query($conn, $sql)) {
  echo  $tablename." deleted successfully<br/>";
} else {
  echo "Error deleting : " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE ".$tablename." (
j_Company VARCHAR(20) ,
j_Password VARCHAR(20), 
j_Start_button VARCHAR(20),
j_Sample VARCHAR(20),
j_Setpoint VARCHAR(20),
j_witemp VARCHAR(20),
j_wotemp VARCHAR(20),
j_Airtemp VARCHAR(20),
j_error VARCHAR(20),
j_Fancoil VARCHAR(20),
j_screenactivetimemin VARCHAR(20),
j_Eco VARCHAR(20),
j_Ecosetpoint VARCHAR(20),
j_Autostart VARCHAR(20),

j_hostpage VARCHAR(20),
i_trigger VARCHAR(20),
i_reset VARCHAR(20),

j_diagram_witemp VARCHAR(20),
j_diagram_wotemp VARCHAR(20),
j_diagram_hec1temp VARCHAR(20),
j_diagram_airtemp VARCHAR(20),
j_diagram_suctiontemp1 VARCHAR(20),
j_diagram_dischargetemp1 VARCHAR(20),
j_diagram_liquidtemp1 VARCHAR(20),
j_diagram_eevtemp1 VARCHAR(20),
j_diagram_superheat1 VARCHAR(20),
j_diagram_delta_superheat1 VARCHAR(20),
j_diagram_suction1_pressure VARCHAR(20),
j_diagram_discharge1_pressure VARCHAR(20),
j_diagram_current1 VARCHAR(20),
j_diagram_compressor1 VARCHAR(20),
j_diagram_pump VARCHAR(20),
j_diagram_fan VARCHAR(20),
j_diagram_fan_speed VARCHAR(20),
j_diagram_flow_switch VARCHAR(20),
j_diagram_flow_meter_pwm VARCHAR(20),
j_diagram_comp1runtimemin VARCHAR(20),
j_diagram_comp1runtimesec VARCHAR(20),
j_diagram_comp1runtime VARCHAR(20),
j_diagram_eev1_step VARCHAR(20),
j_diagram_refrigrant VARCHAR(20)

)";

if (mysqli_query($conn, $sql)) {
echo $tablename." Created successfully <br>";
$sql = "INSERT INTO ".$tablename." (j_Password) VALUES ('1234')";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM ".$tablename;
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  echo mysqli_num_rows($result)." results <br>";
 
} else {
  echo "0 results<br>";
}
} else {
  echo "Error Creating : " . mysqli_error($conn);
}

//========================================================================
$response_tablename="table_".$user."_response";

$sql="DROP TABLE ".$response_tablename;
if (mysqli_query($conn, $sql)) {
  echo $response_tablename." deleted successfully<br/>";
} else {
  echo "Error deleting : " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE ".$response_tablename." (
i_trigger VARCHAR(20),
k_desired_hostpage VARCHAR(20),
k_Starton VARCHAR(20),
k_Startonhelp VARCHAR(20),
i_reset VARCHAR(20)

)";

if (mysqli_query($conn, $sql)) {
echo $response_tablename." Created successfully <br>";

$sql = "INSERT INTO ".$response_tablename." (i_trigger) VALUES ('0')";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM ".$response_tablename;
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  echo mysqli_num_rows($result)." results <br>";
 
} else {
  echo "0 results<br/>";
}
} else {
  echo "Error Creating : " . mysqli_error($conn);
}
//================================================================
$password_tablename="table_".$user."_password";

$sql="DROP TABLE ".$password_tablename;
if (mysqli_query($conn, $sql)) {
  echo $password_tablename." deleted successfully<br/>";
} else {
  echo "Error deleting : " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE ".$password_tablename." (

password_valid VARCHAR(20)

)";

if (mysqli_query($conn, $sql)) {
echo $password_tablename." Created successfully <br/>";

$sql = "INSERT INTO ".$password_tablename." (password_valid) VALUES ('invalid')";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM ".$password_tablename;
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  echo mysqli_num_rows($result)." results <br>";
 
} else {
  echo "0 results<br>";
}
} else {
  echo "Error Creating : " . mysqli_error($conn);
}

//================================================================
//================================================================
$page_tablename="table_".$user."_hostpage";

$sql="DROP TABLE ".$page_tablename;
if (mysqli_query($conn, $sql)) {
  echo $page_tablename." deleted successfully<br/>";
} else {
  echo "Error deleting : " . mysqli_error($conn);
}

// sql to create table
$sql = "CREATE TABLE ".$page_tablename." (

j_hostpage VARCHAR(20)

)";

if (mysqli_query($conn, $sql)) {
echo $page_tablename." Created successfully <br/>";

$sql = "INSERT INTO ".$page_tablename." (j_hostpage) VALUES ('0')";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM ".$page_tablename;
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  echo mysqli_num_rows($result)." results <br>";
 
} else {
  echo "0 results<br>";
}
} else {
  echo "Error Creating : " . mysqli_error($conn);
}

//================================================================
mysqli_close($conn);
?>