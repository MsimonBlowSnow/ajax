<?php
    /* $uname = "ming";
    $lover = "play";
    $arr = '{"name":"'.$uname.'","age":"'.$lover.'"}';
    echo $arr;
 */
        $arr = array();
        $arr[1] =  array("name"=>"ming","age"=>17,"lover"=>"play"); 
        //把数组转化为json字符串。
        $str = json_encode($arr[1]);
        echo $str;
?>