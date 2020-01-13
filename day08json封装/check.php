<?php
        $uname = $_GET['name'];
        $age = $_GET['age'];
        $method = "get";
        if(!$uname){
            $uname = $_POST['name'];
            $age = $_POST['age'];
            $method = "post";
        }
        echo $method."姓名:".$uname.",年龄:".$age;
?>