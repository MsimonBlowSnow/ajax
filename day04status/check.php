<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "123" && $password == "234"){
        echo "登陆成功";
    }else{
        echo "登录失败";
    }
?>