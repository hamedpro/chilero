<?php

$user='mpk';
$pass='2560';

$user2='hemera';
$pass2='1560';

$user3='jalou';
$pass3='2264';

$user4='netix';
$pass4='22264';

$user5='mpk2';
$pass5='500600';

$user6='mashhad';
$pass6='200400';

$user7='tester1';
$pass7='500604';


$servername = "mpkchiller.com";
$username = "mpkchill_user1";
$password = "commodore64128";
$dbname = "mpkchill_MPK";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$password_tablename="table_".$user."_password";
$password_tablename2="table_".$user2."_password";
$password_tablename3="table_".$user3."_password";
$password_tablename4="table_".$user4."_password";
$password_tablename5="table_".$user5."_password";
$password_tablename6="table_".$user6."_password";
$password_tablename7="table_".$user7."_password";



        $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'invalid'" ;
    mysqli_query($conn, $sql);
    
      $sql = "UPDATE ".$password_tablename2." SET "
    ."password_valid="."'invalid'" ;
    mysqli_query($conn, $sql);
    
      $sql = "UPDATE ".$password_tablename3." SET "
    ."password_valid="."'invalid'" ;
    mysqli_query($conn, $sql);
    
        $sql = "UPDATE ".$password_tablename4." SET "
    ."password_valid="."'invalid'" ;
    mysqli_query($conn, $sql);
    
     $sql = "UPDATE ".$password_tablename5." SET "
    ."password_valid="."'invalid'" ;
    mysqli_query($conn, $sql);
    
     $sql = "UPDATE ".$password_tablename6." SET "
    ."password_valid="."'invalid'" ;
    mysqli_query($conn, $sql);
    
      $sql = "UPDATE ".$password_tablename7." SET "
    ."password_valid="."'invalid'" ;
    mysqli_query($conn, $sql);


?>

<?php
function redirect($url) {
    echo "<script> location.href='".$url."'; </script>";
       exit;
}
?>


<?php
$message="";
if(count($_POST)>0) {
    
    if( $_POST["userName"]==$user && $_POST["password"]==$pass){
      $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);
     mysqli_close($conn);  
        redirect('https://www.mpkchiller.com/table_'.$user.'/index.php');
       
       
    }
    else
     if( $_POST["userName"]==$user2 && $_POST["password"]==$pass2){
      $sql = "UPDATE ".$password_tablename2." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
       
        redirect('https://www.mpkchiller.com/table_'.$user2.'/index.php');
       
       
    }
     else
     if( $_POST["userName"]==$user3 && $_POST["password"]==$pass3){
      $sql = "UPDATE ".$password_tablename3." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
       
        redirect('https://www.mpkchiller.com/table_'.$user3.'/index.php');
       
       
    }
    
        else
     if( $_POST["userName"]==$user4 && $_POST["password"]==$pass4){
      $sql = "UPDATE ".$password_tablename4." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
       
        redirect('https://www.mpkchiller.com/table_'.$user4.'/index.php');
       
       
    }
    
       else
     if( $_POST["userName"]==$user5 && $_POST["password"]==$pass5){
      $sql = "UPDATE ".$password_tablename5." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
       
        redirect('https://www.mpkchiller.com/table_'.$user5.'/index.php');
    }
      else
     if( $_POST["userName"]==$user6 && $_POST["password"]==$pass6){
      $sql = "UPDATE ".$password_tablename6." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
       
        redirect('https://www.mpkchiller.com/table_'.$user6.'/index.php');
    }
    
     else
     if( $_POST["userName"]==$user7 && $_POST["password"]==$pass7){
      $sql = "UPDATE ".$password_tablename7." SET "
    ."password_valid="."'valid'" ;
    mysqli_query($conn, $sql);
    mysqli_close($conn);
       
        redirect('https://www.mpkchiller.com/table_'.$user7.'/index.php');
    }
    
    else
     $message="Invalid user or password! ";
   
    
   
}
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
	<div class="message"><?php if($message!="") { echo $message; } ?></div>
		<table border="10" cellpadding="20" cellspacing="1" width="500" align="center" class="tblLogin">
			<tr class="tableheader">
			<td align="center" colspan="2">Enter Login Details</td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="text" name="userName" placeholder="User Name" class="login-input"></td>
			</tr>
			<tr class="tablerow">
			<td>
			<input type="password" name="password" placeholder="Password" class="login-input"></td>
			</tr>
			<tr class="tableheader">
			<td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
			</tr>
		</table>
</form>
</body></html>