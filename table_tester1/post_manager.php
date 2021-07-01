
<?php
$user='tester1';
$pass='500604';

$servername = "mpkchiller.com";
$username = "mpkchill_user1";
$password = "commodore64128";
$dbname = "mpkchill_MPK";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$tablename="table_".$user."_data";
$response_tablename="table_".$user."_response"; 


 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    if(isset($_POST["password"]))
     $passkey=$_POST["password"]; 
     else
     $passkey="";
     
      if(isset($_POST["j_hostpage"]))
     $j_hostpage=$_POST["j_hostpage"]; 
     else
     $j_hostpage="0";
     
     
     $page_tablename="table_".$user."_hostpage";
     $sql = "UPDATE ".$page_tablename." SET "
     ."j_hostpage='".$j_hostpage."'";
     
      mysqli_query($conn, $sql);
    
   
     
     if(isset($_POST["message2"]))
     $message=$_POST["message2"]; 
     else
     $message="";
    
  if($passkey==$pass) { 

$arr = json_decode($message, true);


 
$sql = "UPDATE ".$tablename." SET "
."j_Company='".$arr[0]["j_Company"] ."'"
.",j_Start_button='".$arr[0]["j_Start_button"]."'"
.",j_Sample='".$arr[0]["j_Sample"]."'"
.",j_Setpoint='".$arr[0]["j_Setpoint"]."'"
.",j_witemp='".$arr[0]["j_witemp"]."'"
.",j_wotemp='".$arr[0]["j_wotemp"]."'"
.",j_Airtemp='".$arr[0]["j_Airtemp"]."'"
.",j_error='".$arr[0]["j_error"]."'"
.",j_Fancoil='".$arr[0]["j_Fancoil"]."'"
.",j_screenactivetimemin='".$arr[0]["j_screenactivetimemin"]."'"
.",j_Eco='".$arr[0]["j_Eco"]."'"
.",j_Ecosetpoint='".$arr[0]["j_Ecosetpoint"]."'"
.",j_Autostart='".$arr[0]["j_Autostart"]."'"

.",j_hostpage='".$j_hostpage."'"
.",i_trigger='".$arr[0]["i_trigger"]."'"
.",i_reset='".$arr[0]["i_reset"]."'"

     //=================================================================
.",j_diagram_witemp='".$arr[0]["j_diagram_witemp"]."'"
.",j_diagram_wotemp='".$arr[0]["j_diagram_wotemp"]."'"
.",j_diagram_hec1temp='".$arr[0]["j_diagram_hec1temp"]."'"
.",j_diagram_airtemp='".$arr[0]["j_diagram_airtemp"]."'"
.",j_diagram_suctiontemp1='".$arr[0]["j_diagram_suctiontemp1"]."'"
.",j_diagram_dischargetemp1='".$arr[0]["j_diagram_dischargetemp1"]."'"
.",j_diagram_liquidtemp1='".$arr[0]["j_diagram_liquidtemp1"]."'"
.",j_diagram_eevtemp1='".$arr[0]["j_diagram_eevtemp1"]."'"
.",j_diagram_superheat1='".$arr[0]["j_diagram_superheat1"]."'"
.",j_diagram_delta_superheat1='".$arr[0]["j_diagram_delta_superheat1"]."'"
.",j_diagram_suction1_pressure='".$arr[0]["j_diagram_suction1_pressure"]."'"
.",j_diagram_discharge1_pressure='".$arr[0]["j_diagram_discharge1_pressure"]."'"
.",j_diagram_current1='".$arr[0]["j_diagram_current1"]."'"
.",j_diagram_compressor1='".$arr[0]["j_diagram_compressor1"]."'"
.",j_diagram_pump='".$arr[0]["j_diagram_pump"]."'"
.",j_diagram_fan='".$arr[0]["j_diagram_fan"]."'"
.",j_diagram_fan_speed='".$arr[0]["j_diagram_fan_speed"]."'"
.",j_diagram_flow_switch='".$arr[0]["j_diagram_flow_switch"]."'"
.",j_diagram_flow_meter_pwm='".$arr[0]["j_diagram_flow_meter_pwm"]."'"
.",j_diagram_comp1runtimemin='".$arr[0]["j_diagram_comp1runtimemin"]."'"
.",j_diagram_comp1runtimesec='".$arr[0]["j_diagram_comp1runtimesec"]."'"
.",j_diagram_comp1runtime='".$arr[0]["j_diagram_comp1runtime"]."'"
.",j_diagram_eev1_step='".$arr[0]["j_diagram_eev1_step"]."'"
.",j_diagram_refrigrant='".$arr[0]["j_diagram_refrigrant"]."'";
//============================================================================


mysqli_query($conn, $sql);

//==============================================================================
//==============================================================================
$sql = "SELECT * FROM ".$response_tablename;
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
mysqli_close($conn);

$Obj=(object)array(); 

$Obj->i_trigger = $row["i_trigger"];
$Obj->i_reset = $row["i_reset"];
$Obj->k_desired_hostpage=$row["k_desired_hostpage"];

$Obj->k_Starton = $row["k_Starton"];
$Obj->k_Startonhelp = $row["k_Startonhelp"];



$myJSON = json_encode($Obj);

echo "[".$myJSON."]";
//=============================================================================
   
//=============================================================================
//mysqli_close($conn);
}  //end of  if($passkey==$pass)

} //end of if something is posted




?>