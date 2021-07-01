<?php
$user='tester1';

$servername = "mpkchiller.com";
$username = "mpkchill_user1";
$password = "commodore64128";
$dbname = "mpkchill_MPK";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  $response_tablename="table_".$user."_response"; 
     $sql = "UPDATE ".$response_tablename." SET "
     ."i_trigger='0'";
     
      mysqli_query($conn, $sql);

?>

<style> 
.button {
    
    background-color: #4C5F90;
    border: 5px solid #110000; 
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: block;
    font-size: 42px;
    margin: 4px 2px;
    margin-top: 40px;
    cursor: pointer;
    border-radius: 20%;
    
    
     -webkit-transition-duration: 0.9s; /* Safari */
    transition-duration: 0.1s;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button:hover {
    background-color: #0000ff; /* Green */
    color: white;
    
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>

<head>

</head>
<body 
style="background-color:rgba(0, 0, 255, .6)">
    
    
<center>
<h2 style="font-size: 3em; color:yellow;"><?php echo "Diagram Cycle 4 (54)"."</br>"; ?></h2>
</center>

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
if($row["password_valid"]=='invalid' || $row["password_valid"]=="'invalid'"){
    mysqli_close($conn);
redirect('https://www.mpkchiller.com');
}
else{
  $sql = "UPDATE ".$password_tablename." SET "
    ."password_valid="."'invalid'" ;
    mysqli_query($conn, $sql);    
    mysqli_close($conn);
}*/
?>

<script type="text/javascript">


var trigger="0";
var desired_hostpage="54";



   setInterval(myTimer, 600);
   setInterval(myTimer2, 400);
  

//==================================================================
  function getPhoneTableData(str) {
     var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200 ) {
     
    var file_text=(this.responseText);   
      
  document.getElementById("file_content").innerHTML = file_text;
      
    } 
  };
  xhttp.open("POST","table_output_chiller_gcheck_page1_activity.php?q=" + str, true);
  xhttp.send();  
      
      
  }
  
  
  //==================================================================
  function analysePhoneTextData(str) {
     var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200 ) {
     
    var file_text=(this.responseText);   
     document.getElementById("data_content").innerHTML =file_text;
      
       var obj = JSON.parse(file_text);
       
        jstart_btn_text=obj[0].j_Start_button;//ezafe va delkhah
          j_hostpage=obj[0].j_hostpage; //ezafe
        
       if(obj[0].i_trigger==trigger && trigger=="1"){
       trigger="0";
        createResponseForPhone();
       }
 
      
    } 
  };
  xhttp.open("POST","db_json_client_read.php?q=" + str, true);
  xhttp.send(); 
      
      
  }
 //============================================================ 
  function createResponseForPhone(){
    var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200 ) {   
      var response=(this.responseText);
     document.getElementById("response_content").innerHTML =response;
    } 
  };
  
 var obj = new Object();

obj.i_trigger = trigger;
obj.k_desired_hostpage=desired_hostpage;


//convert object to json string
var string = "["+JSON.stringify(obj)+"]";

   xhttp.open("POST","db_json_response_update.php?q=" + string, true);
  xhttp.send(); 
  }
 //=================================================================== 
  function page_changer(page_exception_number){
    var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200 ) {   
      var response=(this.responseText);
     document.getElementById("page_changer_content").innerHTML =response;
     if(response !="")
     location.href=response;
    } 
  };
  
   xhttp.open("POST","page_changer.php?q=" + page_exception_number, true);
  xhttp.send(); 
  }
  //==================================================================
 


  //========================================================================
  
  function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleString();
    
    getPhoneTableData("x");
    
 
}


 function myTimer2() {
      
     analysePhoneTextData("x");
    page_changer("54");
    
 }
 
 //=========================================================
   function back_btn_click(){
      trigger="1";
     desired_hostpage="21";
 
    createResponseForPhone();
   
  }
  
  function home_btn_click(){
      trigger="1";
     desired_hostpage="1";
 
    createResponseForPhone();
   
  }
  
   function next_cycle_btn_click(){
      trigger="1";
     desired_hostpage="51";
 
    createResponseForPhone();
   
  }
  
  function previous_cycle_btn_click(){
      trigger="1";
     desired_hostpage="53";
 
    createResponseForPhone();
   
  }
 
 //========================================================
  
</script>



<center>
<div id="demo" style ='font:65px/80px Arial,tahoma,sans-serif;color:#11ff00;text-align:center;' ></div>
</center>

<center>
<div id="file_content" style ='margin-top: 40px;font:35px/40px Arial,tahoma,sans-serif;color:#ffff00;text-align:center;' ></div>
</center>

<center>
<button class="button" align="middle"  id="next_cycle_btn" type="button"  onclick="next_cycle_btn_click()" ><?php echo 'Next<br>Cycle'; ?> </button>  
  <button class="button" align="middle"  id="previous_cycle_btn" type="button"  onclick="previous_cycle_btn_click()" ><?php echo 'Previous<br>Cycle'; ?> </button>  
 <button class="button" align="middle"  id="home_btn" type="button"  onclick="home_btn_click()" ><?php echo 'Home'; ?> </button>   
<button class="button" align="middle"  id="back_btn" type="button"  onclick="back_btn_click()" ><?php echo 'Back'; ?> </button>
</center>


<center>
<div id="page_changer_content" style ='margin-top: 40px;font:35px/40px Arial,tahoma,sans-serif;color:#ffff00;text-align:center;width:50%;' ></div>
</center>

<center>
<div id="response_content" style ='margin-top: 40px;font:35px/40px Arial,tahoma,sans-serif;color:#ffff00;text-align:center;width:50%;' ></div>
</center>

<center>
<div id="data_content" style ='margin-top: 40px;font:25px/30px Arial,tahoma,sans-serif;color:#ffffff;text-align:leftr;width:100%;' ></div>
</center>

</body>



