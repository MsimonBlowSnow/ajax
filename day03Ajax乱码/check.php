<?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username == "123" && $password == "234"){
            echo "登录成功";
        }else{
            echo "登录失败";
            echo $username;
            echo $password;
        }
?>