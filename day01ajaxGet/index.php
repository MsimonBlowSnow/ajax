<?php
    $name = $_GET["username"];
    $pw = $_GET["password"];
    if($name == "123" && $pw == "234"){
        echo 1;
    }else{
        echo 0;
        echo $name;
        echo $pw;
    }
?>