<?php

$obj = new mysqLi("localhost", "root", "", "practice");

if($obj->connect_errno != 0){
    echo $obj->connect_error;
    exit();
}
?>