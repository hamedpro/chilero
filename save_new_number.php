<?php 
include("database.php");

function save_new_number($db_connection,$number){
    $sql = "
        insert into main (number) values ($number)
    ";
    if($db_connection->query($sql)){
        echo "your number saves successfuly !";
    }else{
        $error_text = $db_connection->error;
        echo "there was an error ! -- error text: $error_text";
    };
};


// answer to get or post requests => 

if(isset($_REQUEST["number"])){
    save_new_number(
        $db,
        (int)$_REQUEST["number"]
    );
}else{
    echo "there is no number available";
};