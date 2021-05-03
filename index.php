<head>

</head>
<body style="background-color:rgba(0, 0, 255, .6)">
<center>
<h2 style="font-size: 3em; color:yellow;"><?php echo "Chiller Monitoring Model"."</br>"; ?></h2>
</center>


<?php
 global $filename;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["filename"]))
     $fn=$_POST["filename"];
     else
     $fn="";
     
     if(isset($_POST["message"]))
     $message=$_POST["message"]; 
     else
     $message="";
    
    if (!empty($fn))
    {
        
      $filename="$fn.html";
     if(file_exists($filename)==0)
      {
       $temp= fopen($filename, "w");   
        fclose($temp);
      }
    }
     
    
    if (!empty($message))
    {
// get the "message" variable from the post request
// this is the data coming from the Android app

// write (append) the data to the file
 file_put_contents($filename,$message);
        

}


}


?>



<script type="text/javascript">
var fname="";
  var file_text="";
  var length=0;
  
  
   setInterval(myTimer, 200);

      //setInterval(loadDoc("MPK"), 1000);
    
  
  
  
  
  function loadDoc(str) {
     var xhttp = new XMLHttpRequest();
 xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200 ) {
     
      var temp=(this.responseText);   
       file_text=temp;
     
   document.getElementById("file_content").innerHTML = file_text;
      
    } 
  };
  xhttp.open("POST","show_file.php?q=" + str, true);
  xhttp.send();  
      
      
  }
  
  
  function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleString();
    
    loadDoc("MPK");
}
  

</script>

<center>
<div id="demo" style ='font:65px/80px Arial,tahoma,sans-serif;color:#11ff00;text-align:center;' ></div>
</center>

<center>
<div id="file_content" style ='font:35px/40px Arial,tahoma,sans-serif;color:#ffff00;text-align:center;' ></div>
</center>

</body>