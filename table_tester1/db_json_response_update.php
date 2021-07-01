<?php

$user='tester1';


$param = $_REQUEST["q"];

$servername = "mpkchiller.com";
$username = "mpkchill_user1";
$password = "commodore64128";
$dbname = "mpkchill_MPK";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$page_tablename="table_".$user."_hostpage";
$sql = "SELECT * FROM ".$page_tablename;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$j_hostpage = $row["j_hostpage"];

$response_tablename="table_".$user."_response";
$arr = json_decode($param, true);

 switch($j_hostpage) { 
     case "1": //chiller page1 activity
$sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"
.",k_Starton='".$arr[0]["k_Starton"]."'"
.",k_Startonhelp='".$arr[0]["k_Startonhelp"]."'";
    break;
    
 
    
    case "2":  //chiller_menu_activity
       $sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 
        
        break;
        
          case "21": //chiller_check_activity
       $sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 
        
        break;
        
         case "3": //chiller_settings_activity
       $sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 
        
        break;
        
         case "32"://chiller_settings_activity
       $sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 
        
        break;
        
           
     case "8": //ask_for_reset activity
$sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",i_reset='".$arr[0]["i_reset"]."'"
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 

    break;
    
               
     case "18": //ask_for_reset activity
$sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",i_reset='".$arr[0]["i_reset"]."'"
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 

    break;
        
           case "51": //chiller_gcheck_activity
       $sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 
        
        break;
        
           case "52": //chiller_gcheck_activity
       $sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 
        
        break;
        
        case "53": //chiller_gcheck_activity
       $sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 
        
        break;
        
        case "54": //chiller_gcheck_activity
       $sql = "UPDATE ".$response_tablename." SET "
."i_trigger='".$arr[0]["i_trigger"]."'" 
.",k_desired_hostpage='".$arr[0]["k_desired_hostpage"]."'"; 
        
        break;
 }   

mysqli_query($conn, $sql);
mysqli_close($conn);

echo $sql;

//mysqli_close($conn);

?>