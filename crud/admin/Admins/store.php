<?php
include_once($_SERVER['DOCUMENT_ROOT']."/batch1-arfan/crud/config.php");

use Bitm\Admin;

$data = $_POST;
// Validation name
function is_empty($value){
    if($value == ''){
        return true;
    }else{
        return false;
    }
}

if(is_empty($data['name'])){
    session_start();
    $_SESSION['message'] = "Name can't be empty.";
    header('location:create.php');
}else{
    $_admin = new Admin();
    $admin = $_admin->store($data);
}
?>