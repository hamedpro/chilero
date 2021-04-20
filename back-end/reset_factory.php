<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "chilero";

$db = new mysqli($servername,$username,$password);
if($db->query("drop database chilero")){
    echo "ok";
};