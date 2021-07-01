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
      <td><?php echo 'diagram_witemp :'; ?></td>      
    <td><?php echo $row["j_diagram_witemp"].' C'; ?></td>
    </tr>
  
      <tr>
      <td><?php echo 'diagram_wotemp'; ?></td>      
    <td><?php echo $row["j_diagram_wotemp"].' C'; ?></td>
    </tr>
    
      <tr>
      <td><?php echo 'diagram_hectemp'; ?></td>      
    <td><?php echo $row["j_diagram_hec1temp"].' C'; ?></td>
    </tr>
   
    
      <tr>
      <td><?php echo 'diagram_airtemp'; ?></td>      
    <td><?php echo $row["j_diagram_airtemp"].' C'; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_suctiontemp'; ?></td>      
    <td><?php echo $row["j_diagram_suctiontemp1"].' C'; ?></td>
    </tr>
    
      <tr>
      <td><?php echo 'diagram_dischargetemp'; ?></td>      
    <td><?php echo $row["j_diagram_dischargetemp1"].' C'; ?></td>
    </tr>
    
      <tr>
      <td><?php echo 'diagram_liquidtemp'; ?></td>      
    <td><?php echo $row["j_diagram_liquidtemp1"].' C'; ?></td>
    </tr>
      <tr>
      <td><?php echo 'diagram_eevtemp'; ?></td>      
    <td><?php echo $row["j_diagram_eevtemp1"].' C'; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_superheat'; ?></td>      
    <td><?php echo $row["j_diagram_superheat1"].' C'; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_delta_superheat'; ?></td>      
    <td><?php echo $row["j_diagram_delta_superheat1"].' C'; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_suction_pressure'; ?></td>      
    <td><?php echo $row["j_diagram_suction1_pressure"]; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_discharge_pressure'; ?></td>      
    <td><?php echo $row["j_diagram_discharge1_pressure"]; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_current'; ?></td>      
    <td><?php echo $row["j_diagram_current1"].' A'; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_compressor'; ?></td>      
    <td><?php echo $row["j_diagram_compressor1"]; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_pump'; ?></td>      
    <td><?php echo $row["j_diagram_pump"]; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_fan'; ?></td>      
    <td><?php echo $row["j_diagram_fan"]; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_fan_speed'; ?></td>      
    <td><?php echo $row["j_diagram_fan_speed"].' %'; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_flow_switch'; ?></td>      
    <td><?php echo $row["j_diagram_flow_switch"]; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_flow_meter_pwm'; ?></td>      
    <td><?php echo $row["j_diagram_flow_meter_pwm"]; ?></td>
    </tr>
    
     <tr>
      <td><?php echo 'diagram_compruntime'; ?></td>      
    <td><?php echo $row["j_diagram_comp1runtime"].':'.$row["j_diagram_comp1runtimemin"].':'.$row["j_diagram_comp1runtimesec"]; ?></td>
    </tr>
    
     <td><?php echo 'diagram_eev_step'; ?></td>      
    <td><?php echo $row["j_diagram_eev1_step"]; ?></td>
    </tr>
    
     <td><?php echo 'diagram_refrigrant'; ?></td>      
    <td><?php echo $row["j_diagram_refrigrant"]; ?></td>
    </tr>
   
  
</table>
   </div>
   </center>
   
  
