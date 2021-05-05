<?php
$server_name = 'localhost';
$username = 'root';
$password = '';

//db_instanceect to mysql => 
$db_instance = new mysqli(
    $server_name,
    $username,
    $password
);

//create database for first time =>
$query = "create database if not exists chilero" ; //make sure for utf-8 support
$db_instance->query($query);
$db_instance->close();

//connect to database =>
$db_instance = new mysqli(
    $server_name,
    $username,
    $password,
    'chilero'
);

//build db structure => 
$query = "create table if not exists records(
    id int(6) primary key auto_increment,
    company varchar(200),
    sample varchar(200),
    set_point varchar(200),
    witemp varchar(200),
    wotemp varchar(200),
    air_temp varchar(200),
    error varchar(200),
    compno varchar(200),
    fancoil varchar(200),
    screen_active_time_in varchar(200),
    eco varchar(200),
    eco_set_point varchar(200),
    auto_start varchar(200)
)";
echo $db_instance->query($query) ? "" : $db_instance->error;
