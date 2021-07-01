<?php

$user='tester1';


$exception_page_number = $_REQUEST["q"];

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

$url="";


function redirect($url) {
    echo "<script> location.href='".$url."'; </script>";
        exit;
}



switch($j_hostpage){
    
    case "1":
       if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    
    $url="page1.php";
          // redirect('https://www.mpkchiller.com/'.'table_'.$user.'/page1.php');
       }
        break;
        
        case "2":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_menu_activity.php";
           //redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_menu_activity.php');
       }
            break;
            
               case "21":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_check_activity.php";
         
       }
            break;
            
                case "3":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_settings_activity.php";
         
       }
            break;
            
             case "32":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_general_settings_activity.php";
         
       }
            break;
            
             case "8":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_ask_for_reset.php";
         
       }
            break;
            
               case "18":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_error_help_activity.php";
         
       }
            break;
            
                case "51":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_gcheck_page1_activity.php";
         
       }
            break;
            
               case "52":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_gcheck_page2_activity.php";
         
       }
            break;
            
              case "53":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_gcheck_page3_activity.php";
         
       }
            break;
            
              case "54":
              if($j_hostpage <> $exception_page_number) {
           $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);    
    $url="chiller_gcheck_page4_activity.php";
         
       }
            break;
    
}

//echo 'exception page:'.$exception_page_number.'  j_hostpage:'.$j_hostpage;
mysqli_close($conn);
echo $url;



?>