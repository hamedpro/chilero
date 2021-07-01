<?php
$user='tester1';

$servername = "mpkchiller.com";
$username = "mpkchill_user1";
$password = "commodore64128";
$dbname = "mpkchill_MPK";

$conn = mysqli_connect($servername, $username, $password, $dbname);

?>

<?php
function redirect($url) {
    echo "<script> location.href='".$url."'; </script>";
        exit;
}
?>

<?php
/*
$password_tablename="table_".$user."_password";
$sql = "SELECT * FROM ".$password_tablename;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($row["password_valid"]<>'valid')
redirect('https://www.mpkchiller.com');*/


  $password_tablename="table_".$user."_password";
            $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);  



$page_tablename="table_".$user."_hostpage";
$sql = "SELECT * FROM ".$page_tablename;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

mysqli_close($conn);

$j_hostpage = $row["j_hostpage"];

switch($j_hostpage){
    case "1":
        redirect('https://www.mpkchiller.com/'.'table_'.$user.'/page1.php');
        break;
        
        case "2":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_menu_activity.php');
            break;
            
            case "3":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_settings_activity.php');
            break;
            
            case "32":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_general_settings_activity.php');
            break;
            
            
            case "21":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_check_activity.php');
            break;
            
             case "8":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_ask_for_reset.php');
            break;
            
             case "8":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_error_help_activity.php');
            break;
            
             case "51":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_gcheck_page1_activity.php');
            break;
            
            case "52":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_gcheck_page2_activity.php');
            break;
            
            case "53":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_gcheck_page3_activity.php');
            break;
            
            case "54":
              redirect('https://www.mpkchiller.com/'.'table_'.$user.'/chiller_gcheck_page4_activity.php');
            break;
}




?>