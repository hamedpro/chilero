

<?php
$filename = $_REQUEST["q"].".html";

//echo "<div style ='font:70px/70px Arial,tahoma,sans-serif;color:#ff0000; text-align:center;'>  $filename :<br>
//</div>";
?>


<?php

$myfile = fopen($filename, "r") or die("Unable to open file!");
$androidmessages= fread($myfile,filesize($filename));
fclose($myfile);
// load the contents of the file to a variable
//$androidmessages=file_get_contents($filename);


?>


<?php
// display the contents of the variable (which has the contents of the file)

echo $androidmessages; 

?>

