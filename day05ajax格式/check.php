<?php
    header("Content-Type:text/xml");

    $arr =array();
    $arr[0] = array("name"=>"三国演义","author"=>"罗贯中","desc"=>"蜀国的光荣史");
    $arr[1] = array ("name"=>"水浒传","author"=>"施耐庵","desc"=>"108个朝廷马");
?>

<xml version = "1.0" encoding="utf-8">
<booklist>
    <book>
        <name><?php echo $arr[0]["name"]?></name>
        <author><?php echo $arr[0]["author"]?></author>
        <desc><?php echo $arr[0]["desc"]?></desc>
    </book>
    <book>
        <name><?php echo $arr[1]["name"]?></name>
        <author><?php echo $arr[1]["author"] ?></author>
        <desc><?php echo $arr[1]["desc"] ?></desc>
    </book>
</booklist>
</xml>