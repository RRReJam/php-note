<?php
$name = $_GET['username'];
$namearray = array("mj","kop","billie jean");
if(in_array($name,$namearray)){
    echo "用户名已被注册~";
}else{
    echo "用户名可用！";
}
sleep(1)
?>