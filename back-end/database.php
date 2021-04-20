<?php

//$servername = "localhost";
//$username = "aneserin_root";
//$password = "hamed1382h";
//$db_name = "aneserin_report_app";

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "chilero";

$db = new mysqli($servername,$username,$password);
$db->set_charset("utf8");
$sql = "create database if not exists $db_name character set utf8mb4 collate utf8mb4_unicode_ci";
$db->query($sql);
$db->close();

$db = new mysqli($servername,$username,$password,$db_name);
$sql = "create table if not exists main(
	id int(5) primary key auto_increment,
	number int(6),
	time varchar(200)
)";
$db->query($sql);
