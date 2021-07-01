<?php
$user='tester1';

$servername = "mpkchiller.com";
$username = "mpkchill_user1";
$password = "commodore64128";
$dbname = "mpkchill_MPK";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$tablename="table_".$user."_data";
$response_tablename="table_".$user."_response";

?>

<style>
table {
    /*border-collapse: collapse;*/
    display: inline;
    border: 0px solid blue;
    border-spacing:5px;
    padding:5px;
    margin:0px;
    /*text-align:center;*/
    width:50%;
}
 th {
    
    border: 5px solid red;
    padding:10px;
    height:120px;
    vertical-align: center;
    background-color: #4CAF50;
    color:white;
    font-size:2.5em;
}
 td {
    
    border: 5px solid yellow;
    padding:10px;
    vertical-align:center;
    text-align:center;
    color:yellow;
    font-size:2.5em;
}
tr:nth-child(even) {background-color: rgba(10, 100, 200, .9)}
tr:hover{background-color:rgba(200, 0, 200, .5)}

</style>


<?php


$sql = "SELECT * FROM ".$tablename;
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
mysqli_close($conn);

?>
<center>
 <div>
    <table>

<tr>
    
    <th>User Name :</th>
  <th><?php echo $user; ?></th>  
  
    
</tr>
 
  
  <tr>
      <td><?php echo 'Cooling Set. :'; ?></td>      
    <td><?php echo $row["j_Setpoint"].' C'; ?></td>
    </tr>
  
      <tr>
      <td><?php echo 'Ambient Temp. :'; ?></td>      
    <td><?php echo $row["j_Airtemp"].' C'; ?></td>
    </tr>
    
      <tr>
      <td><?php echo 'Inlet W.Temp. :'; ?></td>      
    <td><?php echo $row["j_witemp"].' C'; ?></td>
    </tr>
   
    
      <tr>
      <td><?php echo 'Outlet W.Temp. :'; ?></td>      
    <td><?php echo $row["j_wotemp"].' C'; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'ECONOMIC TEMP:'; ?></td>      
    <td><?php echo $row["j_Ecosetpoint"].' C'; ?></td>
    </tr>
    
      <tr>
      <td><?php echo 'ECONOMIC:'; ?></td>      
    <td><?php echo $row["j_Eco"]; ?></td>
    </tr>
    
      <tr>
      <td><?php echo 'AUTO:'; ?></td>      
    <td><?php echo $row["j_Autostart"]; ?></td>
    </tr>
      <tr>
      <td><?php echo 'ERROR:'; ?></td>      
    <td><?php echo $row["j_error"]; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'Trigger:'; ?></td>      
    <td><?php echo $row["i_trigger"]; ?></td>
    </tr>
   
  
</table>
   </div>
   </center>
   
  
