<?php
include('database.php');
function get_table_as_json(){
    global $db_instance;
    $table_name = $_REQUEST['table_name'];
    $query = "select * from $table_name";
    $results = [];
    $query_results = $db_instance->query($query);
    while($row = mysqli_fetch_assoc($query_results)){
        $results[] = $row;
    };
    echo json_encode($results);
};
function new_record(){
    global $db_instance;
    $company = $_REQUEST['company'];
    $sample = $_REQUEST['sample'];
    $set_point = $_REQUEST['set_point'];
    $witemp = $_REQUEST['witemp'];
    $wotemp = $_REQUEST['wotemp'];
    $air_temp = $_REQUEST['air_temp'];
    $error = $_REQUEST['error'];
    $compno = $_REQUEST['compno'];
    $fancoil = $_REQUEST['fancoil'];
    $screen_active_time_in = $_REQUEST['screen_active_time_in'];
    $eco = $_REQUEST['eco'];
    $eco_set_point = $_REQUEST['eco_set_point'];
    $auto_start = $_REQUEST['auto_start'];

    $query = "insert into records (company,sample,set_point,witemp,wotemp,air_temp,error,compno,fancoil,screen_active_time_in,eco,eco_set_point,auto_start) values ('$company','$sample','$set_point','$witemp','$wotemp','$air_temp','$error','$compno','$fancoil','$screen_active_time_in','$eco','$eco_set_point','$auto_start')";
    
    if($db_instance->query($query)){
        echo 'true';
    }else{
        echo $db_instance->error;
    };
};

